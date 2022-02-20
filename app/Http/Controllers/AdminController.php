<?php

namespace App\Http\Controllers;

use App\Models\Topic;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth.admin');
    }

    public function dashboard()
    {
        $users = User::all();
        $topics = Topic::all();

        $picked_topics = Topic::where('is_accepted', true)
            ->inRandomOrder()
            ->take(3)
            ->get();
        return view('admin.index', compact('users', 'topics', 'picked_topics'));
    }

    public function acceptTopic(Request $request)
    {
        $topic_id = $request->post()['id'];
        $topic = Topic::find($topic_id);
        $topic->is_accepted = true;
        return $topic->save();
    }
}
