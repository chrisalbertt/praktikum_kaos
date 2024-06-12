<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kaos extends Model
{
    protected $table = '_kaos';

    protected $fillable =   [
                            'Merek',
                            'Ukuran',
                            'Year',
                            'Poster'
                            ];
}
