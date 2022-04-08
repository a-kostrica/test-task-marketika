@extends('layouts.admin_layout')

@section('title', 'Редактирование книги')

@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Редактирование книги</h3>
        </div>
        <form action="{{ route('book.update', $book->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="card-body">
                <div class="form-group">
                    <label for="inputTitleBook">Название книги</label>
                    <input type="text" name="title" class="form-control" id="inputTitleBook"
                        placeholder="Введите название книги" value="{{ $book->title }}" required>
                </div>
                <div class="form-group">
                    <label for="selectAuthor">Автор</label>
                    <select name="author_id" class="custom-select form-control-border" id="selectAuthor" required>
                        @foreach ($authors as $author)
                            <option value="{{ $author->id }}" @if ($author->id == $book->author_id) selected @endif>
                                {{ $author->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Обновить</button>
                </div>
        </form>
    </div>
@endsection
