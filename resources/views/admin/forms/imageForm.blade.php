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
                        <form method="POST" action="{{ route('images.store')}}" enctype="multipart/form-data">
                            @csrf

                            <input type="hidden" name="model_id" value="{{$model->id}}">
                            <div class="form-group">
                                <label for="images">Odaberi nove slike:</label><br>
                            <input type="file" name="images[]" multiple>
                            </div>
                            <button class="btn btn-primary" type="submit">Otpremi slike</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
