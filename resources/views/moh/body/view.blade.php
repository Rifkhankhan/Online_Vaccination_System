@extends('moh.home')

@section('moh')
<a href="{{route('moh.home')}}" class='btn btn-primary'>Back</a><br>
<div class="container">
    <table class="table">
            <tr><th>User Name : </th><td>{{$lists->user_name}}</td></tr>
            <tr><th>Nic : </th><td>{{$lists->nic}}</td></tr>
            <tr><th>First Name : </th><td>{{$lists->first_name}}</td></tr>
            <tr><th>Last Name : </th><td>{{$lists->last_name}}</td></tr>
            <tr><th>Address : </th><td>{{$lists->address}}</td></tr>
            <tr><th>Mobile No : </th><td>{{$lists->mobile}}</td></tr>
            <tr><th>Email : </th><td>{{$lists->email}}</td></tr>
            <tr><th>Age : </th><td>{{$lists->age}}</td></tr>
            <tr><th>Genter : </th><td>{{$lists->genter}}</td></tr>
            <tr><th>Moh : </th><td>{{$lists->moh}}</td></tr>
            <tr><th>Date of Birth : </th><td>{{$lists->DOB}}</td></tr>
            <tr><th>District : </th><td>{{$lists->district}}</td></tr>
            <tr><th>Status : </th><td>{{$lists->status}}</td></tr>
    </table>
</div>


@stop
