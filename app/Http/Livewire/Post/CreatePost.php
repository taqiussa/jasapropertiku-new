<?php

namespace App\Http\Livewire\Post;

use Livewire\Component;

class CreatePost extends Component
{
    public $title;
    public $slug;
    public $category;
    public $price;
    public $rights;
    public $certificate;
    public $owner;
    public $area;
    public $location;
    public $description;
    public $photo;
    public $others;
    public $confirm;
    public $status;
    protected $rules = [
        'title' => 'required|string',
        'slug' => 'required|string|unique',
        'category' => 'required|string',
        'price' => 'required|string',
        'rights' => 'required|string',
        'certificate' => 'required|string',
        'owner' => 'required|string',
        'area' => 'required|string',
        'location' => 'required|string',
        'description' => 'required|string',
        'photo' => 'image|mimes:jpg,jpeg,png,svg,gif|max:4096',
        'others' => 'required|string',
        'status' => 'required|string',
    ];
    public function render()
    {
        return view('livewire.post.create-post');
    }
}
