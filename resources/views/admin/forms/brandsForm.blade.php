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
                            <form method="POST" action="{{ route('brands.update', [$content->id]) }}">
                                @csrf
                                @method('PUT')

                                <div class="form-group">
                                    <label for="name">Naziv brenda:</label>
                                    <input type="text" id="name" name="name" value="{{ $content->name }}" class="form-control" >
                                </div>

                                <button type="submit" class="btn btn-primary">Ažuriraj brend</button>
                            </form>

                        @else
                            <form method="POST" action="{{ route('brands.store') }}">
                                @csrf
                                @method('POST')

                                <div class="form-group">
                                    <label for="name">Naziv brenda:</label>
                                    <input type="text" id="name" name="name" value="" class="form-control" >
                                </div>

                                <button type="submit" class="btn btn-primary">Dodaj brend</button>
                            </form>

                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
