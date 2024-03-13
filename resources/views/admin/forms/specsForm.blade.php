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
                            <form method="POST" action="{{ route($tableName.'_specs.update', [$content->id]) }}">
                                @csrf
                                @method('PUT')

                                <div class="form-group">
                                    <label for="name">Vrednost:</label>
                                    <input type="text" id="value" name="value" value="{{ $content->value }}" class="form-control" >
                                </div>

                                <button type="submit" class="btn btn-primary">Ažuriraj Specifikaciju</button>
                            </form>

                        @else
                            <form method="POST" action="{{ route($tableName.'_specs.store') }}">
                                @csrf
                                @method('POST')

                                <div class="form-group">
                                    <label for="name">Nova vrednost:</label>
                                    <input type="text" id="value" name="value" value="" class="form-control" >
                                </div>

                                <button type="submit" class="btn btn-primary">Dodaj specifikaciju</button>
                            </form>

                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
