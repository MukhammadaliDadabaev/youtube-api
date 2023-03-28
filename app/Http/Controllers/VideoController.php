<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function index()
    {
        switch (request('period')) {
            case 'year':
                $date = now()->startOfYear();
                break;
            case 'month':
                $date = now()->startOfMonth();
                break;
            case 'week':
                $date = now()->startOfWeek();
                break;
            case  'day':
                $date = now()->startOfDay();
                break;
            case 'hour':
                $date = now()->startOfHour();
                break;
            default:
                $date = null;
        }

//        if ($date) {
//            return Video::where('created_at', '>', $date)->count();
//        }
//        return Video::count();

        return $date
            ? Video::where('created_at', '>', $date)->get()
            : Video::get();

//-------------------------------------------------------------------------------------
//        return Video::with('channel', 'categories')->get();
//        return Video::where('created_at', '>', now()->startOfYear())->get();

//--------------------------------------------------------------------------------------
//_______________________________________________________________________________________
//        return [
//           'year' => Video::where('created_at', '>', now()->startOfYear())->count(),
//           'month' => Video::where('created_at', '>', now()->startOfMonth())->count(),
//           'week' => Video::where('created_at', '>', now()->startOfWeek())->count(),
//           'day' => Video::where('created_at', '>', now()->startOfDay())->count(),
//           'hour' => Video::where('created_at', '>', now()->startOfHour())->count(),
//        ];

//______________________________________________________________________________________
//        return [
//            'year' => Video::where('created_at', '>', now()->startOfYear())->get(),
//            'month' => Video::where('created_at', '>', now()->startOfMonth())->get(),
//            'week' => Video::where('created_at', '>', now()->startOfWeek())->get(),
//            'day' => Video::where('created_at', '>', now()->startOfDay())->get(),
//            'hour' => Video::where('created_at', '>', now()->startOfHour())->get(),
//        ];
    }

    public function show(Video $video)
    {
        return $video->load('channel', 'categories');
    }
}
