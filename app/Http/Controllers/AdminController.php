<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
class AdminController extends Controller
{
    public function index(){
        return view('admin.admin');
    }
    public function show($id){
        return view('admin.detail-post',[
        'post' => Post::whereSlug($id)->first()]);
    }
}
