<x-app-layout>



</x-app-layout>


<!DOCTYPE html>
<html lang="en">

<head>
    @include('Admin.admincss')
</head>

<body>
    <div class="container-scroller">



        @include('Admin.navbar')

        <h1>Customers Orders</h1>

        
            <table>

            <tr align="center">

                <td style="padding: 20px;">Name</td>
                <td style="padding: 20px;">Phone</td>
                <td style="padding: 20px;">Address</td>
                <td style="padding: 20px;">Food Name</td>
                <td style="padding: 20px;">Price</td>
                <td style="padding: 20px;">Quantity</td>
                <td style="padding: 20px;">Total Price</td>


            </tr>

            @foreach($data as $data)

            <tr align="center" style="background-color: black;">

                <td>{{ $data->name }}</td>
                <td>{{ $data->phone }}</td>
                <td>{{ $data->address }}</td>
                <td>{{ $data->foodname }}</td>
                <td>{{ $data->price }}$</td>
                <td>{{ $data->quantity }}</td>
                <td>{{ $data->price * $data->quantity }}$</td>


            </tr>

            @endforeach

        </table>





    </div>
    @include('Admin.adminscript')
</body>

</html>
