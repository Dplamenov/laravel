@extends('layout.layout')
@section('title',"{$page_title}")
@section('content')
    <div>
        <nav style="float: right;">
            <p>Navigation</p>
            @foreach($pages as $page)
                <p><a href="{{url('page/'.$page->page_id)}}">{{$page->page_title}}</a></p>
            @endforeach
            <p>--------</p>
            <a href="{{url('/admin')}}">Admin</a>
        </nav>
    </div>
    <h1>{{$page_title}}</h1>
    <div>{{$page_body}}</div>
@endsection


