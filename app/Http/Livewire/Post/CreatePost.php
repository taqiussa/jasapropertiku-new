<?php

namespace App\Http\Livewire\Post;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreatePost extends Component
{
    use WithFileUploads;
    public $idPost;
    public $title;
    public $category;
    public $price;
    public $rights;
    public $certificate;
    public $owner;
    public $area;
    public $location;
    public $description;
    public $photo;
    protected $rules = [
        'title' => 'required|string',
        'category' => 'required|string',
        'price' => 'required|string',
        'rights' => 'required|string',
        'certificate' => 'required|string',
        'owner' => 'required|string',
        'area' => 'required|string',
        'location' => 'required|string',
        'description' => 'required|string',
        'photo' => 'image|mimes:jpg,jpeg,png,svg,gif|max:4096',
    ];
    public function updatedPrice()
    {
        $this->price = intval(str_replace(".", "", $this->price));
        $this->price ? $this->price = number_format($this->price, 0, ",", ".") : 0;
    }
    public function clearVar()
    {
        $this->title = '';
        $this->category = '';
        $this->price = '';
        $this->rights = '';
        $this->certificate = '';
        $this->owner = '';
        $this->area = '';
        $this->location = '';
        $this->photo = '';
        $this->description = '';
    }
    public function savePost()
    {
        if (!auth()->user()) {
            $this->dispatchBrowserEvent('swal:notif', [
                'type' => 'error',
                'title' => 'Anda Belum Login',
                'text' => 'Silahkan Login untuk Melanjutkan'
            ]);
        } else {
            $this->resetErrorBag();
            $this->validate();
            $foto = $this->photo->store('posts');
            $data = [
                'user_id' => auth()->user()->id,
                'title' => $this->title,
                'category' => $this->category,
                'price' => intval(str_replace(".", "", $this->price)),
                'rights' => $this->rights,
                'certificate' => $this->certificate,
                'owner' => $this->owner,
                'area' => $this->area,
                'location' => $this->location,
                'description' => $this->description,
                'photo' => $foto,
                'confirm' => 0,
                'status' => 'ready',
            ];
            Post::updateOrCreate(['id' => $this->idPost], $data);
            $this->dispatchBrowserEvent(
                'notyf:success',
                [
                    'type' => 'success',
                    'message' => 'Berhasil Memasang Iklan',
                ]
            );
            $this->clearVar();
        }
    }
    public function render()
    {
        return view('livewire.post.create-post');
    }
}
