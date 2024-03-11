@extends('layouts.layout')

@section('title') Home @endsection

@section('keywords') phones,online,shop @endsection

@section('description') Shop main page @endsection


@section('content')

    <style>
        body {
            margin: 0;
            padding-top: 40px;
            color: #2e323c;
            background: #f5f6fa;
            position: relative;
            height: 100%;
        }
        .ssa {
            background-color: #fff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 50px;
        }
        .account-settings .user-profile {
            margin: 0 0 1rem 0;
            padding-bottom: 1rem;
            text-align: center;
        }
        .account-settings .user-profile .user-avatar {
            margin: 0 0 1rem 0;
        }
        .account-settings .user-profile .user-avatar img {
            width: 90px;
            height: 90px;
            -webkit-border-radius: 100px;
            -moz-border-radius: 100px;
            border-radius: 100px;
        }
        .account-settings .user-profile h5.user-name {
            margin: 0 0 0.5rem 0;
        }
        .account-settings .user-profile h6.user-email {
            margin: 0;
            font-size: 0.8rem;
            font-weight: 400;
            color: #9fa8b9;
        }
        .account-settings .about {
            margin: 2rem 0 0 0;
            text-align: center;
        }
        .account-settings .about h5 {
            margin: 0 0 15px 0;
            color: #007ae1;
        }
        .account-settings .about p {
            font-size: 0.825rem;
        }
        .form-control {
            border: 1px solid #cfd1d8;
            -webkit-border-radius: 2px;
            -moz-border-radius: 2px;
            border-radius: 2px;
            font-size: .825rem;
            background: #ffffff;
            color: #2e323c;
        }

        .card {
            background: #ffffff;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            border-radius: 5px;
            border: 0;
            margin-bottom: 1rem;
        }
        .user-profile{
            padding-top: 50%;
        }
    </style>
    <div class="container ssa">
        <div class="row gutters">

            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="row gutters">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <h6 class="mb-2 text-primary">Lični podaci</h6>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label for="fullName">Ime</label>
                                    <input type="text" class="form-control" id="fullName" value="{{$user->name}}">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label for="website">Prezime</label>
                                    <input type="url" class="form-control" id="last_name" value="{{$user->last_name}}" >
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label for="eMail">Email</label>
                                    <input type="email" disabled class="form-control" id="email" value="{{$user->email}}"  placeholder="Enter email ID">
                                </div>
                            </div>


                        </div>
                        <div class="row gutters">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="text-right">
                                    <button class="btn btn-warning" id="changepass" >Change password</button>
                                    <button type="button" id="submit" name="submit" class="btn btn-secondary">Cancel</button>
                                    <button type="button" id="submit" name="submit" class="btn btn-primary">Update</button>


                                </div>
                            </div>
                        </div>
                        <div class="row gutters">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <h6 class="mt-3 mb-2 text-primary">Lista kupovina </h6>
                            </div>
                            <div class="table-responsive" style="max-height: 300px; overflow-y: auto;">
                                <table class="table table-striped">
                                    <thead class="thead-dark">
                                    <tr>
                                        <th>Model</th>
                                        <th>Datum Kupovine</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($cek as $purchase)
                                        <tr>
                                            <td>{{ $purchase->modelName }}</td>
                                            <td>{{ $purchase->buyDate }}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
