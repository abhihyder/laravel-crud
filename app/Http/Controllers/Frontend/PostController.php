<?php

namespace App\Http\Controllers\Frontend;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts= Post::with('category', 'user')
        ->select('id','user_id', 'category_id', 'title', 'status', 'created_at')
        ->orderBy('created_at', 'desc')
        ->paginate(5);
        return view('frontend.posts.posts', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $categories= Category::select('id', 'name')->orderBy('name')->get();
        return view('frontend.posts.createPost', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
                //validation
       
        $validator = Validator::make($request->all(), [
            'title'   => 'required| max:128',
            'content'   => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('post/create')
                ->withErrors($validator)
                ->withInput();
        }

        $data=[
            'user_id'=>1,
            'category_id'=>$request->category_id,
            'title'=> $request->title,
            'content'=> $request->content,
            'status'=> $request->status,
        ];

        Post::create($data);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $post= Post::with('category', 'user')
        ->select('id','user_id', 'category_id', 'title', 'content', 'status', 'created_at')
        ->find($id);
        return view('frontend.posts.singlePost', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post= Post::with('category')
        ->select('id', 'category_id', 'title', 'content', 'status')
        ->find($id);
        return view('frontend.posts.editPost', compact('post'));
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
        //validation

            $validator = Validator::make($request->all(), [
            'title'   => 'required| max:128',
            'content'   => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('post/create')
                ->withErrors($validator)
                ->withInput();
        }

        $data=[
            'title'=> $request->title,
            'content'=> $request->content,
            'status'=> $request->status,
        ];

        $post=Post::find($id); //fetch data
        $post->update($data); // Update data


       //return response()->json($data);
       
       return redirect('post/'.$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post= Post::find($id); //fetch data
        $post->delete(); // Data delete
        return redirect('post');
    }
}
