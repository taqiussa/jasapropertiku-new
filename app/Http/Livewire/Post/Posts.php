<?php

namespace App\Http\Livewire\Post;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithPagination;

class Posts extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    protected $listeners = [
        'getJual' => 'searchJual',
        'getSewa' => 'searchSewa'
    ];
    public $jual;
    public $sewa;
    public $searchs;
    public $category;
    public $counts = 1;
    public function searchJual($inputan){
        $this->searchs = $inputan;
        $this->sewa = '';
        $this->category = 'Jual';
        $this->counts = Post::search($this->searchs, $this->category)->whereConfirm(1)->count();
    }
    public function searchSewa($inputan){
        $this->searchs = $inputan;
        $this->jual = '';
        $this->category = 'Sewa';
        $this->counts = Post::search($this->searchs, $this->category)->whereConfirm(1)->count();
    }
    public function render()
    {
        return view('livewire.post.posts', 
                [
                    'posts' => Post::search($this->searchs, $this->category)->whereConfirm(1)->latest()->paginate(6),
                ]);
    }
}
