@extends('layouts.layout')

@section('title') Home @endsection

@section('keywords') phones,online,shop @endsection

@section('description') Shop main page @endsection


@section('content')

{{--{{dd($proizvodi)}};--}}
    <div class="product-sec1 px-sm-4 px-3 py-sm-5  py-3 mb-4">
        <h3 class="heading-tittle text-center font-italic">Novo pristigli modeli</h3>
        <div class="row">
            @foreach($products as $index => $product)



                <div class="col-md-4 product-men mt-md-0 mt-5" >
                    <div class="men-pro-item simpleCart_shelfItem">
                        <div class="men-thumb-item text-center">
                            <div class="product-images">
                                <img src="{{asset('assets/images/'.$product->name.'/'.$product->date_of_delivery.'/'.$product->image_name.'.jpg')}}" alt="">
                            </div>
                            <div class="men-cart-pro">
                                <div class="inner-men-cart-pro">
                                    <a href="{{route('productsSingle',['id'=>$product->model_id])}}" class="link-product-add-cart">Saznaj Više!</a>
                                </div>
                            </div>
                        </div>
                        <div class="item-info-product text-center border-top mt-4">
                            <h4 class="pt-1">
                                <strong>{{$product->name}}</strong>
                            </h4>
                            <div class="info-product-price my-2">
                                <span class="item_price">${{$product->price}}</span>
                                <del>{{$product->old_price != 0 ? '$'.$product->old_price: ''}}</del>
                            </div>
                            <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">


                                <input type="button" id="addCart" data-id="{{$product->model_id}}" value="Add to cart" class="button btn" />


                            </div>

                        </div>
                    </div>
                </div>
            @endforeach



    </div>


@endsection
