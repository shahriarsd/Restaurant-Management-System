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



        </div>






    </div>


    @include('Admin.adminscript')
</body>

</html>
