<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Post;


class PostController extends Controller
{
    public function index()
    {
//        Controller views the main page
        return view('dashboard');
    }
    public function store(Request $request)
    {
//        Var post is made
        $post = new Post;
//        Post is being filled by the form content
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
//        Post is saved to the model witch sends the data to the database
        $post->save();
//        controller returns to main page with status info
        return redirect('/')->with('status', 'De Score is opgeslagen');
    }
}
