<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.css')

    <style type="text/css">
        .title
        {
            color: white; 
            padding-top: 25px; 
            font-size: 25px; 
        }
        label
        {
            display: inline-block;
            width: 10%;
        }
    </style>
</head>

<body>
    @include('admin.sidebar')
        <!-- partial -->
        @include('admin.navbar')
            <!-- partial -->
            <div class="container-fluid page-body-wrapper">
                <div class="container" align = "center">

                <h1 class="title">Add Product</h1>

                    @if(session()->has('message'))
                        <div class="alert alert-success">

                        <button style="button" class="close" data-dismis="alert"></button>
                        {{ session()-> get('message') }}

                        </div>
                    @endif

                <form action="{{url('uploadproduct')}}" method="post" enctype="multipart/form-data">

                    @csrf

                    <div style="padding: 15px;">
                        <label>Product title</label>
                        <input style="color: black"  type="text" name="title" placeholder="Give a product title" required=""/>
                    </div>

                    <div style="padding: 15px;">
                        <label>Price</label>
                        <input style="color: black" type="number" name="price" placeholder="Give a product price" required=""/>
                    </div>

                    <div style="padding: 15px;">
                        <label>Description</label>
                        <input style="color: black" type="text" name="description" placeholder="Give a product description" required=""/>
                    </div>

                    <div style="padding: 15px;">
                        <label>Quantity</label>
                        <input style="color: black" type="number" name="quantity" placeholder="Give a product quantity" required=""/>
                    </div>

                    <div style="padding: 15px;">
                        {{-- <label>Product title</label> --}}
                        <input type="file" name="file"/>
                    </div>

                    <div style="padding: 15px;">
                        <input class="btn btn-success" type="submit" />
                    </div>


                </form>

                </div>
            </div>
                <!-- partial -->
            </div>
            @include('admin.script')
    <!-- End custom js for this page -->
</body>

</html>
