@extends('template')

@section('content')
<div class="content">
<h1>This is page to create post</h1><br>
<form action="{{route('post.store')}}" method="post">
        {{ csrf_field() }}
        <label for="title">Title</label><input type="text" name="title" id="title"><br>
        <label for="body">Body</label><input type="text" name="body" id="body" cols="30" rows="10"><br>
        <button type="submit">Submit</button>
    </form>
</div>
@endsection