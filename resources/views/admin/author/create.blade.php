@extends('layouts.admin_layout')

@section('title', 'Добавить автора')

@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Добавить автора</h3>
        </div>
        <form action="{{ route('author.store') }}" method="POST">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="inputNameAuthor">ФИО автора</label>
                    <input type="text" name="name" class="form-control" id="inputNameAuthor"
                        placeholder="Введите ФИО автора">
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Добавить</button>
                </div>
        </form>
    </div>
@endsection
