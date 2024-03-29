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
                            <form method="POST" action="{{ route('model_specifications.update',[$content->id]) }}">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="model_id">Model:</label><br>
                                    <select name="model_id" id="model_id">
                                        @foreach($models as $r)
                                            <option value="{{$r->id}}" {{$r->id == $content->model_id ? 'selected':''}}>{{$r->name}}</option>
                                        @endforeach

                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="camera_id">Camera:</label><br>
                                    <select name="camera_id" id="camera_id">
                                        @foreach($camera as $r)
                                            <option value="{{$r->id}}" {{$r->id == $content->camera_id ? 'selected':''}}>{{$r->value}}</option>
                                        @endforeach

                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="memory_id">Memory:</label><br>
                                    <select name="memory_id" id="memory_id">
                                        @foreach($memory as $r)
                                            <option value="{{$r->id}}" {{$r->id == $content->memory_id ? 'selected':''}}>{{$r->value}}</option>
                                        @endforeach

                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="ram_id">Ram:</label><br>
                                    <select name="ram_id" id="ram_id">
                                        @foreach($ram as $r)
                                            <option value="{{$r->id}}" {{$r->id == $content->ram_id ? 'selected':''}}>{{$r->value}}</option>
                                        @endforeach

                                    </select>
                                </div>



                                <button type="submit" class="btn btn-primary">Izmeni!</button>
                            </form>

                        @else
                            <form method="POST" action="{{ route('model_specifications.store') }}">
                                @csrf

                                <div class="form-group">
                                    <label for="model_id">Model:</label><br>
                                    <select name="model_id" id="model_id">
                                        @foreach($models as $r)
                                            <option value="{{$r->id}}">{{$r->name}}</option>
                                        @endforeach

                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="camera_id">Camera:</label><br>
                                    <select name="camera_id" id="camera_id">
                                        @foreach($camera as $r)
                                            <option value="{{$r->id}}">{{$r->value}}mp</option>
                                        @endforeach

                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="memory_id">Memory:</label><br>
                                    <select name="memory_id" id="memory_id">
                                        @foreach($memory as $r)
                                            <option value="{{$r->id}}">{{$r->value}}</option>
                                        @endforeach

                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="ram_id">Ram:</label><br>
                                    <select name="ram_id" id="ram_id">
                                        @foreach($ram as $r)
                                            <option value="{{$r->id}}">{{$r->value}}GB</option>
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
