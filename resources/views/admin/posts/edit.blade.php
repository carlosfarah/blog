@extends('themeAdmin')
@extends('admin.footer')
@extends('admin.main')
@extends('admin.topMenu')
@extends('admin.mainMenu')
@section('mainContent')

    <div class="col-md-12">
        <hr>
        <a href="#"><strong><i class="glyphicon glyphicon-list-alt"></i> Edit Post: {{ $post->title }}</strong></a>
        <hr>

        @if($errors->any())
            <ul class="alert">
                @foreach($errors->all() as $message)
                    <li>{{ $message }}</li>
                @endforeach
            </ul>
        @endif

        {!! Form::model($post, ['route'=>['admin.posts.update', $post->id], 'method'=>'put']) !!}

        @include('admin.posts._form')

        <div class="form-group">
            {!! Form::label('tags','Tags:', ['class' => 'control-label']) !!}
            {!! Form::textarea('tags', $post->tagList, ['class' => 'form-control']) !!}
        </div>

        <div>
            {!! Form::submit('Save Post', ['class'=>'btn btn-primary']) !!}
        </div>

        {!! Form::close() !!}

    </div>

@endsection