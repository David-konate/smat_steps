<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $fillable = ['question', 'sous_theme_id', 'user_id', 'level_id', 'category_id', 'image_question'];

    // Si vous ne souhaitez pas utiliser les timestamps 'created_at' et 'updated_at'
    // public $timestamps = false;

    // Définissez les relations avec d'autres modèles ici


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function level()
    {
        return $this->belongsTo(Level::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
