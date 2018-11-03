<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    #ini adalah relasi dengan user OneToMany
    public function user() {
        return $this ->belongsTo('App\User');
    }

    protected $fillable= ['user_id','address','cart','name','city','country','zip_code','tel','paymant_id'];
}
