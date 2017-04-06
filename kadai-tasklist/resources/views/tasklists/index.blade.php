@extends('layouts.app')

@section('content')

    <h1>メッセージ一覧</h1>

    @if (count($tasklists) > 0)
        <ul>
            @foreach ($tasklists as $tasklist)
                <li>{{ $tasklist->content }}</li>
            @endforeach
        </ul>
    @endif

@endsection