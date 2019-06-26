<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\User_project;
class ProjectsController extends Controller
{
    //
    public function create()
    {
        $num_p1 = DB::table('projects')->where('id')->value('projects1');
        $num_p2 = DB::table('projects')->where('id')->value('projects2');
        $num_p2 = DB::table('projects')->where('id')->value('projects3');
        $num_p2 = DB::table('projects')->where('id')->value('projects4');        
        return view('projects/decide');
    }
    public function store(Request $request)
    {
        $project = new User_project;
        $project -> email = request('email');
        $project -> phone = request('phone');
        $project -> project = request('project');
        $project -> save();
        return view('projects/success');
    }
}
