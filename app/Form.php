<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form extends Model {

    public function property() {
        return $this->hasOne(Property::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }

}
