@extends('layouts.app')

@section('content')

    
    
    <div class="row">
        <div class="col-xs-12 col-sm-offset-2 col-sm-8 col-lg-offset-3 col-lg-6">
            <h1>id = {{ $task->id }} の課題</h1>
            <table class="table table-borderd">
                <tr>
                    <th>課題</th>
                    <td>{{ $task->content }}</td>
                </tr>
                <tr>
                    <th>ステータス</th>
                    <td>{{ $task->status }}</td>
                </tr>
            </table>
    
            {!! link_to_route('tasks.edit', '課題を編集', ['id' => $task->id], ['class' => 'btn btn-default']) !!}
    
            {!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
                {!! Form::submit('削除', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
        </div>
    </div>
    
@endsection