@extends('people.home')

@section('people')

<table class="table">
    <thead class="table-dark">
      <tr>
        <th>#</th>
        <th>Date</th>
        <th>Vaccine</th>
        <th>Venue</th>
        <th>Age Group</th>
        <th>No of Doses</th>
      </tr>
    </thead>
    <tbody>
        @foreach($lists as $list)
      <tr>
        <td>{{$list->id}}</td>
        <td>{{$list->date}}</td>
        <td>{{$list->vaccine}}</td>
        <td>{{$list->venue}}</td>
        <td>{{$list->age}}</td>
        <td>{{$list->dosage}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
@stop
