@extends('layouts.app')

@section('content')

@include('commons.error_messages')

  <div class="row">
    <div class="col-sm-8" "col-lg-6">
   
    
    <h1>タスク新規作成ページ</h1>

    {!! Form::model($tasklist, ['route' => 'tasklists.store']) !!}

      <div class="form-group">
         {!! Form::label('status', 'ステータス:') !!}
        {!! Form::text('status', null, ['class' => 'form-control']) !!}
      </div>
       
      <div class="form-group">
        {!! Form::label('content', 'タスク:') !!}
        {!! Form::text('content', null, ['class' => 'form-control']) !!}
      </div>
      
        {!! Form::submit('投稿', ['class' => 'btn btn-primary']) !!}

    {!! Form::close() !!}
   
   </div>
   </div> 

@endsection