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
    <div class="main-panel">
        <div class="content-wrapper ">
            @if(session()->has('message'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true" >x</button>
                    {{session()->get('message')}}
                </div>
            @endif

            <div class="">
                <h2 class="display-4 text-center py-5"> Add Product</h2>
                <form action="{{url('/add_product')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="py-2">
                        <lable >Product Title:</lable>
                        <input type="text"  name="title"  class="form-control  bg-dark" id="" placeholder="title" required>
                    </div>

                    <div class="py-2">
                        <lable >Product Description:</lable>
                        <input type="text" name="desc"  class="form-control  bg-dark"  id="" placeholder="write desc"  required>
                    </div>
                    <div class="my-2">
                        <lable >Product Image:</lable>
                        <input type="file" name="image"  class="form-control  bg-dark" id="" placeholder="title" >
                    </div>
                    <div class="my-2">
                        <lable >Product Category:</lable>
                        <select class="bg-dark" name="category" id="" required>
                            <option value="" selected="">select category</option>
                            @foreach($category as $category)
                                <option value="{{$category->category_name}}">{{$category->category_name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="my-2">
                        <lable >Product Quantity:</lable>
                        <input type="number" name="quantity" min="0"  class="form-control  bg-dark" id="" placeholder="write quantity" required>
                    </div>
                    <div class="my-2">
                        <lable >Product Price :</lable>
                        <input type="number" name="price"  class="form-control  bg-dark" id="" placeholder="write price" required>
                    </div>
                    <div class="my-2">
                        <lable >Product Discount:</lable>
                        <input type="number" name="discount"  class="form-control bg-dark" id="" placeholder="title" >
                    </div>
                    <div>
                        <input type="submit" value="add product" class="bg-dark p-2 border-e-emerald-500">
                    </div>
                </form>








            </div>
        </div>
    </div>
@include('admin.scripts')
</body>
</html>

