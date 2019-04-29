@extends('layouts.template')

@section('title')
    Index of Post
@endsection

@section('content')
@if (count($posts) > 0)
    <ul>
        @foreach ($posts as $post)
    <li><a href="{{route('post.show', $post['id'])}}"><b>{{'---------'.$post['title']}}</b></a></li>
        @endforeach
    </ul>
    @else
        <p>Tidak ada data</p>
@endif
    
@endsection