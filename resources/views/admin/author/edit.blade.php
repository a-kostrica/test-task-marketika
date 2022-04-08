@extends('layouts.admin_layout')

@section('title', 'Редактирование автора')

@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Редактирование автора</h3>
        </div>
        <form action="{{ route('author.update', $author->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="card-body">
                <div class="form-group">
                    <label for="inputNameAuthor">ФИО автора</label>
                    <input type="text" name="name" class="form-control" id="inputNameAuthor"
                        placeholder="Введите ФИО автора" value="{{ $author->name }}">
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Обновить</button>
                </div>
        </form>
    </div>
@endsection
