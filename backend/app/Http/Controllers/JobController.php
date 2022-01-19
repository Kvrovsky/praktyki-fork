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
}
