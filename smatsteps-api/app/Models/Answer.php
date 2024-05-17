<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use HasFactory;

    protected $fillable = ['answer', 'is_correct', 'question_id', 'updated_at'];

    // Si vous ne souhaitez pas utiliser les timestamps 'created_at' et 'updated_at'
    // public $timestamps = false;

    // Définissez la relation avec le modèle Question ici
    public function question()
    {
        return $this->belongsTo(Question::class);
    }
}
