<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use Illuminate\Http\Request;

class ResultController extends Controller
{
    public function index()
    {
        $attendances = Attendance::all();

        return view('index', [
            'attendances' => $attendances,
        ]);
    }
}
