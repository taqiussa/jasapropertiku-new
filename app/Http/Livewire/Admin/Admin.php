<?php

namespace App\Http\Livewire\Admin;

use App\Models\Post;
use Livewire\Component;

class Admin extends Component
{
    protected $listeners = [
        'delete' => 'delete',
        'confirm' => 'confirmed'
    ];
    public function render()
    {
        return view('livewire.admin.admin',[
            'posts' => Post::whereConfirm(0)->orderBy('created_at','desc')->paginate(10)
        ]);
    }
    public function confirmDelete($id){
        $this->dispatchBrowserEvent('confirm:delete',['id' => $id]);
    }
    public function confirmConfirm($id)
    {
        $this->dispatchBrowserEvent('confirm:confirm',['id' => $id]);
    }
    public function confirmed($id){
        $post = Post::find($id);
        $post->update([
            'confirm' => 1
        ]);
        $this->dispatchBrowserEvent('notyf:success',[
            'type' => 'success',
            'message' => 'Berhasil Mengkonfirmasi Postingan'
        ]);
    }
    public function delete($id){
        $post = Post::find($id);
        $post->delete();
        $this->dispatchBrowserEvent('notyf:success',[
            'type' => 'error',
            'message' => 'Berhasil Mengapus Postingan'
        ]);
    }

}
