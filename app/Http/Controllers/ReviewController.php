<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $reviews = Review::all();
        return view('admin.reviews.index', compact('reviews'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($post)
    {
        $post = Post::findOrFail($post);
        return view('admin.reviews.create', compact('post'));
    }
    
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'post' => 'required',
            'rating' => 'required',
            'comment' => 'nullable',
        ]);
        
        $review = new Review;
        $review->user_id = auth()->id();
        $review->product_id = $data['post'];
        $review->rating = $data['rating'];
        $review->comment = $data['comment'];
        $review->save();
        
        return redirect()->route('posts.show', $data['post'])
            ->with('info', 'Tu reseña ha sido guardada correctamente');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Review $review)
    {
        return view('admin.reviews.show', compact('review'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Review $review)
    {
        $this->authorize('update', $review);
        return view('admin.reviews.edit', compact('review'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Review $review)
    {
        $this->authorize('update', $review);

        $data = $request->validate([
            'rating' => 'required|integer|min:1|max:5',
            'comment' => 'nullable|string',
        ]);

        $review->rating = $data['rating'];
        $review->comment = $data['comment'];
        $review->save();

        return redirect()->route('admin.products.show', $review->product_id)
            ->with('success', 'Tu reseña ha sido actualizada correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Review $review)
    {
        $this->authorize('delete', $review);
        $review->delete();
        return redirect()->route('admin.products.show', $review->product_id)
            ->with('success', 'Tu reseña ha sido eliminada correctamente');
    }
    
}
