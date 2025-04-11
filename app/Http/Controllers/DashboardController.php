<?php

namespace App\Http\Controllers;

use App\Models\AiModel;
use App\Models\Provider;
use App\Models\ApiKey;
use App\Models\User;
use App\Models\ActivityLog;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $aiModelsCount = AiModel::count();
        $providersCount = Provider::count();
        $apiKeysCount = ApiKey::where('status', true)->count();
        $usersCount = User::count();
        $recentActivities = ActivityLog::latest()->take(5)->get();

        return view('dashboard.index', compact(
            'aiModelsCount',
            'providersCount',
            'apiKeysCount',
            'usersCount',
            'recentActivities'
        ));
    }
}
