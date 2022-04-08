@extends('layouts.admin_layout')

@section('title', 'Главная')

@section('content')
    <div class="p-5 mb-4 bg-light rounded-3">
        <div class="container-fluid py-5">
            <h1 class="display-5 fw-bold">Внимание</h1>
            <p class="col-md-8 fs-4">Так как задания написать регистрацию, авторизацию и доступ к ресурсам сайта по
                ролям не было, то чтобы
                попасть
                в
                интерфейс пользователя нажмите "Пользователь"</p>
            <a class="btn btn-primary btn-lg" href="{{ route('home') }}">Пользователь</a>
        @endsection
