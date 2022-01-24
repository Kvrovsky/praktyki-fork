<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;
class JobController extends Controller
{
    public function listjobs(){
        $jobs=Job::all();
        return response(['jobs' => $jobs], 200);
    }



    public function getjob($id){
        $job = Job::find($id);
        if (!$job) {
            return response()->json([
                'message' => '404 Not Found'
            ], 400);
        }
    return response()->json($job, 200);

    }
}
