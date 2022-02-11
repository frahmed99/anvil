<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Wildside\Userstamps\Userstamps;

class ProductServiceCategory extends Model
{
    use HasFactory;
    use Userstamps;

    protected $fillable = [
        'name',
        'type',
        'color',
        'created_by',
        'updated_by'
    ];
    public static $categoryType = [
        'Product',
        'Service',
        'Income',
        'Expense',
    ];
}
