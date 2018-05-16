@extends('layouts.app')

@section('content')

    <h1>id = {{ $task->id }} のタスク詳細ページ</h1>

    <p>メッセージ: {{ $task->status }}</p>
    
     {!! link_to_route('tasks.edit', 'このタスクの編集', ['id' => $task->id]) !!}

    {!! Form::model($task, ['route' => ['task.destroy', $task->id], 'method' => 'delete']) !!}
        {!! Form::submit('削除') !!}
    {!! Form::close() !!}

@endsection