<x-app-layout>



</x-app-layout>


<!DOCTYPE html>
<html lang="en">

<head>

    <base href="/public">

    @include('Admin.admincss')
</head>

<body>
    <div class="container-scroller">



        @include('Admin.navbar')

         <div style="position: relative; top: 60px; right: -150px;">


            <form action="{{ url('/update',$data->id)}}" method="post" enctype="multipart/form-data">

                @csrf

                <div>
                    <label>Title</label>
                    <input style="color:blue" type="text" name="title" value="{{ $data->title }}" required>
                </div>

                <div>
                    <label>Price</label>
                    <input style="color:blue" type="number" name="price" value="{{ $data->price }}" required>
                </div>



                <div>
                    <label>Description</label>
                    <input style="color:blue" type="text" name="description" value="{{ $data->description }}"
                        required>
                </div>


                <div>
                    <label>Old Image</label>
                    <img src="/foodimage/{{ $data->image }}" width="100" height="100">
                </div>

                <div>
                    <label>New Image</label>
                    <input  type="file" name="image"  required>
                </div>

                <div style="color:blue">
                    <input type="submit" value="Save">
                </div>


            </form>

    </div>
    @include('Admin.adminscript')
</body>

</html>
