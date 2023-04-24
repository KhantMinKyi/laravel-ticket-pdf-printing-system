@extends('layouts.app')

@section('content')
<style>
    th , td {
        font-size:18px;
    }
    .table-header{
        background-color:#FCD546;
        color:black;
    }
</style>
  <div class="container mt-4">
  @if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
  @endif
  <div class="card">
    <div class="card-header text-center font-weight-bold">
    အသုံးပြုသူအကြောင်းအရာ
    </div>
    <div class="card-body">
            <table class="table table-responsive table-striped">

<!-- Sales View Tables -->
<thead class="thead-dark">
<h3>အသုံးပြုသူ</h3>
<tr class="table-header">
<th class="table-header"scope="col">စဉ်</th>
<th class="table-header"scope="col">အကြောင်းအရာ</th>

</tr>
</thead>
<tr>
    <td scope="row";">အမည်</td>
    <td scope="row">{{$user->name}}</td>
    <input type="hidden" id="name" name="name" class="form-control" value="{{$user->name}}">
</tr>
    <input type="hidden" id="type" name="type" class="form-control" value="{{$user->type}}">
<tr>
    <td scope="row">Password</td>
    <td scope="row">{{$user->retype_password}}</td>
    <input type="hidden" id="password" name="password" class="form-control" value="{{$user->retype_password}}">
</tr>
<tr>
    <td scope="row">Email</td>
    <td scope="row">{{$user->email}}</td>
    <input type="hidden" id="email" name="email" class="form-control" value="{{$user->email}}">
</tr>

<tr>
    <td scope="row">ဖုန်းနံပါတ်</td>
    <td scope="row">{{$user->phone}}</td>
</tr>
<tr>
    <td scope="row"></td>
    <td scope="row">
    <a class="btn btn-outline-warning"
                                    href="{{ url("/admin/user/delete/$user->id/$user->type") }}">
                                    Delete
                                </a>
    </td>
</tr>
<tbody>
</tbody>
</table>               
    </div>
  </div>
</div>
@endsection