<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $fillable = ['question', 'sous_theme_id', 'theme_id', 'user_id', 'level_id', 'category_id', 'image_question'];

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

    public function theme()
    {
        return $this->belongsTo(Theme::class);
    }

    public function sousTheme()
    {
        return $this->belongsTo(SousTheme::class, 'sous_theme_id');
    }
    public function answers()
    {
        return $this->hasMany(Answer::class, 'question_id');
    }
}
