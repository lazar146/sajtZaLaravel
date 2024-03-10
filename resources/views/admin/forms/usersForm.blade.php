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
                            <form method="POST" action="{{ route('users_dva.update',[$content->id]) }}">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="name">Uloga:</label><br>
                                    <select name="userRole" id="userRole">
                                        @foreach($role as $r)
                                            <option value="{{$r->id}}" {{$r->id == $content->role_id ? 'selected':''}}>{{$r->name}}</option>
                                        @endforeach

                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="name">First Name</label>
                                    <input type="text" class="form-control" id="name" name="name" value="{{  $content->name}}" >
                                </div>

                                <div class="form-group">
                                    <label for="last_name">Last Name</label>
                                    <input type="text" class="form-control" id="last_name" name="last_name" value="{{  $content->last_name}}" >
                                </div>

                                <div class="form-group">
                                    <label for="email">Email Address</label>
                                    <input type="email" class="form-control" id="email" name="email" value="{{  $content->email}}" >
                                </div>

                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" id="password" name="password" >
                                </div>

                                <div class="form-group">
                                    <label for="password_confirmation">Confirm Password</label>
                                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" >
                                </div>

                                <button type="submit" class="btn btn-primary">Izmeni!</button>
                            </form>

                        @else
                            <form method="POST" action="{{ route('users_dva.store') }}">
                                @csrf
                                <div class="form-group">
                                <label for="name">Uloga:</label><br>
                                <select name="userRole" id="userRole">
                                    @foreach($role as $r)
                                        <option value="{{$r->id}}">{{$r->name}}</option>
                                    @endforeach

                                </select>
                                </div>
                                <div class="form-group">
                                    <label for="name">Ime</label>
                                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" >
                                </div>

                                <div class="form-group">
                                    <label for="last_name">Prezime</label>
                                    <input type="text" class="form-control" id="last_name" name="last_name" value="{{ old('last_name') }}" >
                                </div>

                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" >
                                </div>

                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" id="password" name="password" >
                                </div>

                                <div class="form-group">
                                    <label for="password_confirmation">Confirm Password</label>
                                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" >
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
