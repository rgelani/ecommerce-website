<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Facades\Excel;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;

class BulkProductSheet implements FromCollection
{

    protected $sheets;

    public function headings()
    {
        return [];
    }

    public function collection()
    {
        $files = \File::files(public_path());
        foreach($files as $file) {
            if($file->getFileName() == 'main_listing_file.xlsx') {
                $data = Excel::toArray([],$file->getRealPath());
                break;
            }
        }
        return collect($data);
    }
}
