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
                        <form action="{{ route('images.create')}}">
                        <div class="form-group">
                            <label for="model_id">Odaberi model za unos slike:</label><br>
                            <select name="model_id" id="model_id">
                                @foreach($models as $r)
                                    <option value="{{$r->id}}"}>{{$r->name}}</option>
                                @endforeach

                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Dalje -></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
