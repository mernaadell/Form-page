@extends("layouts.app")

@section("content")
    {{--insert in db--}}
    <form method="post"action="/posts">{{--da l urll bta3 method l store fe controller--}}

        <input type="text" name="title">{{--lzam l name b esm l col elii ha7oto fe db--}}
                {{csrf_field()}}
        <input type="submit" name="submit">

    </form>

@endsection

@section("footer")

@endsection
