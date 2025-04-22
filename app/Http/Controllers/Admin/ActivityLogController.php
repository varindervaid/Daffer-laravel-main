<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ActivityLog;
use App\Exports\ActivityLogExport;
use Carbon\Carbon;
use DateTime;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class ActivityLogController extends Controller
{
    public function index()
    {

        $search = request('search');


        $logs = ActivityLog::with('user')  // Eager load user for the search
            ->when($search, function ($query) use ($search) {
                // Search by user name (related to user_id), action, and description
                $query->whereHas('user', function ($userQuery) use ($search) {
                    $userQuery->where('name', 'like', "%{$search}%"); // Search by user name
                })
                    ->orWhere('action', 'like', "%{$search}%")
                    ->orWhere('description', 'like', "%{$search}%");
            })
            ->latest()  // Order by latest
            ->get();

        return view('activity_logs.index', compact('logs'));
    }


    public function exportActivityLog(Request $request)
    {
        $searchValue = $request->input('search'); // Single search parameter
        // ActivityLogger::log('Export activity log', 'User ' . Auth::user()->name . ' has exported the activity log.');
        return new ActivityLogExport($searchValue);
        //return new ActivityLogExport();
    }



    public function deleteLog(Request $request)
    {
        // Validate incoming request
        $validatedData  =   [
            'from_date' => 'required|date',
            'to_date' => 'required|date|after_or_equal:from_date',
        ];
        $validator = Validator::make($request->all(), $validatedData);
        if ($validator->fails()) {
            // Return a JSON response with validation errors
            return response()->json([
                'status' => 'error',
                'errors' => $validator->errors()->messages(),
                'message' => "something Went wrong!",
            ]); // HTTP status code 422 Unprocessable Entity
        }
        // Retrieve the 'from_date' and 'to_date' from the request
        $fromDate = $request->input('from_date');
        $toDate = $request->input('to_date');

        try {
            // Delete ActivityLogs where created_at is between 'from_date' and 'to_date'
            $toDate = Carbon::parse($toDate)->endOfDay();

            // Delete ActivityLogs where created_at is between 'fromDate' and 'toDate'
            $result = ActivityLog::where('created_at', '>=', $fromDate)
                ->where('created_at', '<=', $toDate)
                ->delete();
            // Check if any logs were deleted
            if ($result) {
                return response()->json(['status' => 'success', 'message' => 'Logs successfully deleted.']);
            } else {
                // No records deleted
                return response()->json(['status' => 'error', 'message' => 'No logs found for the specified date range.']);
            }
        } catch (\Exception $e) {
            // Handle any exceptions
            return response()->json(['status' => 'error', 'message' => 'An error occurred: ' . $e->getMessage()]);
        }
    }
}
