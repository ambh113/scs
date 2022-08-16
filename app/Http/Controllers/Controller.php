<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use Illuminate\Http\Request;

use App\Models\Scs_alumini;
use App\Models\Course;
use App\Models\About;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function getAlumins() {
        $aluminis = Scs_alumini::all();
        foreach($aluminis as $alumini) {
            $about = About::where('scs_aluminis_id', $alumini->id)->first();
            if ($about != null) {
                $alumini->current_location = $about->current_location;
                $alumini->company_name = $about->company_name;
                $alumini->designtion = $about->designtion;
                $alumini->experience = $about->experience;
            }
        }
        return response()->json($aluminis, 200);
    }
    public function registerAlumini(Request $request){
        $resp = $request->json()->all();
        $user = Scs_alumini::where('email', $resp['email'])->first();
        if($user != null) {
            return response()->json('user already exist', 409);    
        }
        $saveObj = new Scs_alumini();
        $saveObj->setValue($resp);
        $saveObj->is_verified=false;
        $saveObj->save();
        return response()->json($resp, 200);
    }
    public function getCourse(){
        $course = Course::all();
        return response()->json($course, 200);
    }

    public function updateDetail(Request $request, $id) {
        $resp = $request->json()->all();
        $user = Scs_alumini::where('id', $id)->first();
        if($user == null) {
            return response()->json('user not found', 409);
        }
        $about = About::where('scs_aluminis_id', $id)->first();
        if($about == null) {
            $about = new About();
        }
        $about->setValue($resp);
        $about->scs_aluminis_id = $id;
        $about->save();
        return response()->json('About successfully updated', 200);
    }
    
}
