<?php

namespace App\Modules\Profile\Models;

use Illuminate\Database\Eloquent\Model;

class Traits extends Model {

    protected $table = 'traits';
    protected $guarded = [];
    protected $connection = 'mysql2';

    public function traits() {
        return $this->hasMany('App\Modules\Profile\Models\Traits', 'category', 'category');
    }

}
