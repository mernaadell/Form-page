@extends("layouts.app")

@section("content")
    <ul>
       @foreach($out as $post)

       <li> <a href="{{route("posts.edit",$post->id)}}"> {{$post->title}} </a>  </li>
        <img src="{{$post->path}}">

{{--           route ll controller edit--}}

        @endforeach
   </ul>


@endsection

@section("footer")

@endsection
