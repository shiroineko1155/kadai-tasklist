@extends('layouts.app')

@section('content')

  <h1>id: {{ $tasklist->id }} のタスク編集ページ</h1>

  @include('commons.error_messages') 
 
    {!! Form::model($tasklist, ['route' => ['tasklists.update', $tasklist->id], 'method' => 'put']) !!}

        {!! Form::label('status', '状態:') !!}
        {!! Form::text('status') !!}


        {!! Form::label('content', 'タスク:') !!}
        {!! Form::text('content') !!}

        {!! Form::submit('更新') !!}

    {!! Form::close() !!}

@endsection