<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use Illuminate\Http\Request;

use App\Models\Scs_alumini;
use App\Models\Course;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function getAlumins() {
        $alumini = Scs_alumini::all();

        return response()->json($alumini, 200);
    }
    public function registerAlumini(Request $request){
        $resp = $request->json()->all();
        return response()->json($resp, 200);
    }
    public function getCourse(){
        $course = Course::all();
        return response()->json($course, 200);
    }
    
}
