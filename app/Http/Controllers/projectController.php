<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;


use Illuminate\Http\Request;
use App\Project ;
use Illuminate\Support\Facades\DB;

class projectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::latest()->get();
        return view('projects.view_projects')->with('projects', $projects);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('projects.upload_project');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [

            'title' => 'required',
            'maker' => 'required',
            'info' => 'required',


        ]);

        if ($request->hasFile('projectfile')) {
            $projectExt = $request->file('projectfile')->getClientOriginalExtension();
            $projectName = time() . 'books.' . $projectExt;
            $request->file('projectfile')->storeAs('books', $projectName);

        }

        $project = new Project();
        $project->projectfile = $projectName;

        $project->title = $request->input('title');
        $project->maker = $request->input('maker');

        $project->info = $request->input('info');

        $project->projectyear = $request->input('year');


        $project->user_id = Auth::user()->id;


        $project->save();
        return redirect(route('projects.index'))->with('msg', 'Upload Done');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $project = Project::find($id);
        return view('projects.single_project')->with('project', $project);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        return view('projects.edit_project')->with('project', $project);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $Pro)
    {
        $this->validate($request, [

            'title' => 'required',
            'maker' => 'required',
            'info' => 'required',


        ]);
        $project = Project::find($Pro);

        if ($request->hasFile('projectfile')) {
            $projectExt = $request->file('projectfile')->getClientOriginalExtension();
            $projectName = time() . 'books.' . $projectExt;
            $request->file('projectfile')->storeAs('books', $projectName);

        }
        //$project->projectfile=$projectName;

        $project->title = $request->input('title');
        $project->maker = $request->input('maker');

        $project->info = $request->input('info');

        $project->projectyear = $request->input('year');


        $project->user_id = Auth::user()->id;


        $project->save();
        return redirect(route('projects.index'))->with('msg', 'Update Done');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        $project->delete();
        return redirect(route('projects.index'))->with('msg', 'Delete Done');
    }

    public function searchproject(Request $request)

    {
        $search = $request->get('search');
        $projects = DB::table('projects')->where('title', 'like', '%' . $search . '%')
            ->orWhere('id', 'like', '%' . $search . '%')
            ->orWhere('projectyear', 'like', '%' . $search . '%')
            ->paginate(10);
        return view('browse-projects', compact('projects'));

    }

    public function searchprojectinadmin(Request $request)

    {
        $search = $request->get('search');
        $projects = DB::table('projects')->where('title', 'like', '%' . $search . '%')
            ->orWhere('id', 'like', '%' . $search . '%')
            ->orWhere('maker', 'like', '%' . $search . '%')
            ->paginate(10);
        return view('projects/view_projects', compact('projects'));

    }
}
