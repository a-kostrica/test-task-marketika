@extends('layouts.admin_layout')

@section('title', 'Авторы')

@section('content')
    <div class="card card-primary">
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
                        <th></th>
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
                                {{ $books->where('author_id', '=', $author->id)->count() }}
                            </td>
                            <td>
                                <a class="btn btn-info btn-sm" href="{{ route('author.edit', $author->id) }}">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    Редактировать
                                </a>
                                <form action="{{ route('author.destroy', $author->id) }}" method="POST"
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
