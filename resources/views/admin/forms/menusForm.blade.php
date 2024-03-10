@extends('admin.layouts.layout')

@section('title')
    AdminHome
@endsection

@section('keywords')
    admin,panel
@endsection

@section('description')
    Admin Panel
@endsection


@section('content')
    <div class="page-container">
        <div class="main-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        @if(!$isNew)
                            <form method="POST" action="{{ route('menus.update', [$content->id]) }}">
                                @csrf
                                @method('PUT')

                                <div class="form-group">
                                    <label for="name">Ime stranice:</label>
                                    <input type="text" id="name" name="name" value="{{ $content->name }}" class="form-control" >
                                </div>
                                <div class="form-group">
                                    <label for="name">Ruta:</label>
                                    <input type="text" id="route" name="route" value="{{ $content->route }}" class="form-control" >
                                </div>
                                <button type="submit" class="btn btn-primary">Ažuriraj!</button>
                            </form>

                        @else
                            <form method="POST" action="{{ route('menus.store') }}">
                                @csrf
                                @method('POST')

                                <div class="form-group">
                                    <label for="name">Ime stranice:</label>
                                    <input type="text" id="name" name="name" value="" class="form-control" >
                                </div>
                                <div class="form-group">
                                    <label for="name">Ruta:</label>
                                    <input type="text" id="route" name="route" value="" class="form-control" >
                                </div>

                                <button type="submit" class="btn btn-primary">Dodaj!</button>
                            </form>

                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
