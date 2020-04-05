@extends('layout.master')
@section('title'," Product index")
@section('content')
  <h3 > index user </h3>
  <table class="table table-hover">
      <tr>
          <th>No</th>
          <th>Name </th>
          <th>code </th>
          <th>Price </th>
          <th>images </th>
          <th>action </th>
      </tr>
  @foreach ($products as $k=> $v)
      <tr>
          <td>{{$k+1}} </td>
          <td>{{$v->name}} </td>  
          <td>{{$v['code']}} </td>  
          <td>{{$v->price}} </td>  
          <td> <img width="50px" src="/images/{{$v->path}}"> </td>    
          <th>
                <a class="btn btn-warning" href="/products/{{$v->id}}/edit" > Edit </a>
                <form method="POST" action="/products/delete">
                    @csrf
                    <input type="hidden" name="id" value="{{$v->id}}">
                    <button class="btn btn-danger" type="submit" >Delete </button>
                </form>

          </th>
      </tr>     
  @endforeach
  </table>
@endsection