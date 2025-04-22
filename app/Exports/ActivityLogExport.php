<?php

namespace App\Exports;

use App\Http\Controllers\ActivityLogger;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Csv;
use Illuminate\Contracts\Support\Responsable;
use App\Models\ActivityLog;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ActivityLogExport implements Responsable
{
    protected $spreadsheet;
    protected $searchValue;

    public function __construct($searchValue = null)
    {
        $this->spreadsheet = new Spreadsheet();
        $this->searchValue = $searchValue;
    }

    public function export(): Spreadsheet
    {
        $sheet = $this->spreadsheet->getActiveSheet();
        $sheet->setCellValue('A1', 'User');
        $sheet->setCellValue('B1', 'Action');
        $sheet->setCellValue('C1', 'description');
        $sheet->setCellValue('D1', 'Created At');

        // Fetch data from database
        $query = ActivityLog::query();
        if ($this->searchValue != null) {
            $query = DB::table('activity_logs')
                ->join('users', 'activity_logs.user_id', '=', 'users.id')
                ->select('activity_logs.*', 'users.name as user_name') // Select needed fields
                ->where(function ($q) {
                    if ($this->searchValue) {
                        $q->where('users.name', 'like', '%' . $this->searchValue . '%')
                            ->orWhere('activity_logs.action', 'like', '%' . $this->searchValue . '%')
                            ->orWhere('activity_logs.description', 'like', '%' . $this->searchValue . '%')
                            ->orWhere('activity_logs.created_at', 'like', '%' . date('Y-m-d', strtotime($this->searchValue)) . '%');
                    }
                })
                ->orderBy('activity_logs.created_at', 'desc'); // Order by latest records
            $activityLogs = $query->get();
        } else {
            $activityLogs = ActivityLog::orderBy('created_at', 'desc')->get();
        }

        // dd($activityLogs[0]->created_at);


        if ($activityLogs->isEmpty()) {
            $sheet->setCellValue('A2', 'No data available');
            return $this->spreadsheet;
        }

        $row = 2;
        if ($this->searchValue != null) {
            foreach ($activityLogs as $log) {

                $sheet->setCellValue('A' . $row, $log->user_name);
                $sheet->setCellValue('B' . $row, $log->action);
                $sheet->setCellValue('C' . $row, $log->description);
                $sheet->setCellValue('D' . $row, date('d-m-Y H:i', strtotime($log->created_at)));
                $row++;
            }
        } else {
            foreach ($activityLogs as $log) {
                $sheet->setCellValue('A' . $row, $log->user->name);
                $sheet->setCellValue('B' . $row, $log->action);
                $sheet->setCellValue('C' . $row, $log->description);
                $sheet->setCellValue('D' . $row, $log->created_at->format('d-m-Y H:i')); // Format datetime if needed
                $row++;
            }
        }

        ActivityLogger::log('Export activity log', 'User ' . Auth::user()->name . ' has exported the activity log.');
        return $this->spreadsheet;
    }

    public function toResponse($request)
    {
        $writer = new Csv($this->export()); // Use CSV writer
        $fileName = 'activity_logs.csv';
        return response()->stream(
            function () use ($writer) {
                $writer->save('php://output');
            },
            200,
            [
                'Content-Type' => 'text/csv',
                'Content-Disposition' => 'attachment; filename="' . $fileName . '"',
            ]
        );
    }
}
