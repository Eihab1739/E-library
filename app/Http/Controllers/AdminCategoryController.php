<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Category;

class AdminCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories= Category::all();
        return view('admin.categories')->with('categories',$categories);    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return [""];
        return view('admin.CreateCategory');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required'


        ]);
        $category=new Category();
        $category->name=$request->input('name');
        $category->save();
        return redirect(route('categories.index'))->with('msg','Category Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */







    public function searchforcategories(Request $request)

    {

        // $search = $request->get('search');
        // $categoryadmin = DB::table('categories')->where('name', 'like', '%' . $search . '%')
        //     ->orWhere('id', 'like', '%' . $search . '%')
        //     ->paginate(10);
        // return view('admin/categories', compact('categoryadmin'));

        $search = $request->get('search');
        $categoryadmin = DB::table('books')->where('title', 'like', '%' . $search . '%')
            ->Where('category_id', 'like', '%' . search . '%')
            ->paginate(10);
        return view('admin/categories', compact('categoryadmin'));
    }

    public function destroy($id)
    {
        $cat=Category::find($id);
        $cat->delete();
        return redirect()->back()->with('msg', 'Deleted Successfuly');
}
}
