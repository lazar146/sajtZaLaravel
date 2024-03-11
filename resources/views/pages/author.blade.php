@extends('layouts.layout')

@section('title') Home @endsection

@section('keywords') phones,online,shop @endsection

@section('description') Shop main page @endsection


@section('content')
    <style>
        .author-image {
            max-width: 200px;
            border-radius: 50%;
            margin-bottom: 20px;
        }
    </style>
    <div class="container ssa">
        <div class="row gutters">

            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card h-100">
                    <div class="card-body">


                            <div class="row">
                                <div class="col-md-6 offset-md-3 text-center">
                                    <img src="{{asset('assets/images/ja.png')}}" alt="Autor" class="img-fluid author-image">
                                    <h1>Lazar Milošević</h1>
                                    <p class="lead">
                                        Zdravo, zovem se Lazar, treća sam godina na Visokoj ICT školi. Živim u Mladenovcu
                                        i tamo sam završio Tehničkku srednju školu, smer Elektrotehničar Multimedija.</p>
                                </div>
                            </div>

                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
