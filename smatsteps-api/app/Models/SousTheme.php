<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SousTheme extends Model
{
    use HasFactory;
    protected $fillable = ['sous_theme', 'theme_id', 'sous_theme_image'];  // Renommez l'attribut ici

    public function theme()
    {
        return $this->belongsTo(Theme::class);
    }
    public function smats()
    {
        return $this->hasMany(Smat::class);
    }
}
