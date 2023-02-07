<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Technology;
use App\Models\Type;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{
    public function index(){
        $types=Type::all();
        $technologies=Technology::all();
        $projects=Project::with(['type','technologies'])->orderBy('id', 'desc')->paginate(10);

        return response()->json(compact('projects', 'types', 'technologies'));
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

    public function getByType($id){
        $projects=Project::where('type_id', $id)->with(['type','technologies'])->paginate(10);
        return response()->json(compact('projects'));
    }

    public function getTechnologies($id){

        $projects=Project::with(['type','technologies'])
        ->where('technology_id', $id)
        ->paginate(10);
        return response()->json(compact('projects'));
    }
}
