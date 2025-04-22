<?php

namespace App\Exports;

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Csv;
use Illuminate\Contracts\Support\Responsable;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserExport implements Responsable
{
    protected $spreadsheet;
    protected $searchValue;
    protected $group;
    protected $role;
    protected $status;

    public function __construct($searchValue = null, $group = null, $role = null, $status = null)
    {
        $this->spreadsheet  = new Spreadsheet();
        $this->searchValue  = $searchValue;
        $this->group        = $group;
        $this->role         = $role;
        $this->status       = $status;
    }

    public function export(): Spreadsheet
    {
        $sheet = $this->spreadsheet->getActiveSheet();
        $sheet->setCellValue('A1', 'Name');
        $sheet->setCellValue('B1', 'Email');
        $sheet->setCellValue('C1', 'Role');
        $sheet->setCellValue('D1', 'Groups');
        $sheet->setCellValue('E1', 'Status');
        $sheet->setCellValue('F1', 'Created At');

        // Build the query with filters
        $query = User::with('role')  // Use Eloquent relationship to load roles
            ->where('role_id', '!=', 1);

        if (!empty($this->searchValue)) {
            $query->where(function ($q) {
                $q->where('name', 'like', '%' . $this->searchValue . '%')
                    ->orWhere('email', 'like', '%' . $this->searchValue . '%');
            });
        }

        if (!empty($this->group)) {
            $query->whereRaw("FIND_IN_SET(?, assigned_group)", [$this->group]);
        }

        if (!empty($this->role)) {
            $query->where('role_id', $this->role);
        }

        if (!empty($this->status)) {
            $query->where('status', $this->status);
        }

        if (Auth::user()->role_id == '34') {
            $query->whereRaw("FIND_IN_SET(?, assigned_group)", [Auth::user()->group_id]);
        }

        $query->orderBy('created_at', 'desc');
        // $users = $query->get();
        $authUserId = Auth::id(); // Get the authenticated user's ID

        $users = $query->when($authUserId !== 1, function ($query) use ($authUserId) {
            $query->where('created_by', $authUserId);
        })->get();

        if ($users->isEmpty()) {
            $sheet->setCellValue('A2', 'No data available');
            return $this->spreadsheet;
        }

        $row = 2;
        foreach ($users as $user) {
            // Get group names
            $groupNames = $user->groups->pluck('name')->implode(', ');

            $sheet->setCellValue('A' . $row, $user->name);
            $sheet->setCellValue('B' . $row, $user->email);
            $sheet->setCellValue('C' . $row, $user->role->name ?? 'N/A');
            $sheet->setCellValue('D' . $row, $groupNames);
            $sheet->setCellValue('E' . $row, $this->formatStatus($user->status));
            $sheet->setCellValue('F' . $row, $user->created_at->format('d-m-Y H:i:s'));
            $row++;
        }

        return $this->spreadsheet;
    }

    private function formatStatus($status)
    {
        switch ($status) {
            case '2':
                return 'Pending';
            case '1':
                return 'Approved';
            case '0':
                return 'Declined';
            default:
                return 'Unknown';
        }
    }

    public function toResponse($request)
    {
        $writer = new Csv($this->export());
        $fileName = 'users.csv';
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
