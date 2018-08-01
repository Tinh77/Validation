<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class ArticleController extends Controller
{
    var $obj_name = "article";
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list_obj = Article::all();
        return view('admin.' . $this->obj_name . '.list')->with('list_obj', $list_obj);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.' . $this->obj_name . '.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $obj = new Article();
        $obj -> title = Input::get('title');
        $obj -> description = Input::get('description');
        $obj -> author = 'Xuan Hung';
        $obj -> content = 'Xuan Hung';
        $obj -> thumbnail = 'Xuan Hung';
        $obj -> save();
        return redirect('/admin/' . $this->obj_name);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $obj = Article::find($id);
        if($obj == null){
            return view('404');
        }
        return view('admin.' .$this->obj_name. '.show') -> with('obj', $obj);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $obj = Article::find($id);
        if($obj == null){
            return view('404');
        }
        return view('admin.' .$this->obj_name. '.edit') -> with('obj', $obj);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $obj = Article::find($id);
        if($obj == null){
            return view('404');
        }
        $obj -> title = Input::get('title');
        $obj -> description = Input::get('description');
        $obj -> author = 'Xuan Hung';
        $obj -> content = 'Xuan Hung';
        $obj -> thumbnail = 'Xuan Hung';
        $obj -> save();
        return redirect('/admin/' .$this->obj_name);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $obj = Article::find($id);
        if($obj == null){
            return response()->json(['error' => 'not found'], 404);
        }
        $obj->delete();
        return response()->json(['message' => 'Deleted'], 200);
    }
}
