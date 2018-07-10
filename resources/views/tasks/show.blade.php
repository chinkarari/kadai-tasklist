@extends('layouts.app')

@section('content')

    <h1>id = {{ $task->id }} の課題</h1>
    
    <p>{{ $task->content }}</p>
    <p>status: {{ $task->status }}</p>
    
    {!! link_to_route('tasks.edit', '課題を編集', ['id' => $task->id]) !!}
    
    {!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
        {!! Form::submit('削除') !!}
    {!! Form::close() !!}
@endsection