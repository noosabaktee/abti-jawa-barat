<?php

namespace App\Imports;

use App\Models\Short;
use Maatwebsite\Excel\Concerns\SkipsEmptyRows;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ShortImport implements ToModel, WithHeadingRow, SkipsEmptyRows
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        if (empty($row['title']) || empty($row['url'])) {
            return null;
        }

        return new Short([
            'title' => $row['title'],
            'url' => $row['url'],
        ]);
    }
}
