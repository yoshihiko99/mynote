@extends('layout.common')

@section('title', 'ノート作成')

@section('content')
    <form class="form" action="{{ route('notes.update', $note->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <input class="btn btn-primary" type="submit" value="保存する">
        </div>

        <div class="mb-3">
            <label for="title" class="form-label">タイトル</label>
            <input id="title" class="form-control" name="title" value="{{ old('title', $note->title) }}">
        </div>
        <div class="mb-3" style="height: 600px">
            <label for="body" class="form-label">本文</label>
            <textarea class="" id="body" name="body">{{ old('body', $note->body) }}</textarea>
        </div>
    </form>



    <link rel="stylesheet" href="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.css">
    <script src="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.js"></script>
    <script>
        $(document).ready(function () {
            var simplemde = new SimpleMDE({element: document.getElementById("body")});
        });
    </script>
@endsection