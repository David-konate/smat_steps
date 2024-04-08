<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Smat extends Model
{
    use HasFactory;
    protected $fillable = ['smat_id', 'theme_id', 'sous_theme_id', 'level_id', 'status', 'totals_point',];
    public function questions()
    {
        return $this->belongsToMany(Question::class, 'question_smat', 'smat_id', 'question_id');
    }
    public function users()
    {
        return $this->belongsToMany(User::class, 'smat_user', 'smat_id', 'user_id');
    }
    public function sousTheme()
    {
        return $this->belongsTo(SousTheme::class);
    }
    public function theme()
    {
        return $this->belongsTo(Theme::class);
    }
    public function level()
    {
        return $this->belongsTo(Level::class);
    }

    public function userSmats()
    {
        return $this->hasMany(SmatUser::class);
    }
}
