@extends('layouts.layout')

@section('title') Contact @endsection

@section('keywords') phones,online,shop @endsection

@section('description') Shop contact page @endsection


@section('content')
    <style>
        body {
            background-color: #f8f9fa;
        }
        .form-container {
            max-width: 400px;
            margin: auto;
            margin-top: 20px;
            padding: 20px;
            border: 1px solid #dee2e6;
            border-radius: 5px;
            background-color: #ffffff;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
    </style>
    <div class="container mt-5">
    <form action="{{route('sendEmail')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="email">E-mail:</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>
        <div class="form-group">
            <label for="message">Poruka:</label>
            <textarea class="form-control" id="message" name="message"></textarea>
        </div>
        <button type="submit" onclick="toastr.success('Mail Adminu je uspešno poslat!')" class="btn btn-primary">Pošalji</button>
    </form>
    </div>


@endsection
