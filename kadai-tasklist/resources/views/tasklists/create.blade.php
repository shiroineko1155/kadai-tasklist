@extends('layouts.app')

@section('content')

  <h1>タスク管理新規作成ページ</h1>
  
  @include('commons.error_messages')

    {!! Form::model($tasklist, ['route' => 'tasklists.store']) !!}

        {!! Form::label('status', '状態:') !!}
        {!! Form::text('status') !!}

        {!! Form::label('content', 'タスク:') !!}
        {!! Form::text('content') !!}

        {!! Form::submit('投稿') !!}

    {!! Form::close() !!}

@endsection