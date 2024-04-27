<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MetricHistory extends Model
{
    use HasFactory;

    protected $fillable = ['metric_id', 'value', 'recorded_at'];

    public function metric()
    {
        return $this->belongsTo(Metric::class);
    }
}
