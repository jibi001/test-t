<?php

namespace App\Modules\Profile\Models;

use Illuminate\Database\Eloquent\Model;

class Job_category extends Model
{
    protected $table='job_category';
    protected $guarded = [];
    protected $connection = 'mysql2';
}
