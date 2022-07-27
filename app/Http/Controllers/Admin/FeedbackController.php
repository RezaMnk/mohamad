<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $feedbacks = Feedback::query();

        $feedbacks = $this->search_filter($feedbacks)->latest()->paginate(20);
        return view('admin.feedbacks.index', compact('feedbacks'));
    }


    /**
     * filter with search param
     *
     * @param $feedbacks
     * @return mixed
     */
    public function search_filter($feedbacks)
    {
        if (request('unread'))
            $feedbacks->where('read', 'false');

        if ($keyword = request('search')) {
            $feedbacks->where('name', 'LIKE', "%$keyword%")
                ->orWhere('phone', 'LIKE', "%$keyword%")
                ->orWhere('title', 'LIKE', "%$keyword%")
                ->orWhere('text', 'LIKE', "%$keyword%");
        }

        return $feedbacks;
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show(Feedback $feedback)
    {
        if (!$feedback->read)
        {
            $feedback->read = true;
            $feedback->save();
        }
        return view('admin.feedbacks.show', compact('feedback'));
    }

}
