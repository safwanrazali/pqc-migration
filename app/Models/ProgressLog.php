<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgressLog extends Model
{
    use HasFactory;

    protected $fillable = [
        'system_id',
        'update_note',
        'status'
    ];

    public function system() {
        return $this->belongsTo(System::class);
    }
}
