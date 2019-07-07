<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\User_project;
class ProjectsController extends Controller
{
    public function create(Request $request)
    {
        $num_p1 = DB::table('projects')->value('projects1');
        $num_p2 = DB::table('projects')->value('projects2');
        $num_p3 = DB::table('projects')->value('projects3');
        $num_p4 = DB::table('projects')->value('projects4');
        $num_p5 = DB::table('projects')->value('projects4');        
        $num_p6 = DB::table('projects')->value('projects4');        
        $num_p7 = DB::table('projects')->value('projects4');        
        $num_p8 = DB::table('projects')->value('projects4');        
        $num_p9 = DB::table('projects')->value('projects4');        
        return view('projects/decide', ['p1' => $num_p1, 'p2' => $num_p2, 'p3' => $num_p3, 'p4' => $num_p4, 'p5' => $num_p5, 'p6' => $num_p6, 'p7' => $num_p7, 'p8' => $num_p8, 'p9' => $num_p9]);
    }

    public function store(Request $request)
    {
        $this -> validate($request,[
            'email' => 'required|unique:user_projects|email',
        ]);
        $num_p1 = DB::table('projects')->value('projects1');
        $num_p2 = DB::table('projects')->value('projects2');
        $num_p3 = DB::table('projects')->value('projects3');
        $num_p4 = DB::table('projects')->value('projects4');        
        $project=new User_project;
        $project->email = request('email');
        $project->name = request('name');
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
