<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $column = $request->column;
        session(['column'=>$column]);
        $keyword = $request->keyword;
        session(['keyword'=>$keyword]);
        $columns = ['drops','bugs'];
        if($column){
            $columns = [$column];
        }
        $query = Article::whereIn('column', $columns);
        if($keyword) {
            $query->where('title', 'like', '%' . $keyword . '%');
        }
        $articles = $query->paginate(30);

        return view('index',compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $uuid
     * @return \Illuminate\Http\Response
     */
    public function show($uuid)
    {
        $article = Article::where('uuid',$uuid)->firstOrFail();
        $article->viewnum ++;
        $article->save();
        $article->content = file_get_contents(public_path().'/storage/'.$article->column.'/'.$article->uuid.'.html');
        $article->content = str_replace("../images/",'http://qiniu.wooyun.lerzen.com/',$article->content);
        return view('show',compact('article'));
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
    public function destroy($id)
    {
        //
    }
}
