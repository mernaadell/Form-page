@extends("layouts.app")

@section("content")
    {{--insert in db--}}
{{--    <form method="post"action="/posts">--}}{{--da l urll bta3 method l store fe controller--}}
    {!! Form::open(['method'=>"post",'action'=>"postsController@store"]) !!}
        {{--lzam l name b esm l col elii ha7oto fe db--}}
    <div class="form-group">
        {!! Form::label('title','Title:')  !!}
        {!! Form::text('title',null,['class'=>'form-control']) !!}
    </div>

{{--                {{csrf_field()}}--}}
    {!! Form::submit('create post',['class'=>'btn btn-primary']) !!}


{{--    </form>--}}
    {!! Form::close() !!}

    @if(count($errors)>0)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
{{--                    //errors are global for all--}}

                    <li>
                        {{$error}}
                    </li>
                @endforeach

            </ul>


        </div>

    @endif

@endsection

@section("footer")

@endsection
