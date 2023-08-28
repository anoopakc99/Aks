<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'product';
    protected $fillable = [
        'category',
        'subcategory',
        'productname',
        'productimage',
        'shortdesc',
        'title',
        'heading',
        'description',
        'Contenct',
        'pdf',
        'status',
        'pdfile',

    ];
    public function category()
    {
        return $this->belongsTo(category::class);
    }
}
