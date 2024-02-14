<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

class Postlist extends Component
{
    use WithPagination;

    #[Url()]
    public $sort = 'desc';

    public function setSort($sort)
    {
        $this->sort = ($sort === 'desc') ? 'desc' : 'asc';
        $this->resetPage();
    }
    #[Computed()]
    public function posts()
    {
        return Post::published()->orderBy('published_at', $this->sort)->paginate(10);
    }
    public function render()
    {
        return view('livewire.postlist');
    }
}
