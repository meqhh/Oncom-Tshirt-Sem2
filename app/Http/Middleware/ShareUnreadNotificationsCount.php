<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\View;
use App\Models\Notification;
use Illuminate\Support\Facades\Auth;

class ShareUnreadNotificationsCount
{
    public function handle($request, Closure $next)
    {
        if (Auth::check()) {
            $unreadNotificationsCount = Notification::where('user_id', Auth::id())->where('is_read', false)->count();
            View::share('unreadNotificationsCount', $unreadNotificationsCount);
        }

        return $next($request);
    }
}

