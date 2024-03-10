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
                            <form method="POST" action="{{ route('models.update',[$content->id]) }}">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="name">Naziv:</label>
                                    <input type="text" class="form-control" id="name" name="name" value="{{$content->name}}" >
                                </div>
                                <div class="form-group">
                                    <label for="date">Datum preuzimanja:</label>
                                    <input type="date" id="date" value="{{$content->date_of_delivery}}" name="date" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="name">Brend:</label><br>
                                    <select name="brand" id="brand">
                                        @foreach($brands as $r)
                                            <option value="{{$r->id}}" {{$r->id == $content->brand_id ? 'selected':''}}>{{$r->name}}</option>
                                        @endforeach

                                    </select>
                                </div>

                                <button type="submit" class="btn btn-primary">Izmeni!</button>
                            </form>

                        @else
                            <form method="POST" action="{{ route('models.store') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="name">Naziv:</label>
                                    <input type="text" class="form-control" id="name" name="name" value="" >
                                </div>
                                <div class="form-group">
                                    <label for="date">Datum preuzimanja:</label>
                                    <input type="date" name="date" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="name">Brend:</label><br>
                                    <select name="brand" id="brand">
                                        @foreach($brands as $r)
                                            <option value="{{$r->id}}">{{$r->name}}</option>
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
