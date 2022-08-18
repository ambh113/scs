<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\FlashNews;

class HomeController extends Controller
{
    public function getFlashNews() {
        $flashNews = FlashNews::all();
        return response()->json($flashNews, 200);
    }
}
