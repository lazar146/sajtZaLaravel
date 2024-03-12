@extends('admin.layouts.layout')

@section('title') AdminHome @endsection

@section('keywords') admin,panel @endsection

@section('description') Admin Panel @endsection


@section('content')

<div class="page-wrapper">

    <div class="page-container">

        <div class="main-content">
            <div class="section__content section__content--p30">
                <div class="container-fluid">
                    <div class="row">
                        <h2 class="title-1">overview</h2>
                        <div class="col-md-12">
                            <div class="overview-wrap">

                                <table class="table">
                                    <thead>
                                    <tr>


                                        <th>Korisnik ID</th>
                                        <th>Korisnik</th>
                                        <th>Vrednost</th>
                                        <th>Desilo se</th>


                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($logs as $log)
                                        <tr>
                                            <td>{{ $log->user_id }}</td>
                                            <td>{{ $log->user_name}}</td>
                                            <td>{{ $log->log }}</td>
                                            <td>{{ $log->desiloSe }}</td>


                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>


                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="copyright">
                                <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection
