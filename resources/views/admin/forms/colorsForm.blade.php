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
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        @if(!$isNew)
                            <form method="POST" action="{{ route('colors.update', [$content->id]) }}">
                                @csrf
                                @method('PUT')

                                <div class="form-group">
                                    <label for="name">Boja:</label>
                                    <input type="text" id="value" name="value" value="{{ $content->value }}" class="form-control" >
                                </div>

                                <button type="submit" class="btn btn-primary">Ažuriraj boju</button>
                            </form>

                        @else
                            <form method="POST" action="{{ route('colors.store') }}">
                                @csrf
                                @method('POST')

                                <div class="form-group">
                                    <label for="name">Nova boja:</label>
                                    <input type="text" id="value" name="value" value="" class="form-control" >
                                </div>

                                <button type="submit" class="btn btn-primary">Dodaj boju</button>
                            </form>

                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
