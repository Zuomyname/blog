<?php

namespace App\Http\Controllers;

use App\Models\Topic;
use Illuminate\Http\Request;

class TopicsController extends Controller
{
    public function index()
    {
//        $p = new \Parsedown();
//        $topics = Topic::where('id', 5)->paginate(10);
//        foreach ($topics as $topic) {
//            $topic->body = $p->setBreaksEnabled(true)->text($topic->title);
//        }
//        dd($topics);
        $topics = Topic::paginate(10);
        return view('topics.index', ['topics' => $topics]);
    }

    public function show(Topic $topic)
    {
        $p = new \Parsedown();
        $topic->body = $p->setBreaksEnabled(true)->text($topic->body);
        return view('topics.show', compact('topic'));
    }
}
