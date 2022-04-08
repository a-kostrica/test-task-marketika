@extends('layouts.admin_layout')

@section('title', 'Книги')

@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Книги</h3>

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
                            Название книги
                        </th>
                        <th style="width: 35%">Автор</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($books as $book)
                        <tr>
                            <td>
                                {{ $book->id }}
                            </td>
                            <td>
                                {{ $book->title }}
                            </td>
                            <td>
                                {{ $book->author['name'] }}
                            </td>
                            <td>
                                <a class="btn btn-info btn-sm" href="{{ route('book.edit', $book->id) }}">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    Редактировать
                                </a>
                                <form action="{{ route('book.destroy', $book->id) }}" method="POST"
                                    style="display: inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">
                                        <i class="fas fa-trash">
                                        </i>
                                        Удалить
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
