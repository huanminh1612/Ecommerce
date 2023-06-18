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
        <div class="container" align="center">

            @if (session()->has('message'))
                <div class="alert alert-success">

                    <button style="button" class="close" data-dismis="alert"></button>
                    {{ session()->get('message') }}

                </div>
            @endif

            <table>
                <tr style="background-color: grey">
                    <td style="padding: 20px">Title</td>
                    <td style="padding: 20px">Description</td>
                    <td style="padding: 20px">Quantity</td>
                    <td style="padding: 20px">Price</td>
                    <td style="padding: 20px">Image</td>
                    <td style="padding: 20px">Update</td>
                    <td style="padding: 20px">Dalete</td>
                </tr>

                @foreach ($data as $product)
                    <tr align="center" style="background-color:black; align-item:center">
                        <td>{{ $product->title }}</td>
                        <td>{{ $product->description }}</td>
                        <td>{{ $product->quantity }}</td>
                        <td>{{ $product->price }}</td>
                        <td>
                            <img height="70%" width="50%" src="/productimage/{{ $product->image }}" />
                        </td>

                        <td>
                            <a class="btn btn-primary" href="{{ url('updateview', $product->id) }}">Update</a>
                        </td>

                        <td>
                            <a class="btn btn-danger" href="{{ url('deleteproduct', $product->id) }}">Delete</a>
                        </td>
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
