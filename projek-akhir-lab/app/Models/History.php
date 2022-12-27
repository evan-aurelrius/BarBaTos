<?php
namespace App\Models;
use App\Models\User;
use App\Models\History_User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class History extends Model
{
    use HasFactory;
    public function User(){return $this->belongsToMany(User::class);}
    public function historyUser(){return $this->hasMany(History_User::class);}
}
