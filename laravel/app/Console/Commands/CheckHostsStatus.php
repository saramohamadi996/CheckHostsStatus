<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Host;

class CheckHostsStatus extends Command
{
    protected $signature = 'hosts:check-status';
    protected $description = 'Check the status of all hosts every five minutes';

    public function __construct()
    {
        parent::__construct();
    }
    public function handle()
    {
        $hosts = Host::all();
        foreach ($hosts as $host) {
            $status = $this->checkHostStatus($host->ip_address);
            $item = $host->items()->create([
                'ping_percentage' => $status['ping_percentage'],
                'is_online' => $status['is_online']
            ]);
            if (!$item) {
                echo "Failed to create item for host: {$host->name}\n";
            } else {
                echo "Updated status for host: {$host->name}\n";
            }
        }
    }
    private function checkHostStatus($ip_address)
    {
        $ping_percentage = rand(70, 100);
        return [
            'ping_percentage' => $ping_percentage,
            'is_online' => $ping_percentage > 90
        ];
    }
}
