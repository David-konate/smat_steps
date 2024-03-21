<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ranking extends Model
{
    use HasFactory;

    protected $fillable = ['result_quiz', 'time_quiz', 'level', 'user_id', 'theme_id', 'sous_theme_id'];

    // Si vous ne souhaitez pas utiliser les timestamps 'created_at' et 'updated_at'
    // public $timestamps = false;

    // Définissez les relations avec d'autres modèles ici
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function sousTheme()
    {
        return $this->belongsTo(SousTheme::class);
    }
    public function theme()
    {
        return $this->belongsTo(Theme::class);
    }
}
