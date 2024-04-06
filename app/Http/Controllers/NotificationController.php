<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notification;

class NotificationController extends Controller
{
    public function notification()
    {
        $notifications = Notification::orderby('created_at')->get()->all();
        return view('pages.notification', ['notifications' => $notifications]);
    }
}
