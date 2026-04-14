<?php

namespace App\Exports;

use App\Models\News;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithColumnWidths;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class NewsExport implements FromCollection, WithHeadings, WithColumnWidths, WithStyles
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return News::select([
            'title',
            'category',
            'content',
            'cta_text',
            'youtube_url',
        ])->get();
    }

    public function headings(): array
    {
        return [
            'title',
            'category',
            'content',
            'cta_text',
            'youtube_url',
        ];
    }

    public function columnWidths(): array
    {
        return [
            'A' => 40,
            'B' => 25,
            'C' => 100,
            'D' => 40,
            'E' => 80,
        ];
    }

    public function styles(Worksheet $sheet): array
    {
        return [
            'A1:E1' => ['font' => ['bold' => true]],
        ];
    }
}
