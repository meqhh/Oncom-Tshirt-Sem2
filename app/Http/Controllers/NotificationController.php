<?php
namespace App\Http\Controllers;

use App\Models\Notification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NotificationController extends Controller
{
    public function index()
    {
        $notifications = Notification::orderBy('created_at', 'desc')->get();
        $unreadNotificationsCount = Notification::where('is_read', false)->count();
        return view('users.notification', compact('notifications', 'unreadNotificationsCount'));
    }

    public function markAsRead($id)
    {
        $notification = Notification::findOrFail($id);
        $notification->update(['is_read' => true]);

        return redirect()->route('notifications')->with('success', 'Notifikasi telah ditandai sebagai dibaca.');
    }
}
