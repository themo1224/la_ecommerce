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
        <div class="content-wrapper">

            @if(session()->has('message'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true" >x</button>
                    {{session()->get('message')}}
                </div>
            @endif

            <div>
                <h2 class="text-center display-4">add category</h2>
                <form action="{{url('/add_category')}}" method="POST">
                    @csrf
                    <input type="text" name="category" class="form-control" placeholder="write ">
                    <input type="submit" class=" mt-3 text-center btn btn-outline-light" value="submit category">

                </form>

            </div>
                <table class="table table-striped table-dark mt-5">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Category Name</th>
                        <th scope="col">Action</th>

                    </tr>
                    </thead>
                    @foreach($data as $data)
                    <tbody>
                    <tr>
                        <th scope="row">{{$data->id}}</th>
                        <td>{{$data->category_name}}</td>
                        <td><a href="{{url('delete_category',$data->id)}}" class="btn btn btn-danger p-2" onclick="return confirm('Are you sure you want to delete {{$data->category_name}} category?')">Delete</a></td>
                    </tr>

                    </tbody>
                    @endforeach
                </table>
        </div>
    </div>
    @include('admin.scripts')
</body>
</html>

