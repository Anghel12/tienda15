<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentsAllController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:admin.CommentsAll.index')->only('index');
  /*       $this->middleware('can:admin.posts.create')->only('create', 'store');
        $this->middleware('can:admin.posts.edit')->only('edit', 'update');
        $this->middleware('can:admin.posts.destroy')->only('destroy');  */
    }

    public function index()
    {
        $Comments = Comment::all();
        return view('admin.CommentsAll.index', compact('Comments') );
    }
}
