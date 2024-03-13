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
                            <form method="POST" action="{{ route('price.update', [$content->id]) }}">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="msc_id">Telefon:</label><br>
                                    <select name="msc_id" id="msc_id">
                                        @foreach($msc as $m)
                                            <option value="{{$m->mscId}}" {{$content->msc_id == $m->mscId ? 'selected':''}} >{{$m->modelName}}</option>
                                        @endforeach

                                    </select>

                                </div>

                                <div class="form-group">
                                    <label for="name">Cena:</label>
                                    <input type="text" id="price" name="price" value="{{ $content->price }}" class="form-control" >
                                </div>
                                <div class="form-group">
                                    <label for="name">Stara cena:</label>
                                    <input type="text" id="oldPrice" name="oldPrice" value="{{ $content->old_price }}" class="form-control" >
                                </div>
                                <button type="submit" class="btn btn-primary">Ažuriraj!</button>
                            </form>

                        @else
                            <form method="POST" action="{{ route('price.store') }}">
                                @csrf
                                @method('POST')

                                <div class="form-group">
                                    <select name="msc_id" id="msc_id">
                                        @foreach($msc as $m)
                                            <option value="{{$m->mscId}}">{{$m->modelName}}</option>
                                        @endforeach

                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="name">Price:</label>
                                    <input type="text" id="price" name="price" value="" class="form-control" >
                                </div>
                                <div class="form-group">
                                    <label for="name">Old price:</label>
                                    <input type="text" id="oldPrice" name="oldPrice" value="" class="form-control" >
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
