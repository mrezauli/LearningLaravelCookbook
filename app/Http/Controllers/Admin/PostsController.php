<?php

namespace App\Http\Controllers\Admin;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\CreatePostRequest;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $posts = Post::all();
        return view('backend.posts.index')->with('posts', $posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories = Category::all();
        $category_names = $categories->pluck('name');
        $category_ids = $categories->pluck('id');

        foreach ($category_ids as $key => $value) {
            $categoriesOptions[$value] = $category_names[$key];
        }
        return view('backend.posts.create')->with('categoriesOptions', $categoriesOptions);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\CreatePostRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreatePostRequest $request)
    {
        //
        $slug = Str::slug($request->get('title'), '-');
        $post = new Post([
            'title' => $request->get('title'),
            'content' => $request->get('content'),
            'slug' => $slug,
            'user_id' => 1
        ]);
        //dd($request);

        $post->save();
        $post->categories()->sync($request->get('category_ids'));

        return redirect('admin/posts/create')->with('status', 'The post' . $slug . ' has been created!');
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
        $post = Post::whereId($id)->firstOrFail();
        return view('backend.posts.show')->with([
            'post' => $post
        ]);
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
        $post = Post::whereId($id)->firstOrFail();

        $categories = Category::all();
        $category_names = $categories->pluck('name');
        $category_ids = $categories->pluck('id');

        foreach ($category_ids as $key => $value) {
            $categoriesOptions[$value] = $category_names[$key];
        }

        $selectedCategories = $post->categories->pluck('id');
        return view('backend.posts.edit')->with('post', $post)->with('categoriesOptions', $categoriesOptions)->with('selectedCategories', $selectedCategories);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\CreatePostRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CreatePostRequest $request, $id)
    {
        //
        $slug = Str::slug($request->get('title'), '-');
        $post = Post::whereId($id)->firstOrFail();
        $post->title = $request->get('title');
        $post->content = $request->get('content');
        $post->slug = $slug;
        $post->save();

        $post->categories()->sync($request->get('category_ids'));

        return redirect(action('App\Http\Controllers\Admin\PostsController@edit', $post->id))->with('success', 'Posts has been updated! Its link is: ' . $slug);
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
