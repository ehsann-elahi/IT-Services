<?php
namespace  App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Notification;
use Illuminate\Http\Request;
class NotificationController extends Controller
{
    public function getNotifications()
    {
        $notifications = Notification::where('is_read', false)
            ->latest()
            ->take(10)
            ->get();
        return response()->json([
            'count' => $notifications->count(),
            'notifications' => $notifications
        ]);
    }
    public function markNotificationsRead(Request $request)
    {
        if ($request->has('id')) {
            Notification::where('id', $request->id)->update(['is_read' => true]);
        } else {
            Notification::where('is_read', false)->update(['is_read' => true]);
        }
        return response()->json(['success' => true]);
    }
}