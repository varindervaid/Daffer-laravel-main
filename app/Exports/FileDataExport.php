<?php

namespace App\Exports;

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Csv;
use Illuminate\Contracts\Support\Responsable;
use App\Models\ActivityLog;
use App\Models\Data;
use Illuminate\Support\Facades\DB;
use PhpOffice\PhpSpreadsheet\Style\Alignment;


class FileDataExport implements Responsable
{
    protected $spreadsheet;
    protected $id;
    protected $file_name;

    public function __construct($id)
    {
        $this->spreadsheet = new Spreadsheet();
        $this->id = $id;
    }

    public function export(): Spreadsheet
    {
        $data = Data::find($this->id); // Fetch the data record
        $this->file_name=$data->file_name;
        $sheet = $this->spreadsheet->getActiveSheet();

        // Static headers
        $sheet->setCellValue('A1', 'site');
        $sheet->setCellValue('B1', 'install date');
        $sheet->setCellValue('C1', 'system id');
        $sheet->setCellValue('D1', 'status');

        // Set basic information in the second row
        $sheet->setCellValue('A2', $data->site);
        $sheet->setCellValue('B2', $data->install_date);
        $sheet->setCellValue('C2', $data->system_id);
        $sheet->setCellValue('D2', $data->status);

        // Decode the JSON data field
        $dataField = json_decode($data->data, true);

        if ($dataField) {
            $col = 5; // Starting column (E = column 5 in Excel)
            foreach ($dataField as $groupName => $items) {
                if (is_array($items)) {
                    // Set the group name as the header (E1, F1, etc.)
                    $sheet->setCellValue(chr(64 + $col) . '1', $groupName); // chr(64 + $col) converts column number to letter

                    // Initialize an array to hold all title:value pairs
                    $values = [];
                    foreach ($items as $item) {
                        $values[] = $item['title'] . ': ' . $item['value']; // Concatenate title and value
                    }

                    // Join values with new lines and set them in the next row (E2, F2, etc.)
                    $cellValue = implode("\n", $values); // Join all title:value pairs with newlines

                    // Set the cell value
                    $sheet->setCellValue(chr(64 + $col) . '2', $cellValue); // Use \n for line breaks

                    // Enable text wrapping for the cell to handle new lines properly
                    $sheet->getStyle(chr(64 + $col) . '2')->getAlignment()->setWrapText(true);

                    // Optional: Adjust row height to fit the wrapped text
                    $sheet->getRowDimension('2')->setRowHeight(-1);  // Adjusts the row height automatically

                    $col++; // Move to the next column for the next group
                } else {
                    // Handle the case if the group data is not an array (if applicable)
                    $sheet->setCellValue(chr(64 + $col) . '1', $groupName); // Group name as header
                    $sheet->setCellValue(chr(64 + $col) . '2', $items); // Value
                    $sheet->getStyle(chr(64 + $col) . '2')->getAlignment()->setWrapText(true); // Enable text wrapping
                    $sheet->getRowDimension('2')->setRowHeight(-1);  // Adjusts the row height automatically
                    $col++; // Move to the next column
                }
            }
        } else {
            // Handle case where data field is empty or invalid
            $sheet->setCellValue('E1', 'No additional data available');
        }

        // Return the spreadsheet for download or further processing
        return $this->spreadsheet;
    }





    public function toResponse($request)
    {
        $writer = new Csv($this->export()); // Use CSV writer
        $fileName = $this->file_name.'.csv';
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
