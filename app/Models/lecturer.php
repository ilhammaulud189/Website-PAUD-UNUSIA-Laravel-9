<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\Paginator;


class lecturer extends Model
{
    use HasFactory;
    protected $fillable =[
        'nama',
        'matakuliah'
    ];
    
   
    

    
}
