<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'numeric', 'regex:/^09[0|1|2|3][0-9]{8}$/'],
            'title' => ['required', 'string', 'max:255'],
            'text' => ['required', 'string']
        ]);

        if (auth()->check())
            $request['user_id'] = auth()->user()->id;

        Feedback::create($request->all());

        alert()->success('عملیات موفقیت آمیز بود', 'پیام شما با موفقیت ارسال شد');
        return redirect()->back();
    }
}
