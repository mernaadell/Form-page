@extends("layouts.app")

@section("content")

    {!! Form::model($post,['method'=>"patch",'action'=>["postsController@update",$post->id]]) !!}

    <div class="form-group">
        {!! Form::label('title','Title:')  !!}
        {{csrf_field()}}
        {!! Form::text('title',null,['class'=>'form-control']) !!}
    </div>


    {!! Form::submit('update post',['class'=>'btn btn-primary']) !!}


    {{--    </form>--}}
    {!! Form::close() !!}

@endsection

@section("footer")

@endsection
