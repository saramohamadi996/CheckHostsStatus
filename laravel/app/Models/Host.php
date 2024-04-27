<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Host extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'ip_address'];

    public function metrics()
    {
        return $this->hasMany(Metric::class);
    }

    public function items()
    {
        return $this->hasMany(Item::class);
    }
}
