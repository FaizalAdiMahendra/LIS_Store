<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    #ini adalah relasi dengan user OneToMany
    public function user() {
        return $this ->belongsTo('App\User');
    }
}
