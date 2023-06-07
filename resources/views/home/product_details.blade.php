<!DOCTYPE html>
<html lang="">
<head>
    <base href="/public">
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="shortcut icon" href="home/images/favicon.png" type="">
    <title>Famms - Fashion HTML Template</title>
    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="home/css/bootstrap.css" />
    <!-- font awesome style -->
    <link href="home/css/font-awesome.min.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="home/css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="home/css/responsive.css" rel="stylesheet" />
</head>
<body>
<div class="hero_area">
    @include('home.header')





</div>


<div class="col-sm-6 col-md-8 >

        <div class="img-box">
            <img src="/product/{{$product->image}}" alt="">

        <div class="detail-box">
            <h5>
                {{$product->title}}
            </h5>
            <h6 >
                {{$product->desc}}
            </h6>
            @if($product->discount_price!=null)
                <h6>


                    {{' $'.$product->discount_price}}
                </h6>

                <h6 style="text-decoration: line-through;" class="text-secondary">
                    {{' $'.$product->price}}
                </h6>
            @else
                <h6>
                    {{' $'.$product->price}}
                </h6>
            @endif



            <h6 >
                {{$product->quantity}}
            </h6>
        </div>

<a href="" class="btn btn-outline-dark">Add to cart</a>
    </div>
</div>


<!-- footer start -->
@include('home.footer')
<!-- footer end -->
<div class="cpy_">
    <p class="mx-auto">© 2021 All Rights Reserved By <a href="https://html.design/">Free Html Templates</a><br>

        Distributed By <a href="https://themewagon.com/" target="_blank">ThemeWagon</a>

    </p>
</div>
<!-- jQery -->
<script src="home/js/jquery-3.4.1.min.js"></script>
<!-- popper js -->
<script src="home/js/popper.min.js"></script>
<!-- bootstrap js -->
<script src="home/js/bootstrap.js"></script>
<!-- custom js -->
<script src="home/js/custom.js"></script>
</body>
</html>
