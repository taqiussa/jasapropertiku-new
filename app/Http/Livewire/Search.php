<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Search extends Component
{
    public $jual;
    public $sewa;
    public $searchs;
    public function updatedJual(){
        $this->sewa = '';
        $this->emitTo('post.posts', 'getJual', $this->jual);
    }
    public function updatedSewa(){
        $this->jual = '';
        $this->emitTo('post.posts', 'getSewa', $this->sewa);
    }
    public function render()
    {
        return view('livewire.search');
    }
}
