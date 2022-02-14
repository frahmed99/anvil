<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Wildside\Userstamps\Userstamps;
class Profile extends Model
{
    use HasFactory;
    use Userstamps;

    protected $fillable = [
        'first_name',
        'last_name',
        'profile_photo_path',
        'created_by',
        'updated_by'
    ];
}
