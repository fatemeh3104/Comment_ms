<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Commente;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index($id){
        return Commente::where('post_id',$id)->get();
    }
    public function store(Request $request){
        return Commente::create([
            "post_id" => $request->input('post_id'),
            "text" => $request->input('text')
        ]
        );
    }
}
