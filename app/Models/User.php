<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $guarded = [];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
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


    public static function getAllUsers($where = [])
    {
        return self::select('users.*')
            ->where($where)
            ->get();
    }

    public function cards()
    {
        return $this->hasMany(UserCard::class, 'user_id', 'id');
    }

    public function defaultCard()
    {
        return UserCard::where(['user_id' => $this->id, 'default_card' => 1])->first();
    }

    public function cardMostRecentAdded()
    {
        return UserCard::where(['user_id' => $this->id])
            ->orderBy('id', 'DESC')
            ->first();
    }

    public function cardDeleteBySource($source)
    {
        return UserCard::where(['user_id' => $this->id, 'stripe_source_id' => $source])->delete();
    }

    public function cardMakeUndefaultAll()
    {
       return UserCard::where('user_id', $this->id)->update(['default_card' => 0]);
    }

    public function cardMakeDefaultBySourceId($source)
    {
        return UserCard::where(['user_id' => $this->id, 'stripe_source_id' => $source])
            ->update(['default_card' => 1]);
    }
}
