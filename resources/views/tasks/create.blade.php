@extends('layouts.app')

@section('content')

    <h1>課題新規作成</h1>
    
    {!! Form::model($task, ['route' => 'tasks.store']) !!}
    
        {!! Form::label('status', 'ステータス: ') !!}
        {!! Form::text('status') !!}
        
        {!! Form::label('content', '課題: ') !!}
        {!! Form::text('content') !!}
        
        {!! Form::submit('投稿') !!}
        
    {!! Form::close() !!}

@endsection