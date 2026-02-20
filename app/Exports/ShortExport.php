<?php

namespace App\Exports;

use App\Models\Short;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithColumnWidths;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class ShortExport implements FromCollection, WithHeadings, WithColumnWidths, WithStyles
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Short::select([
            'title',
            'url',
        ])->get();
    }

    public function headings(): array
    {
        return [
            'title',
            'url',
        ];
    }

    public function columnWidths(): array
    {
        return [
            'A' => 35,
            'B' => 80,
        ];
    }

    public function styles(Worksheet $sheet): array
    {
        return [
            'A1:B1' => ['font' => ['bold' => true]],
        ];
    }
}
