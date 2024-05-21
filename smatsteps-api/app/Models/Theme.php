<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Theme extends Model
{

    protected $fillable = ['theme', 'theme_image'];

    public function sousThemes()
    {
        return $this->hasMany(SousTheme::class); // Relation avec SousTheme
    }

    public function smats()
    {
        return $this->hasMany(Smat::class);
    }
}
