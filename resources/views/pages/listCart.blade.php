@extends('layouts.layout')

@section('title') Home @endsection

@section('keywords') phones,online,shop @endsection

@section('description') Shop main page @endsection


@section('content')

<style>
    /* Stil za plavo-bijelu temu */
    body {
        background-color: #f8f9fa;
    }
    .ssa {
        background-color: #fff;
        border-radius: 10px;
        padding: 20px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        margin-top: 50px;
    }
    .btn-remove {
        color: #fff;
        background-color: #007bff;
        border-color: #007bff;
    }
    .btn-remove:hover {
        background-color: #0056b3;
        border-color: #0056b3;
    }
</style>
<div class="container ssa">
    <h1>Korpa</h1>

   <table class="table">
        <thead class="thead-light">
        <tr>
            <th scope="col">Proizvod</th>
            <th scope="col">Cena</th>
            <th scope="col">Ukloni</th>
        </tr>
        </thead>
        <tbody id="cartList">



        </tbody>


   </table>
   <input type="button" class="btn btn-warning" value="Ocisti korpu" id="clearCart">
    <input type="button" class="btn btn-success" value="Naruči!" id="checkCart">
</div>
@endsection
