@extends('layouts.layout')

@section('title') Home @endsection

@section('keywords') phones,online,shop @endsection

@section('description') Shop main page @endsection


@section('content')

    <style>
        /* Prilagođeni CSS za stranicu */
        body {
            background-color: #f8f9fa;
            color: #212529;
            font-family: Arial, sans-serif;
        }

        .product-container {
            margin-top: 50px;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .product-img {
            max-width: 100%;
            height: auto;

        }

        .thumbnail-img {
            max-width: 100px;
            height: auto;
        }

        .product-details {
            padding-left: 20px;
        }

        .product-title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .product-description {
            margin-bottom: 20px;
        }

        .product-meta h5 {
            margin-bottom: 10px;
        }

        .product-price {
            font-size: 18px;
            font-weight: bold;
            color: #dc3545; /* Dodatna boja */
        }

        .add-to-cart-btn {
            background-color: #dc3545;
            color: #fff;
            border: none;
            padding: 10px 20px;
            font-size: 18px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .add-to-cart-btn:hover {
            background-color: #c82333;
        }
        .pro-img-list {
            display: flex;
            flex-wrap: nowrap;
            @if(count($productImages) > 5)
            flex-wrap: wrap;
            @endif
            justify-content: center;
            width: 100%;
        }

        .pro-img-list a {
            flex: 0 0 100px;
            margin-right: 10px;
            margin-bottom: 10px;
        }

        .pro-img-list a:last-child {
            margin-right: 0;
        }

        .thumbnail-img {
            width: 100%;
            height: auto;
            border-radius: 10px;
        }
        #mainImage{
            border-radius: 10px;
        }
        .overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.9);
            display: none;
            justify-content: center;
            align-items: center;
            z-index: 9999;
        }

        .overlay img {
            max-width: 90%;
            max-height: 90%;
            cursor: zoom-out;
        }
    </style>
    </head>
    <body>
    <div class="container product-container" id="scroluj">
        <div class="row">
            <div class="col-md-6">
                <div id="overlay" class="overlay" onclick="hideOverlay()">
                    <img id="largeImage" src="{{asset('assets/images/'.$productImages[0]->name.'/'.$productImages[0]->date_of_delivery.'/'.$productImages[0]->image_name.'.jpg')}}" alt="">
                </div>
                <div class="product-img">
                    <img id="mainImage" src="{{asset('assets/images/'.$productImages[0]->name.'/'.$productImages[0]->date_of_delivery.'/'.$productImages[0]->image_name.'.jpg')}}" alt="" onclick="showOverlay()" class="img-fluid">
                </div>

                <div class="pro-img-list my-3">



                    @foreach($productImages as $img)
                        <a href="#" onclick="changeImage('{{asset('assets/images/'.$img->name.'/'.$img->date_of_delivery.'/'.$img->image_name.'.jpg')}}'); scrollToSection('#scroluj')">
                            <img class="thumbnail-img" src="{{asset('assets/images/'.$img->name.'/'.$img->date_of_delivery.'/'.$img->image_name.'.jpg')}}" alt="">
                        </a>
                    @endforeach
                </div>

            </div>
            <div class="col-md-6 product-details text-center">
                <h2>{{$product[0]->brandName}} </h2>
                <h4 class="product-title">
                    {{$product[0]->modelName}}
                </h4>
                <p class="product-description">
                    {{$product[0]->description}}
                </p>
                <div class="mt-lg-5 mb-lg-5">
                <div class="product-meta">
                    <h5><strong>RAM:</strong> {{$product[0]->ram}}GB</h5>
                    <h5><strong>Camera:</strong> {{$product[0]->camera}}mp</h5>
                    <h5><strong>Memory:</strong> {{$product[0]->memory}}</h5>
                </div>
                <div class="product-price">
                    <strong>Price:</strong> ${{$product[0]->price}}
                    <strong>{{$product[0]->old_price != 0 ? 'Old Price:': ''}}</strong><s>{{$product[0]->old_price != 0 ? '$'.$product[0]->old_price: ''}}</s>
                </div>
            </div>
                <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                <input type="button" id="addCart" data-id="{{$product[0]->model_id}}" value="Add to cart" class="button btn" />
                </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')


@endsection
