<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    @include('admin.css')
</head>
<body>
<div class="container-scroller">
    <!-- partial:partials/_sidebar.html -->
    @include('admin.sidebar')
    <!-- partial -->
    @include('admin.navbar')
    <!-- partial -->
    <div class="main-panel  ">
        <div class="content-wrapper ">
            @if(session()->has('message'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true" >x</button>
                    {{session()->get('message')}}
                </div>
            @endif
            <h2 class="text-center  display-4">Show Product</h2>
            <div class=" d-flex justify-content-around" >
                <table class="table w-75 table-dark mt-5" >

                    <thead class="">
                    <tr>
                        <th >Product ID</th>
                        <th>Product Name</th>
                        <th >Product Description</th>
                        <th >Product Image</th>
                        <th >Product Category</th>
                        <th >Product Price</th>
                        <th >Product Discount Price</th>
                        <th >Product Quantity</th>
                        <th >delete</th>
                        <th >update</th>

                    </tr>
                    </thead>

                    <tbody>
                    @foreach($product as $product)
                        <tr>
                            <th >{{$product->id}}</th>
                            <td>{{$product->title}}</td>
                            <td>{{$product->desc}}</td>
                            <td>
                                <img src="/product/{{$product->image}}" class="w-75 h-75" alt="ax">
                            </td>
                            <td>{{$product->category}}</td>
                            <td>{{$product->price}}</td>
                            <td>{{$product->discount_price}}</td>
                            <td>{{$product->quantity}}</td>
                            <td>
                                <a href="{{url('delete_product', $product->id)}}" onclick="return confirm('Are You Sure To Delete This Product?')" class="btn btn btn-danger">Delete</a>
                            </td>
                            <td>
                                <a href="{{url('update_product', $product->id)}}" class="btn btn btn-primary">update</a>
                            </td>

                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
@include('admin.scripts')
</body>
</html>

