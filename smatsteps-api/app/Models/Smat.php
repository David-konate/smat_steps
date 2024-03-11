<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Smat extends Model
{
    use HasFactory;

    public function users()
    {
        return $this->belongsToMany(User::class, 'smat_user', 'smat_id', 'user_id');
    }
}
