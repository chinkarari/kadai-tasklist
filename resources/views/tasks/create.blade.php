@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-xs-12 col-sm-offset-2 col-sm-8 col-lg-offset-3 col-lg-6">
            <h1>課題新規作成</h1>
            {!! Form::open(['route' => 'tasks.store']) !!}
                <div class="form-group">
                    {!! Form::label('status', 'ステータス: ') !!}
                    {!! Form::text('status', old('status'), ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('content', '課題: ') !!}
                    {!! Form::text('content', old('content'), ['class' => 'form-control']) !!}
                </div>
                {!! Form::submit('投稿', ['class' => 'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
    </div>
    
    
        
        
        
    

@endsection