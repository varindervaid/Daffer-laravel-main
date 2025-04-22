<?php

namespace App\Http\Controllers\Admin;
use App\Models\ActivityLog;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class ActivityLogger extends Controller
{
    public static function log($action, $description = null)
    {
        ActivityLog::create([
            'user_id' => Auth::id(), // Assuming the user is authenticated
            'action' => $action,
            'description' => $description,
        ]);
    }
}
