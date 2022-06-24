@extends('admin.home')

@section('admin')

<div class="content-wrapper ">

<table class="table">
    <thead class="table-dark">
      <tr>
        <th>Nic</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Address</th>
        <th>Mobile No</th>
      </tr>
    </thead>
    <tbody>
        @foreach($mohUsers as $user)
            <tr>
                <td>{{$user->nic}}</td>
                <td>{{$user->first_name}}</td>
                <td>{{$user->last_name}}</td>
                <td>{{$user->address}}</td>
                <td>{{$user->mobile}}</td>
            </tr>
        @endforeach

    </tbody>
  </table>
</div>

@stop
