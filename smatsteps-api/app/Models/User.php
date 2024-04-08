<?php

namespace App\Models;

use App\Notifications\EmailVerificationNotification;
use App\Notifications\ResetPasswordNotification;
use Cviebrock\EloquentSluggable\Sluggable;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, Sluggable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<string, mixed>
     */
    protected $fillable = [
        'user_pseudo',
        'password',
        'user_email',
        'is_admin',
        'to_subscribe',
        'user_image',
        'slug',
    ];
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'user_pseudo'
            ]
        ];
    }
    public function rankings()
    {
        return $this->hasMany(Ranking::class, 'user_id');
    }

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function smats()
    {
        return $this->belongsToMany(Smat::class, 'smat_user', 'user_id', 'smat_id');
    }
    public function friends()
    {
        return $this->belongsToMany(User::class, 'friends', 'user_id', 'friend_id');
    }
    public function participatedTo()
    {
        return $this->belongsToMany(Smat::class, 'particepd_to', 'Id_Users', 'Id_Smat')->withPivot('score');
    }

    public function sendPasswordResetNotification($token)
    {
        $url = config('app.url') . '/password/forgot' .  "?token=" . $token;

        $this->notify(new ResetPasswordNotification($url));
    }

    public function sendEmailVerificationNotification()
    {
        $url = config('app.url') . '/email/verify';

        $this->notify(new EmailVerificationNotification($url));
    }
}
