<?php

// Dibuat oleh : Nurtyasto Hadi

namespace App\Models;

use CodeIgniter\Model;

class BookModel extends Model
{
    protected $table            = 'books';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;

    protected $returnType       = 'array';
    protected $allowedFields    = [
        'title',
        'author',
        'publisher',
        'year'
    ];
}