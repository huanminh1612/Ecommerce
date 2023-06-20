<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.css')
</head>

<body>
    @include('admin.sidebar')
        <!-- partial -->
        @include('admin.navbar')
            <!-- partial -->
            
            <div class="container-fluid page-body-wrapper">
                <div class="container" align = "center">

                    <table>
                        <tr style="background-color: grey">
                            <td style="padding: 20px; ">Customer Name</td>
                            <td style="padding: 20px; ">Phone</td>
                            <td style="padding: 20px; ">Address</td>
                            <td style="padding: 20px; ">Product Title</td>
                            <td style="padding: 20px; ">Price</td>
                            <td style="padding: 20px; ">Quantity</td>
                            <td style="padding: 20px; ">Status</td>
                            <td style="padding: 20px; ">Action</td>
                        </tr>

                        @foreach ($order as $orders)
                        
                        <tr align="center" style="background-color:black;">
                            <td>{{ $orders->name }}</td>
                            <td>{{ $orders->phone }}</td>
                            <td>{{ $orders->address }}</td>
                            <td>{{ $orders->product_name }}</td>
                            <td>{{ $orders->price }}</td>
                            <td>{{ $orders->quantity }}</td>
                            <td>{{ $orders->status }}</td>
                            <td><a class="btn btn-success" href="">Delivered</a></td>
                        </tr>

                        @endforeach
                    </table>

                </div>
            </div>

                <!-- partial -->
            </div>
            @include('admin.script')
    <!-- End custom js for this page -->
</body>

</html>
