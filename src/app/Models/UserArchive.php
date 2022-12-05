<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserArchive extends Model
{
    use HasFactory;
    protected $table = "user_archive";
    protected $fillable = [
        'product_id',
        'mail_address',
    ];
}
