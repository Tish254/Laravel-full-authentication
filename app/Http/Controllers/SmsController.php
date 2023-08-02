<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Notifications\SMSNotification;
use Illuminate\Http\Request;
use Illuminate\Notifications\Facades\Vonage;
use Illuminate\Notifications\Vonage as NotificationsVonage;
use Illuminate\Support\Facades\Notification;

class SmsController extends Controller
{
    public function index() {


        $user = User::first();
        $project = [
            'greeting' => 'Hi '.$user->name.',',
            'body' => 'This is the project assigned to you.',
            'thanks' => 'Thank you this is from codeanddeploy.com',
            'actionText' => 'View Project',
            'actionURL' => url('/'),
            'id' => 57
        ];

        Notification::send($user, new SMSNotification($project));

        echo "Message sent!";
    }
}
