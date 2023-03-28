<?php

namespace App\Http\Controllers;

use App\Models\Video;

class VideoController extends Controller
{
    public function index()
    {
        $date = match ($request('period')) {
            'year' => now()->startOfYear(),
            'month' => now()->startOfMonth(),
            'week' => now()->startOfWeek(),
            'day' => now()->startOfDay(),
            'hour' => now()->startOfHour(),
            default => null
        };

        return $date
            ? Video::where('created_at', '>', $date)->get()
            : Video::get();
    }


    public function show(Video $video)
    {
        return $video->load('channel', 'categories');
    }
}
