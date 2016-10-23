@extends('layouts.master')

@section('title')
    p3
@stop


{{--
This `head` section will be yielded right before the closing </head> tag.
Use it to add specific things that *this* View needs in the head,
such as a page specific stylesheets.
--}}
@section('head')
    <link href="/css/books/show.css" type='text/css' rel='stylesheet'>
@stop


@section('content')
    @if($title)
        <h1>This is a {{ $title }}</h1>
        <div class="row">
            <!-- main column left -->
            <div class="col-xs-1 col-md-2"></div>
            <!-- main column center -->
            <div class="col-xs-10 col-md-8 container text-center">
                <h1 class="title">
                    P2
                </h1>
                <div>
                    <div class="article-title">User Generator</div>
                    <div class="half-line"></div>
                    <div>Powered by Magic &amp; Bubble Yum</div>
                </div>
                <br>

                <!-- value updated by model -->
                <form action="/lorem" method="POST" class="inner">
                    {{ csrf_field() }}
                    Words:
                        <input type="radio" name="choice" value="words" checked>
                        &nbsp;
                    Sentences:
                        <input type="radio" name="choice" value="sentences">
                        &nbsp;
                    Paragraphs:
                        <input type="radio" name="choice" value="paragraphs">
                        <br>
                        <br>
                        Number:
                            <input type="text" name="number" value="1"><em class="note">*</em><br>
                        <br>

                        <div class="col-xs-12 col-md-12 text-center">
                            <input type="submit" class="btn btn-info">
                        </div>
                </form>
                <div>
                    <div class="line"></div>
                    Please use a valid number between 1-8 or bad things will happen
                    <em class="note">*</em>
                </div>
            </div>
            <div class="col-xs-1 col-md-2"></div>
        </div>
    @else
        <h1>No User Info Available</h1>
    @endif
@stop


{{--
This `body` section will be yielded right before the closing </body> tag.
Use it to add specific things that *this* View needs at the end of the body,
such as a page specific JavaScript files.
--}}
@section('body')
    <script src="/js/books/show.js"></script>
@stop