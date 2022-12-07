<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\GoogleCalendar\Event;

class CalendarController extends Controller
{
    public function laravel_calendar()
    {
        // Event::create([
        //     'name' => 'A new event',
        //     'description' => 'Ini berisikan deskripsi dari event yang telah dibuat',
        //     'startDateTime' => \Carbon\Carbon::now(),
        //     'endDateTime' => \Carbon\Carbon::now()->addHour(),
        //     'location' => 'Ruang MR-2001',
        // ]);

        $event = new Event;

        $event->name = 'A new event';
        $event->description = 'Ini berisikan deskripsi dari event yang telah dibuat';
        $event->startDate = \Carbon\Carbon::now();
        $event->endDate = \Carbon\Carbon::now()->addHour();
        $event->location = 'Ruang MR-2002';
        $event->addAttendee(['email' => 'anotherEmail@gmail.com']);

        $event->save();


        return response()->json([
            "success" => true,
            "data" => "test"
        ]);
    }
}
