<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HostStatusController;

Route::get('/hosts/status', [HostStatusController::class, 'checkHosts']);
