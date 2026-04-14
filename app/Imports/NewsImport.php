<?php

namespace App\Imports;

use App\Models\News;
use Illuminate\Support\Str;
use Maatwebsite\Excel\Concerns\SkipsEmptyRows;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class NewsImport implements ToModel, WithHeadingRow, SkipsEmptyRows
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        if (
            empty($row['title']) ||
            empty($row['category']) ||
            empty($row['content']) ||
            empty($row['cta_text']) ||
            empty($row['youtube_url'])
        ) {
            return null;
        }

        $baseSlug = Str::slug($row['title']);
        $slugBase = $baseSlug !== '' ? $baseSlug : 'news';
        $slug = $slugBase;
        $counter = 1;

        while (News::where('slug', $slug)->exists()) {
            $slug = $slugBase . '-' . $counter;
            $counter++;
        }

        return new News([
            'title' => $row['title'],
            'slug' => $slug,
            'category' => $row['category'],
            'content' => $row['content'],
            'cta_text' => $row['cta_text'],
            'youtube_url' => $row['youtube_url'],
        ]);
    }
}
