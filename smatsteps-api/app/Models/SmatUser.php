<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SmatUser extends Model
{
    use HasFactory;
    protected $fillable = ['smat_id', 'user_id'];
    protected $table = 'smat_user';
}
