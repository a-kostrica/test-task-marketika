@extends('layouts.admin_layout')

@section('title', 'Добавить книгу')

@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Добавить книгу</h3>
        </div>
        <form action="{{ route('book.store') }}" method="POST">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="inputTitleBook">Название книги</label>
                    <input type="text" name="title" class="form-control" id="inputTitleBook"
                        placeholder="Введите название книги" required>
                </div>
                <div class="form-group">
                    <label for="selectAuthor">Автор</label>
                    <select name="author_id" class="custom-select form-control-border" id="selectAuthor" required>
                        @foreach ($authors as $author)
                            <option value="{{ $author->id }}">{{ $author->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Добавить</button>
                </div>
        </form>
    </div>
@endsection
