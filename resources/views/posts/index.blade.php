@extends("layouts.app")

@section("content")
    <ul>
       @foreach($out as $post)

       <li> <a href="{{route("posts.show",$post->id)}}"> {{$post->title}} </a>  </li>
{{--           route ll controller show--}}

        @endforeach
   </ul>


@endsection

@section("footer")

@endsection
