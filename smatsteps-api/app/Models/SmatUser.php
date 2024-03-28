<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SmatUser extends Model
{
    use HasFactory;
    protected $fillable = ['smat_id', 'user_id', 'result_smat', 'current_question'];
    protected $table = 'smat_user';

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function smat()
    {
        return $this->belongsTo(Smat::class);
    }
}
