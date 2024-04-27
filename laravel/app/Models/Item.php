<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $fillable = ['host_id', 'ping_percentage', 'is_online'];

    public function host()
    {
        return $this->belongsTo(Host::class);
    }
}

