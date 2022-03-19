<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use App\Models\Project;
use App\Models\Skill;
use Illuminate\Http\Request;

class ResumeController extends Controller
{

    public function __construct(){

        $this->middleware('auth');
    }
    public function index(){

        if(!auth()->user()){
            return view('resume.index');
        }
        $id = auth()->user()->id;

        $skills = Skill::where('user_id', '=', $id)->get();
        $experiences = Experience::where('user_id', '=', $id)->get();
        $projects = Project::where('user_id', '=', $id)->get();

        
        return view('resume.index', [
            'skills' => $skills,
            'experiences' => $experiences,
            'projects' => $projects
        ]);
    }
}
