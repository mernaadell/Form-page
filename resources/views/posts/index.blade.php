@extends("layouts.app")

@section("content")
    <ul>
       @foreach($out as $post)

       <li> <a href="{{route("posts.edit",$post->id)}}"> {{$post->title}} </a>  </li>

{{--           route ll controller edit--}}

        @endforeach
   </ul>


@endsection

@section("footer")

@endsection
