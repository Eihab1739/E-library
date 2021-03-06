<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\exam;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class examsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function view(){

 $exams = exam::latest()->paginate(8);
        return view('browse-exams')->with('exams', $exams);


    }

    public function index()
    {
        $exams = exam::latest()->get();
        return view('exams.view_exams')->with('exams', $exams);
    }


    public function viewexam(exam $exam)
    {

        return view('exams.single_exam')->with('exam', $exam);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('exams.upload_exam');

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
            'author' => 'required',
            'info' => 'required',
            'examfile' => 'required|mimes:pdf|mimes:doc,docx',



        ]);

        if ($request->hasFile('examfile')) {
            $examExt = $request->file('examfile')->getClientOriginalExtension();
            $examName = time() . 'books.' . $examExt;
            $request->file('examfile')->storeAs('books', $examName);

        }
        $exam = new exam();

        $exam->title = $request->input('title');
        $exam->author = $request->input('author');

        $exam->info = $request->input('info');
        $exam->examfile = $examName;

        $exam->examyear = $request->input('year');


        $exam->user_id = Auth::user()->id;


        $exam->save();
        return redirect(route('exams'))->with('msg', 'Upload Done');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $exam = exam::find($id);
        return view('exams.single_exam')->with('exam', $exam);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(exam $exam)
    {
        return view('exams.edit_exam')->with('exam', $exam);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $exam)
    {
        $this->validate($request, [

            'title' => 'required',
            'author' => 'required',
            'info' => 'required',


        ]);
        $exam = exam::find($exam);

        if ($request->hasFile('examfile')) {
            $examExt = $request->file('examfile')->getClientOriginalExtension();
            $examName = time() . 'books.' . $examExt;
            $request->file('examfile')->storeAs('books', $examName);

        }


        $exam->title = $request->input('title');
        $exam->author = $request->input('author');

        $exam->info = $request->input('info');
        $exam->examfile = $examName;

        $exam->examyear = $request->input('year');


        $exam->user_id = Auth::user()->id;


        $exam->save();
        return redirect(route('exams'))->with('msg', 'Update Done');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(exam $exam)
    {
        $exam->delete();
        return redirect()->back()->with('msg', 'Delete Done');
    }

    public function searchexams(Request $request)

    {
        $search = $request->get('search');
        $exams= DB::table('exams')->where('title','like','%'.$search.'%')
            ->orWhere('id','like','%'.$search.'%')
            ->orWhere('author','like','%'.$search.'%')
            ->paginate(10);
        return view('browse-exams' , compact('exams'));


    }

    public function searchexamsinadmin(Request $request)

    {
        $search = $request->get('search');
        $exams= DB::table('exams')->where('title','like','%'.$search.'%')
            ->orWhere('id','like','%'.$search.'%')
            ->orWhere('author','like','%'.$search.'%')
            ->orWhere('examyear','like','%'.$search.'%')
            ->paginate(10);
        return view('exams/view_exams' , compact('exams'));


    }
}



