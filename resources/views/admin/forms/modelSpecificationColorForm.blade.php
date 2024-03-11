
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
                            <form method="POST" action="{{ route('model_specification_color.update',[$content->id]) }}">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="ms_id">Telefon:</label><br>
                                    <select name="ms_id" id="ms_id">
                                        @foreach($modelSpec as $r)
                                            <option value="{{$r->ms_id}}" {{$r->ms_id == $content->ms_id ? 'selected':''}}>{{$r->modelName}}</option>
                                        @endforeach

                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="color_id">Boja:</label><br>
                                    <select name="color_id" id="color_id">
                                        @foreach($colors as $r)
                                            <option value="{{$r->id}}" {{$r->id == $content->color_id ? 'selected':''}}>{{$r->value}}</option>
                                        @endforeach

                                    </select>
                                </div>

                                <button type="submit" class="btn btn-primary">Izmeni!</button>
                            </form>

                        @else
                            <form method="POST" action="{{ route('model_specification_color.store') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="ms_id">Telefon:</label><br>
                                    <select name="ms_id" id="ms_id">
                                        @foreach($modelSpec as $r)
                                            <option value="{{$r->ms_id}}" >{{$r->modelName}}</option>
                                        @endforeach

                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="color_id">Boja:</label><br>
                                    <select name="color_id" id="color_id">
                                        @foreach($colors as $r)
                                            <option value="{{$r->id}}" >{{$r->value}}</option>
                                        @endforeach

                                    </select>
                                </div>


                                <button type="submit" class="btn btn-primary">Ubaci!</button>
                            </form>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

