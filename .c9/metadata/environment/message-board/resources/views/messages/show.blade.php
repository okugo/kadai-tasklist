{"filter":false,"title":"show.blade.php","tooltip":"/message-board/resources/views/messages/show.blade.php","undoManager":{"mark":3,"position":3,"stack":[[{"start":{"row":0,"column":0},"end":{"row":6,"column":11},"action":"insert","lines":["@extends('layouts.app')","","@section('content')","","<!-- ここにページ毎のコンテンツを書く -->","","@endsection"],"id":1}],[{"start":{"row":4,"column":0},"end":{"row":4,"column":25},"action":"remove","lines":["<!-- ここにページ毎のコンテンツを書く -->"],"id":2},{"start":{"row":4,"column":0},"end":{"row":6,"column":34},"action":"insert","lines":["    <h1>id = {{ $message->id }} のメッセージ詳細ページ</h1>","","    <p>{{ $message->content }}</p>"]}],[{"start":{"row":0,"column":0},"end":{"row":8,"column":11},"action":"remove","lines":["@extends('layouts.app')","","@section('content')","","    <h1>id = {{ $message->id }} のメッセージ詳細ページ</h1>","","    <p>{{ $message->content }}</p>","","@endsection"],"id":3},{"start":{"row":0,"column":0},"end":{"row":10,"column":11},"action":"insert","lines":["@extends('layouts.app')","","@section('content')","","    <h1>id = {{ $message->id }} のメッセージ詳細ページ</h1>","","    <p>{{ $message->content }}</p>","","    {!! link_to_route('messages.edit', 'このメッセージ編集', ['id' => $message->id]) !!}","","@endsection"]}],[{"start":{"row":0,"column":0},"end":{"row":10,"column":11},"action":"remove","lines":["@extends('layouts.app')","","@section('content')","","    <h1>id = {{ $message->id }} のメッセージ詳細ページ</h1>","","    <p>{{ $message->content }}</p>","","    {!! link_to_route('messages.edit', 'このメッセージ編集', ['id' => $message->id]) !!}","","@endsection"],"id":4},{"start":{"row":0,"column":0},"end":{"row":14,"column":11},"action":"insert","lines":["@extends('layouts.app')","","@section('content')","","    <h1>id = {{ $message->id }} のメッセージ詳細ページ</h1>","","    <p>{{ $message->content }}</p>","","    {!! link_to_route('messages.edit', 'このメッセージ編集', ['id' => $message->id]) !!}","","    {!! Form::model($message, ['route' => ['messages.destroy', $message->id], 'method' => 'delete']) !!}","        {!! Form::submit('削除') !!}","    {!! Form::close() !!}","","@endsection"]}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":14,"column":11},"end":{"row":14,"column":11},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1526360611307,"hash":"d05661da280f7a6feaac750135bdf8cea16e893c"}