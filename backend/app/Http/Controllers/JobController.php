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



    public function getjob($id)
    {
        $job = Job::find($id);
            if (!$job) {
                return response()->json([
                    'message' => '404 Not Found'
                ], 400);
            }
        return response()->json($job, 200);
    }

    // public function editjob($id)
    // {
    //     $job = Job::find($id);

    // }

    // public function createjob(Request $request) 
    // {
    //     $this->database
    //         ->getReference('jobs/' . $request['name'])
    //         ->set([
    //             'name' => $request['name'] ,
    //             'description' => $request['description']
    //         ]);
    
    //     return response()->json('job created successfully');
    // }









}





    // }


// TESTOWANIE, NOTATKI, NIE DZIAŁA



// $userId = Auth::check() ? Auth::id() : true;
// Auth::user()->id;
// public function getUserId(){
   
// on Model} - and then get this value on Controllers




// <?php

// namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Auth;

// class SomeController extends Controller
// {
//     public function __construct()
//     {
//         $this->middleware('auth');
//     }

//     public function getUserId(Request $request)
//     {
//         $user = Auth::user(); // Retrieve the currently authenticated user...
//         $id = Auth::id(); // Retrieve the currently authenticated user's ID...

        
//         $user = $request->user(); // returns an instance of the authenticated user...
//         $id = $request->user()->id; // Retrieve the currently authenticated user's ID...

        
//         $user = auth()->user(); // Retrieve the currently authenticated user...
//         $id = auth()->id();  // Retrieve the currently authenticated user's ID...
//     }
// }





// public function show($id)
// {
//     $blog = Blog::find($id);
//         if (!$blog) {
//             return response()->json([
//                 'message' => '404 Not Found'
//             ], 400);
//         }
//     return response()->json($blog, 200);
// }