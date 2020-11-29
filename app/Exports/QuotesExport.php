<?php

namespace App\Exports;

use App\Quote;
use Maatwebsite\Excel\Concerns\FromCollection;

class QuotesExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Quote::all();
    }
}
