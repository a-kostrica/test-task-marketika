@extends('layouts.user_layout')

@section('title', 'Главная')

@section('content')
    <div class="card card-primary">
        <div class="p-5 mb-4 bg-light rounded-3">
            <div class="container-fluid py-5">
                <h1 class="display-5 fw-bold">Внимание</h1>
                <p class="col-md-8 fs-4">Так как задания написать регистрацию, авторизацию и доступ к ресурсам сайта по
                    ролям не было, то чтобы
                    попасть
                    в
                    интерфейс администратора нажмите "Админ"</p>
                <a class="btn btn-primary btn-lg" href="{{ route('home.index') }}">Админ</a>
            </div>
        </div>
        <div class="card-header">
            <h3 class="card-title">Авторы</h3>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>
        <div class="card-body p-0">
            <table class="table table-striped projects">
                <thead>
                    <tr>
                        <th style="width: 5%">
                            №
                        </th>
                        <th style="width: 40%">
                            ФИО автора
                        </th>
                        <th style="width: 35%">Книги</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($authors as $author)
                        <tr>
                            <td>
                                {{ $author->id }}
                            </td>
                            <td>
                                {{ $author->name }}
                            </td>
                            <td>
                                @foreach ($author->books as $book)
                                    {{ $book->title }}
                                    <br>
                                @endforeach
                            </td>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
@endsection
