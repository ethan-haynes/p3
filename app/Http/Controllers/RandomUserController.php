<?php

namespace p3\Http\Controllers;

use Illuminate\Http\Request;

use p3\Http\Requests;
use p3\Http\Handlers\RandomUserHandler;

class RandomUserController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function generate(Request $request) {
        # Validate the request data
        $this->validate($request, [
            'number' => 'required|min:1|max:9|integer',
            'localeValue' => 'required|min:5|max:5|alpha_dash|regex:[[a-z]{2}_[A-Z]{2}]'
        ]);

        $users = RandomUserHandler::handleRequest($request);

        return view('user')->with('title', "Random User Generator")->with('users', $users);
    }

    public function generateForm() {
        return view('userGenerator')->with('title', 'Random User Generator');
    }
}
