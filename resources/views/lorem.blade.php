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

    <div class="row">
        <div class="col-xs-1 col-md-2"></div>
        <div class="col-xs-10 col-md-8 container text-center">
            <div class="article-title">{{ $title }}</div>
        </div>
    </div>
    @else
        <h1>No Generator Chosen</h1>
    @endif

    @if($lorems)
        <div class="row">
            <!-- main column left -->
            <div class="col-xs-1 col-md-2"></div>
            <!-- main column center -->
            <div class="col-xs-10 col-md-8 container text-center">
                @forelse($lorems as $lorem)
                    <li>{{ $lorem }}</li>
                    <br>
                @empty
                    <p>No users Available</p>
                @endforelse
            </div>
        </div>
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
