<?php

namespace Bulkly\Http\Controllers;
use Bulkly\SocialPostGroups;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public  function index(){
        $buffers = SocialPostGroups::paginate(10);
        return view('post.index',compact('buffers'));
    }
}
