@extends('layout.layout')
@section('title', 'Pages')
@section('content')
    <a href="{{url('admin')}}">Go back</a>
    @if(isset($error))
        <p style="color: red">{{$error}}</p>
    @endif
    <hr>
    <a href="{{url('admin/page/create')}}">Create page</a>

    @if(is_array($pages))
        Pages count: {{count($pages)}}
        <table border="1">
            <tr>
                <th>Page id</th>
                <th>Page title</th>
                <th>Page body</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            @foreach ($pages as $page)
                <tr>
                    <td>{{$page->page_id}}</td>
                    <td>{{$page->page_title}}</td>
                    <td>{{strip_tags($page->page_body)}}</td>
                    <td><a href="{{url('admin/page/еdit/'.$page->page_id)}}">Edit</a></td>
                    <td><a href="{{url('admin/page/delete/'.$page->page_id)}}">Delete</a></td>
                </tr>
            @endforeach
        </table>
    @else
        <p>{{$pages}}</p>

    @endif

    <hr>
    <h2>Set default page</h2>
    <div>
        <form method="post" action="{{url('admin/page/default')}}">
            @csrf
            @method('post')
            <label>
                Choose page

                <select name="page_id">
                    @foreach($pages as $page)
                        <option value="{{$page->page_id}}">{{$page->page_title}}</option>
                    @endforeach
                </select>
            </label>

            <input type="submit"/>
        </form>
    </div>
    <h2>
        Change theme
    </h2>
    <div>
        <form method="post" action="{{url('admin/changetheme')}}">
            @method('post')
            @csrf
            <select name="theme_id">
                @foreach($themes as $theme)
                    <option>{{ucfirst($theme)}}</option>
                @endforeach
            </select>
        </form>
    </div>

@endsection

