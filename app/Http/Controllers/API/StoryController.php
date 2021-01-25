<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Story;
use App\Models\User;
use Illuminate\Http\Request;

class StoryController extends Controller
{
    /**
     * Create new story, only logged users can add stories
     *
     * @param Request $request
     * @param $blog_id
     * @return \Illuminate\Http\JsonResponse
     */
    public function create(Request $request,$blog_id)
    {
        $email = 'demo@blog.com';
        $logged_user = User::where('email', $email)->first();

        if ($logged_user->id) {
            $validatedData = $request->validate([
                'title' => 'required',
                'content' => 'required',
            ]);
            Story::create([
                'title' => $validatedData['title'],
                'content' => $validatedData['content'],
                'user_id' => $logged_user->id,
                'bolg_id' => $blog_id
            ]);
            return response()->json(['message' => 'created successfully'], 200);
        } else {
            return response()->json(['message' => 'unauthorized'], 401);
        }

    }

    /**
     * Edit story content , only admin and the creator can edit the content
     *
     * @param Request $request
     * @param $story_id
     * @return \Illuminate\Http\JsonResponse
     */
    public function edit(Request $request, $story_id)
    {

        $story = Story::findOrFail($story_id);
        $creator = $story->user_id;
        $email = 'demo@blog.com';
        $logged_user = User::where('email', $email)->first();
        //Admin users and the creators are only can edit story
        if ($creator === $logged_user->id || $logged_user->role === 'admin') {
            $validatedData = $request->validate([
                'title' => 'required',
                'content' => 'required',
            ]);
            $story->update([
                'title' => $validatedData['title'],
                'content' => $validatedData['content'],
                'user_id' => 1,
                'bolg_id' => 1
            ]);
            return response()->json(['message' => 'created successfully'], 200);
        } else {
            return response()->json(['message' => 'unauthorized'], 401);
        }
    }



    public function append(Request $request, $story_id)
    {
        $story = Story::findOrFail($story_id);
        $creator = $story->user_id;
        $email = 'demo@blog.com';
        $logged_user = User::where('email', $email)->first();
        //writer user can only append content to the previous content
        if ($creator != $logged_user->id) {
            $validatedData = $request->validate([
                'content' => 'required',
            ]);
            //append content to the original content
            $new_content = $story-> content .' '.$validatedData['content'];
            $story->update([
                'content' => $new_content,
            ]);
            return response()->json(['message' => 'created successfully'], 200);
        } else {
            return response()->json(['message' => 'unauthorized'], 401);
        }
    }

}
