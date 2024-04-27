<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Metric extends Model
{
    use HasFactory;

    protected $fillable = ['host_id', 'metric_type', 'value'];

    public function host()
    {
        return $this->belongsTo(Host::class);
    }

    public function metricHistory()
    {
        return $this->hasMany(MetricHistory::class);
    }
}
