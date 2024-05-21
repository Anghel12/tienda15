<?php

namespace App\Http\Livewire\Home;

use App\Models\Comment;
use Livewire\Component;
use Livewire\WithPagination;

class CommentSlider extends Component
{
    public $comments;

    public function mount()
    {
        $this->comments = Comment::orderBy('created_at', 'DESC')->take(3)->get();
    }

    public function loadMore($direction)
    {
        if ($direction == 'next') {
            $lastCommentId = $this->comments->last()->id;
            $loadedComments = Comment::where('id', '>', $lastCommentId)->orderBy('created_at', 'DESC')->take(3)->get();
            $this->comments = $this->comments->concat($loadedComments);
        } else {
            $firstCommentId = $this->comments->first()->id;
            $loadedComments = Comment::where('id', '<', $firstCommentId)->orderBy('created_at', 'DESC')->take(3)->get();
            $this->comments = $loadedComments->concat($this->comments);
        }
    }

    public function render()
    {
        return view('livewire.home.comment-slider');
    }
       
    
}
