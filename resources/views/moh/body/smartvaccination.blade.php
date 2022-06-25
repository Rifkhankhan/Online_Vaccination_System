@extends('moh.home')

@section('moh')

<table class="table">
    <thead class="table-dark">
      <tr>
        <th>#</th>
        <th>ID</th>
        <th>Nic</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Address</th>
        <th>Mobile No</th>
        <th>Name</th>
        <th>Email</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach($lists as $list)
        <tr>
            <!-- here the id is user id -->
            <td>{{$list->id}}</td>
            <td>{{$list->moh_id}}</td>
            <td>{{$list->nic}}</td>
            <td>{{$list->first_name}}</td>
            <td>{{$list->last_name}}</td>
            <td>{{$list->address}}</td>
            <td>{{$list->mobile}}</td>
            <td>{{$list->name}}</td>
            <td>{{$list->email}}</td>
            <td>
                <a href="{{route('moh.view',$list->nic)}}" class="btn btn-success">View</a>
                @if($list->status == 'request')
                    <a href="{{route('moh.approve',$list->nic)}}" class="btn btn-success">Approve</a>
                    <a href="{{route('moh.reject',$list->nic)}}" class="btn btn-warning">Reject</a>
                @else
                    <a   class="btn btn-light">Approved</a>
                    <a  class="btn btn-primary">Reject</a>
                @endif
            </td>
            </tr>
      @endforeach
    </tbody>
  </table>
@stop
