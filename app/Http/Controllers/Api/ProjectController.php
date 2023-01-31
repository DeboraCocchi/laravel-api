<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Technology;
use App\Models\Type;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index(){
        $types=Type::all();
        $technologies=Technology::all();
        $projects=Project::with(['type','technologies'])->orderBy('id', 'desc')->paginate(10);

        return response()->json(compact('projects'));
    }

    public function show($slug)
    {
       $project=Project::where('slug', $slug)->with(['type','technologies'])->first();

       if($project->cover_image){
           $project->cover_image=url($project->cover_image);
       }else{
        $project->cover_image=url('storage/uploads/placeholder.png');
       }
       return response()->json($project);
    }

    public function search(){
        $tosearch=$_POST['tosearch'];
        $projects=Project::where('name','like', "%$tosearch%")->with(['type','technologies'])->paginate(10);
        return response()->json(compact('projects'));
    }
}
