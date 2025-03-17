<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Comic;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request, Comic $comic)
    {
        $request->validate([
            'content' => 'required|string|max:1000',
        ]);

        // Store the comment
        Comment::create([
            'comic_id' => $comic->id,
            'content' => $request->content,
        ]);

        // Increment comment count in the `comics` table
        $comic->increment('comment_count');

        return redirect()->back()->with('success', 'Comment added successfully!');
    }
}
