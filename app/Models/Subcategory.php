<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
       
        'category_id',
        'status',
        'created_at',
        'updated_at',
    ];
    
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public $timestamps = false;
}
