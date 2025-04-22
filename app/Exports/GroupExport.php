<?php

namespace App\Exports;

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Csv;
use Illuminate\Contracts\Support\Responsable;
use App\Models\Group;
use Illuminate\Support\Facades\DB;

class GroupExport implements Responsable
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
        $sheet->setCellValue('A1', 'Name');
        $sheet->setCellValue('B1', 'Slug');
        $sheet->setCellValue('C1', 'Status');
        $sheet->setCellValue('D1', 'Created At');

        // Fetch data from database
        $query = Group::query();
        if ($this->searchValue != null) {
            $query = DB::table('groups')

                ->select('groups.*') // Select needed fields
                ->where(function ($q) {
                    if ($this->searchValue) {
                        $q->where('groups.name', 'like', '%' . $this->searchValue . '%')
                            ->orWhere('groups.slug', 'like', '%' . $this->searchValue . '%');
                        // Check for status based on search value
                        if (strtolower($this->searchValue) == 'inactive') {
                            $q->orWhere('groups.status', 0);
                        } elseif (strtolower($this->searchValue) == 'active') {
                            $q->orWhere('groups.status', 1);
                        }
                    }
                })
                ->orderBy('groups.created_at', 'desc'); // Order by latest records
            $groups = $query->get();
        } else {
            $groups = Group::orderBy('created_at', 'desc')->get();
        }

        // dd($activityLogs[0]->created_at);


        if ($groups->isEmpty()) {
            $sheet->setCellValue('A2', 'No data available');
            return $this->spreadsheet;
        }

        $row = 2;
        if ($this->searchValue != null) {
            foreach ($groups as $group) {

                $sheet->setCellValue('A' . $row, $group->name);
                $sheet->setCellValue('B' . $row, $group->slug);
                if ($group->status == '0') {
                    $sheet->setCellValue('C' . $row, 'InActive');
                } else {
                    $sheet->setCellValue('C' . $row, 'Active');
                }
                $sheet->setCellValue('D' . $row, date('d-m-Y H:i:s', strtotime($group->created_at)));
                $row++;
            }
        } else {
            foreach ($groups as $group) {
                $sheet->setCellValue('A' . $row, $group->name);
                $sheet->setCellValue('B' . $row, $group->slug);
                if ($group->status == '0') {
                    $sheet->setCellValue('C' . $row, 'InActive');
                } else {
                    $sheet->setCellValue('C' . $row, 'Active');
                }
                $sheet->setCellValue('D' . $row, $group->created_at->format('d-m-Y H:i:s')); // Format datetime if needed
                $row++;
            }
        }


        return $this->spreadsheet;
    }

    public function toResponse($request)
    {
        $writer = new Csv($this->export()); // Use CSV writer
        $fileName = 'groups.csv';
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
