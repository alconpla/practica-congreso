<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserPonencia extends Model
{
    use SoftDeletes;
    
    protected $table = 'user_ponencia';
    
    protected $hidden = ['created_at','updated_at'];
    
    protected $fillable = ['iduser', 'idponencia'];
    
    public function user() {
        return $this->belongsTo('App\User', 'iduser');
    }
    
    public function ponencia() {
        return $this->belongsTo('App\User', 'idponencia');
    }
}
