@extends('layout.master')
@section('title')
    User Index
@endsection
@section('content')
    <h3 > index user </h3>
    <table class="table table-hover">
        <tr>
            <th>No</th>
            <th>Name </th>
            <th>age </th>
        </tr>
    @foreach ($users as $k=> $v)
        <tr>
            <td>{{$k+1}} </td>
            <td>{{$v['name']}} </td>  
            <td>{{$v['age']}} </td>    
        </tr>     
    @endforeach
    </table>
    </div>
@endsection

@section('more')
        <h3> somethings more </h3>
@endsection