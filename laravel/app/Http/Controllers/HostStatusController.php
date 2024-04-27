<?php

namespace App\Http\Controllers;

use App\Models\Host;
use Illuminate\Support\Facades\Cache;

class HostStatusController extends Controller
{
    public function checkHosts()
    {
        $hostStatuses = Cache::remember('host_statuses', 5 * 60, function () {
            $hosts = Host::with('items')->get();
            return $hosts->map(function ($host) {
                $item = $host->items->first();
                $onlineStatus = $item ? ($item->ping_percentage > 90 ? 'Online' : 'Offline') : 'No Data';
                return [
                    'name' => $host->name,
                    'ip_address' => $host->ip_address,
                    'status' => $onlineStatus
                ];
            });
        });
        return view('host.status', ['hosts' => $hostStatuses]);
    }
}

