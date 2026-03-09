<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class system extends Model
{
    protected $table = 'systems';

    protected $fillable = ['system_name', 'agency', 'technology', 'current_crypto', 'pqc_target', 'status', 'target_date', 'pic_id'];


    //
}
