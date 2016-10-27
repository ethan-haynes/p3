<?php

namespace p3\Http\Controllers;

use Illuminate\Http\Request;

use p3\Http\Requests;
use p3\Http\Handlers\LoremIpsumHandler;

class LoremIpsumController extends Controller
{
    public function show(Request $request) {
        # Validate the request data
        $this->validate($request, [
            'number' => 'required|min:1|max:9|integer',
        ]);

        /* handle the request
         * return the data
         */
        $lorems = LoremIpsumHandler::handleRequest($request);

        return view('lorem')->with('title', 'Lorem Ipsum Generator')->with('lorems', $lorems);;
    }

    public function generate() {
        return view('loremGenerator')->with('title', 'Lorem Ipsum Generator');
    }
}
