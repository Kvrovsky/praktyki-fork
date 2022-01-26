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
        // if (!$job) {
        //     return response()->json([
        //         'message' => '404 Not Found'
        //     ], 400);
        // }
    return response()->json($job, 200);
    }

    public function deletejob($id) {
        $job = Job::findOrFail($id);
        if($job)
           $job->delete(); 
        else
            return response()->json(error);
        return response()->json(null, 204);
    }

    public function createjob(Request $request) {
            $job= Job::create($request->all());
            return response()->json($job, 201);
    }

    public function editjob(Request $request, $id) {
            $job = Job::find($id);
            $job->update($request->all());
            return response()->json($job, 200);
    }

    function searchjob($data)
    {
        $result = Job::where('name', 'LIKE', '%'. $data. '%')
                    ->orWhere('description', 'like', "%{$data}%")
                    ->orWhere('city', 'like', "%{$data}%")
                    ->get();
        if(count($result)){
         return Response()->json($result);
        }
        else
        {
        return response()->json(['Result' => 'No Data not found'], 404);
      }
    }
}