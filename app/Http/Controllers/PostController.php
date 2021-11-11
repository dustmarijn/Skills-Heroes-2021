<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Post;


class PostController extends Controller
{
    public function index()
    {
        return view('dashboard');
    }
    public function store(Request $request)
    {
//        $post = new Post;
//        $post->title = $request->title;
//        $post->description = $request->description;
//        $post->save();
//        return redirect('dashboard')->with('status', 'Blog Post Form Data Has Been inserted');

        $post = new Post;
        $post->firstname = $request->firstname;
        $post->lastname = $request->lastname;
        $post->yes_no_points = $request->yes_no_points;
        $post->yes_no_dropdown = $request->yes_no_dropdown;
        $post->subjective_points = $request->subjective_points;
        $post->subjective_jury_1 = $request->subjective_jury_1;
        $post->subjective_jury_2 = $request->subjective_jury_2;
        $post->nominal_points = $request->nominal_points;
        $post->nominal_needed = $request->nominal_needed;
        $post->nominal_deviation = $request->nominal_deviation;
        $post->nominal_deviation_points = $request->nominal_deviation_points;
        $post->nominal_deviation_points_number = $request->nominal_deviation_points_number;
        $post->save();
        return redirect('dashboard')->with('status', 'De Score is opgeslagen');
    }
}
