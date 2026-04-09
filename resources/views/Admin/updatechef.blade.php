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


        <form action="{{ url('/updatefoodchef',$data->id) }}" method="POST" enctype="multipart/form-data">
            @csrf

        <div>
            <label>Chef Name</label>
            <input style="color:blue" type="text" name="name" value="{{ $data->name }}">
        </div>


        <div>
            <label>Chef Speciality</label>
            <input style="color:blue" type="text" name="speciality" value="{{ $data->speciality }}">
        </div>

        <div>
            <label>Old Image</label>

            <img height="200" width="200" src="/chefimage/{{ $data->image }}">
        </div>

        <div>
            <label>New Image</label>
            <input type="file" name="image">
        </div>

        <div>
            <input style="color:blue" type="submit" value="Update Chef" class="btn btn-primary" required="">
        </div>


        </form>


    </div>
    @include('Admin.adminscript')
</body>

</html>
