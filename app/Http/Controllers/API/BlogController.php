<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\BlogResource;
use App\Models\Blog;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $blogs = Blog::all();
        return response(['blogs' => BlogResource::collection($blogs), 'message' => 'retrieved successfully'], 200);

    }

    /**
     * View all the stories that related to the blog
     *
     * @param $blog_id
     * @return \Illuminate\Http\JsonResponse
     */
    public function view($blog_id){
        $blog = Blog::findOrFail($blog_id);
        $stories = $blog->stories()->get();
        return response(['stories' => BlogResource::collection($stories), 'message' => 'retrieved successfully'], 200);

    }


}
