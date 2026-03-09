<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class System extends Model
{
    use HasFactory;

    protected $fillable = [
        'system_name',
        'agency',
        'technology',
        'current_crypto',
        'pqc_target',
        'status',
        'target_date',
        'pic_id',
    ];

    public function progressLogs() {
        return $this->hasMany(ProgressLog::class);
    }
}
