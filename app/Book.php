<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table = 'book';
    protected $fillable = [
    'id',
    'Book_Name',
    'Author_Name',
    'Date',
    'Summary',
    'Category_id',
    'Price',
    'Image',
    'Pdf_Name',
    'status'
    ];
   
    //
}
