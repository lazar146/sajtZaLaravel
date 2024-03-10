@extends('layouts.layout')

@section('title') Products @endsection

@section('keywords') phones,online,shop @endsection

@section('description') Shop products page @endsection


@section('content')



    <div class="ads-grid py-sm-5 py-4">
        <div class="container py-xl-4 py-lg-2">
            <!-- tittle heading -->
            <h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
                <span>N</span>aša

                <span>P</span>onuda</h3>
            <!-- //tittle heading -->



            <div class="row">
                <!-- product left -->
                <div class="agileinfo-ads-display col-lg-9">
                    <div class="wrapper">


                        <!-- first section -->
                        <div class="product-sec1 px-sm-4 px-3 py-sm-5  py-3 mb-4">
                            <div class="row">
                                @if($products->count() == 0)
                                    <h3 class="tittle-w3l text-center" >
                                        <span>N</span>ema

                                        <span>P</span>roizvoda</h3>
                                @endif
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
                            <div class="pagination-container">
                                {{ $products->links() }}
                            </div>
                        </div>

                        <!-- //first section -->

                    </div>
                </div>
                <!-- //product left -->
                <!-- product right -->
                <div class="col-lg-3 mt-lg-0 mt-4 p-lg-0">
                    <div class="side-bar p-sm-4 p-3">
                        <form action="{{ route('products') }}" method="GET">
                            <button class="btn btn-success" type="submit">Filtritaj</button>
                            <a class="btn btn-danger" href="{{route('products')}}">Resetuj</a>

                        <div class="search-hotel border-bottom py-2">

                            <h3 class="agileits-sear-head mb-3">Brand</h3>
{{--                            <form action="#" method="post">--}}
{{--                                <input type="search" placeholder="Search Brand..." name="search" required="">--}}
{{--                                <input type="submit" value=" ">--}}
{{--                            </form>--}}
                            <div class="left-side py-2">
                                <ul>
                                    @foreach($brands as $brand)

                                        <li>
                                            <input type="checkbox" name="brand[]" value="{{$brand->id}}"

                                            @if(request()->input('brand'))
                                                @foreach(request()->input('brand') as $c)
                                                    @if($c == $brand->id)
                                                        checked
                                                    @endif
                                                @endforeach
                                            @endif

                                            >
                                            <span class="span">{{$brand->name}}</span>
                                        </li>

                                    @endforeach


                                </ul>
                            </div>
                        </div>
                        <div class="left-side border-bottom py-2">
                            <h3 class="agileits-sear-head mb-3">Ram</h3>
                            <ul>
                                @foreach($ram as $r)

                                    <li>
                                        <input type="checkbox" name="ram[]" value="{{$r->id}}"

                                               @if(request()->input('ram'))
                                                   @foreach(request()->input('ram') as $c)
                                                       @if($c == $r->id)
                                                           checked
                                                        @endif
                                                  @endforeach
                                               @endif
                                        >
                                        <span class="span">{{$r->value}}GB</span>
                                    </li>

                                @endforeach
                            </ul>
                        </div>
                        <div class="left-side border-bottom py-2">
                            <h3 class="agileits-sear-head mb-3">Camera</h3>
                            <ul>
                                @foreach($camera as $c)

                                    <li>
                                        <input type="checkbox" name="camera[]" value="{{$c->id}}"

                                               @if(request()->input('camera'))
                                                   @foreach(request()->input('camera') as $cc)
                                                       @if($cc == $c->id)
                                                           checked
                                                        @endif
                                                  @endforeach
                                            @endif
                                        >
                                        <span class="span">{{$c->value}}mp</span>
                                    </li>

                                @endforeach
                            </ul>
                        </div>
                        <div class="left-side border-bottom py-2">
                            <h3 class="agileits-sear-head mb-3">Memory</h3>
                            <ul>
                                @foreach($memory as $m)

                                    <li>
                                        <input type="checkbox" name="memory[]" value="{{$m->id}}"
                                               @if(request()->input('memory'))
                                                   @foreach(request()->input('memory') as $c)
                                                       @if($c == $m->id)
                                                           checked
                                                        @endif
                                                  @endforeach
                                               @endif


                                        >
                                        <span class="span">{{$m->value}}</span>
                                    </li>

                                @endforeach
                            </ul>
                        </div>


                        </form>
                    </div>
                    <!-- //product right -->
                </div>
            </div>
        </div>
    </div>
    <!-- //top products -->

    <!-- middle section -->



@endsection
