<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostCreateRequest;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use App\post;
class postsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $out=post::all();
        return view("posts.index",compact("out"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("posts.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostCreateRequest  $request)
    {
        //files

       //in db
        $input=$request->all();
        if($file=$request->file('file')){
            $name=$file->getClientOriginalName();
            $file->move('images',$name);//make images folder and put
            $post=new post();
            $post->path=$name;
            $post->title=$request->title;
            $post->save();
        }

        //validation
//        $this->validate($request,[
//            "title"=>"required|max:4",
//
//    ]);
        //-------------how to make advanced validation
        //any a3ml class mkan l request w a7ot feh l rules w ast5dmo


        //l rew mn l form bytb3t hna
//        return $request->all(); //all the form data
        //all method to insert to db
       // post::create($request->all());

//        $input=$request->all();
//        $input["title"]=$request->title;

        $post=new post();
        $post->title=$request->title;
        $post->save();
        return redirect("posts");
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
        $post=post::findOrFail($id);
        return view("posts.show",compact("post"));

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
        $post=post::findOrFail($id);
        return view("posts.edit",compact("post"));
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
        $post=post::findOrFail($id);
        $post->title=$request->title;
        $post->save();
       return redirect("posts");

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

