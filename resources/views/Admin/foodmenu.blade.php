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

        <div style="position: relative; top: 60px; right: -150px;">


            <form action="{{ url('/uploadfood') }}" method="post" enctype="multipart/form-data">

                @csrf

                <div>
                    <label>Title</label>
                    <input style="color:blue" type="text" name="title" placeholder="Write a title" required>
                </div>

                <div>
                    <label>Price</label>
                    <input style="color:blue" type="number" name="price" placeholder=" price" required>
                </div>

                <div>
                    <label>Image</label>
                    <input style="color:blue" type="file" name="image" placeholder="Upload an image" required>
                </div>

                <div>
                    <label>Description</label>
                    <input style="color:blue" type="text" name="description" placeholder="Write a description"
                        required>
                </div>

                <div style="color:blue">
                    <input type="submit" value="Save">
                </div>


            </form>



<div>

<table bgcolor="black">
    <tr>
        <th style="padding:30px">Food Name</th>
        <th style="padding:30px">Price</th>
        <th style="padding:30px">Description</th>
        <th style="padding:30px">Image</th>
        <th style="padding:30px">Action</th>
        <th style="padding:30px">Action2</th>

    </tr>

@foreach($data as $data)
<tr align ="center">
    <td>{{ $data->title }}</td>
    <td>{{ $data->price }}</td>
    <td>{{ $data->description }}</td>
    <td><img src="/foodimage/{{ $data->image }}" width="100" height="100"></td>
    <td><a href="{{ url('/deletemenu', $data->id) }}">Delete</a></td>
    <td><a href="{{ url('/updateview', $data->id) }}">Update</a></td>

</tr>
@endforeach

</table>

</div>



        </div>






    </div>


    @include('Admin.adminscript')
</body>

</html>
