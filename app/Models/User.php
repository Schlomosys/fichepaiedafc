<?php

namespace App\Models;

//use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
//use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
//use App\Notifications\VerifyEmailNotification;
//use Overtrue\LaravelFollow\Traits\CanFollow;
//use Overtrue\LaravelFollow\Traits\CanBeFollowed;
//use Overtrue\LaravelFollow\Followable;
//use Laravelista\Comments\Commenter;
//use Overtrue\LaravelLike\Traits\Liker;
class User extends Authenticatable 
{
    use HasFactory, HasRoles;// Commenter,Liker;

   
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'firstname',
        'lastname',
        'pseudo',
        'civilite',
        'dateNaissance',
        'boitePostale',
        'pays',
        'numTel',
        'profile_image',
        'piece_id_scan',
        'email',
        'password',
        'type',
        'description',
        'valid',
        'provider', 
        'provider_id',
        
        
    ];

/*    public function sendEmailVerificationNotification()
{
    $this->notify(new VerifyEmailNotification());
}*/

/**
 * Get the route key for the model.
 *
 * @return string
 */
public function getRouteKeyName()
{
    return 'firstname';
}
   /* public function posts()
    {
     return $this->hasMany(Post::class);
    }
    public function files() 
    { 
     return $this->hasMany(File::class); 
    }
    public function visibility()
    { 
     return $this->belongsTo(Visibility::class); 
    }*/

   

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getImageAttribute()
    {
        return $this->profile_image;
    }
    
}
