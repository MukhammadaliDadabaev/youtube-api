<?php

namespace App\Http\Controllers;

use App\Models\Video;

class VideoController extends Controller
{
    public function index()
    {
//        return Video::with('channel', 'categories')->get();
//        return Video::where('created_at', '>', now()->startOfYear())->get();

//        return [
//           'year' => Video::where('created_at', '>', now()->startOfYear())->count(),
//           'month' => Video::where('created_at', '>', now()->startOfMonth())->count(),
//           'week' => Video::where('created_at', '>', now()->startOfWeek())->count(),
//           'day' => Video::where('created_at', '>', now()->startOfDay())->count(),
//           'hour' => Video::where('created_at', '>', now()->startOfHour())->count(),
//        ];

        return [
            'year' => Video::where('created_at', '>', now()->startOfYear())->get(),
            'month' => Video::where('created_at', '>', now()->startOfMonth())->get(),
            'week' => Video::where('created_at', '>', now()->startOfWeek())->get(),
            'day' => Video::where('created_at', '>', now()->startOfDay())->get(),
            'hour' => Video::where('created_at', '>', now()->startOfHour())->get(),
        ];
    }


    public function show(Video $video)
    {
        return $video->load('channel', 'categories');
    }
}
