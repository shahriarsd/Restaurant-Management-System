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


<div style="position: relative; top: 70px; right: -150px;">

<form>
<table bgcolor="gray" border="1px">
    <tr>
        <th style="padding: 30px;">Name</th>
        <th style="padding: 30px;">Email</th>
        <th style="padding: 30px;">Phone</th>
        <th style="padding: 30px;">Guest</th>
        <th style="padding: 30px;">Date</th>
        <th style="padding: 30px;">Time</th>
        <th style="padding: 30px;">Message</th>
        {{-- <th style="padding: 30px;">Action</th> --}}
    </tr>
    @foreach($data as $data)
    <tr align="center">
        <td>{{ $data->name }}</td>
        <td>{{ $data->email }}</td>
        <td>{{ $data->phone }}</td>
        <td>{{ $data->guest }}</td>
        <td>{{ $data->date }}</td>
        <td>{{ $data->time }}</td>
        <td>{{ $data->message }}</td>
        {{-- <td><a href="{{ url('/deletereservation', $data->id) }}">Delete</a></td> --}}
    </tr>
    @endforeach
</form>


</div>



    </div>
    @include('Admin.adminscript')
</body>

</html>
