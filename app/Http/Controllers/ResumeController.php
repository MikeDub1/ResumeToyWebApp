<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use App\Models\Project;
use App\Models\Skill;
use Illuminate\Http\Request;

class ResumeController extends Controller
{
    public function index(){

        if(!auth()->user()){
            return view('resume.index');
        }
        $id = auth()->user()->id;

        $skills = Skill::where('user_id', '=', $id)->all();
        $experiences = Experience::all();
        $projects = Project::all();

        
        return view('resume.index', [
            'skills' => $skills,
            'experiences' => $experiences,
            'projects' => $projects
        ]);
    }
}
