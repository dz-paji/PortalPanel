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
        $num_p1 = DB::table('projects')->value('projects1');
        $num_p2 = DB::table('projects')->value('projects2');
        $num_p3 = DB::table('projects')->value('projects3');
        $num_p4 = DB::table('projects')->value('projects4');        
        return view('projects/decide', ['num_p1' => $num_p1], ['num_p2' => $num_p2], ['num_p3' => $num_p3], ['num_p4' => $num_p4]);
    }
    public function store(Request $request)
    {
        $num_p1 = DB::table('projects')->value('projects1');
        $num_p2 = DB::table('projects')->value('projects2');
        $num_p3 = DB::table('projects')->value('projects3');
        $num_p4 = DB::table('projects')->value('projects4');        
        $project=new User_project;
        $project->email = request('email');
        $project->phone = request('name');
        $project->project = request('project');        
        $project -> save();

        // echo($project->project);
        // swtich($project->project){
        //     case "project1": 
        //         echo "1";
        //         break;
        //     case "project2":
        //         echo "2";
        //         break;
        // }
        if( $project->project == "project1"){
            DB::table('projects')->increment('projects1');
        } elseif( $project->project == "project2") {
            DB::table('projects')->increment('projects2');
        } elseif( $project->project == "project3"){
            DB::table('projects')->increment('projects3');
        } elseif( $project->project == "project4"){
            DB::table('projects')->increment('project4');
        }

        return view('projects/success');
    }
}
