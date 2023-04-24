@extends('layouts.app')
  
@section('content')
<style>
    h3{
        margin-top:50px;
    }
    .table > :not(caption) > * > *{
        padding-bottom:14px;
        
    }
    th,td{
        font-size:18px;
        max-width:50px;
        height:50px;
        margin:40px;
    }
    a{
        text-decoration:none;
        color:blue;
        font-size:18px;
    }
    @media (max-width: 770.98px) {
        .name ,th,td{
        font-size:14px;
        }
      
  }
    @media (max-width: 550.98px) {
        .name ,th,td{
        font-size:12px;
        }
      
  }
    thead{
        background-color:#FCD546;
        color:black;
        margin-bottom:10px;
    }
    .nav-link{
        color:black;
        font-size:18px;
    }
</style>
<div class="text-center">
    <h2>အသုံးပြုသူဦးရေ
        (
            {{$staffs->count()+$admins->count()}}
        )
    </h2>
</div>
<div class="container">
<div class="card">
                <div class="card-header">{{ __('All Office Staffs') }}</div>
  
                <div class="card-body">

    <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Staffs({{$staffs->count()}})</button>
    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Admins({{$admins->count()}})</button>
  </div>

<div class="tab-content" id="nav-tabContent">

  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
  <table class="table">   
    <thead class="thead-dark">
        <h3>Staffs ({{$staffs->count()}})</h3>
        <tr>
            <th scope="col">စဉ်</th>
            <th scope="col">အမည်</th>
            <th scope="col">Gmail</th>
            <th scope="col">ဖုန်းနံပါတ်</th>
        </tr>
    </thead>
    <tbody>
        <tr>
        @foreach($staffs as $key =>$staff)
      <th scope="row">{{$key+1}}</th>
      <td><a class="name" href="{{  route('admin.user.detail',[$staff['id'],$staff->type])}}">{{$staff->name}}</a></td>
      <td>{{$staff->email}}</td>
      <td>{{$staff->phone}}</td>
    </tr>
    @endforeach
</tbody>
</table>
  </div>

  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
  <table class="table">
    
    <thead class="thead-dark">
        <h3>Admin 
            ({{$admins->count()}})
    </h3>
    <tr>
        <th scope="col">No</th>
        <th scope="col">Name</th>
        <th scope="col">Gmail</th>
        <th scope="col">Phone Number</th>
    </tr>
</thead>
<tbody>
    <tr>
        @foreach($admins as $key =>$admin)
      <th scope="row">{{$key+1}}</th>
      <td><a href="{{  route('admin.user.detail',[$admin['id'],$admin->type])}}">{{$admin->name}}</a></td>
      <td>{{$admin->email}}</td>
      <td>{{$admin->phone}}</td>
    </tr>
    @endforeach
</tbody>
</table>
  </div>

  </div>
</div>
@endsection