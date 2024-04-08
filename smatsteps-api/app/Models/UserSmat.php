<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserSmat extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'smat_id', 'current_question', 'result_smat'];

    // Define relationships or additional methods here
}
