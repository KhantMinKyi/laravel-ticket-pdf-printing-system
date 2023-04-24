@extends('layouts.staff_nav')
  
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
    <h2>
    ခရီးသည်ဦးရေ

        (
            {{$customers->count()}}
        )
    </h2>
</div>
<div class="container">
<div class="card">
                <div class="card-header">({{ $date }})</div>
  
                <div class="card-body">
                <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{url('staff/customer/view/ms2')}}">
       @csrf
        <div class="form-group mb-3">
          <input type="date" id="date" name="date" class="form-control" required="">
        </div>
        <button type="submit" class="btn btn-primary">ရက်ရွေးပါ</button>
  </form>

  <table class="table">   
    <thead class="thead-dark">
    <h3>ခရီးသည်ဦးရေ
 ({{$customers->count()}})</h3>
        <tr>
            <th scope="col">စဉ်</th>
            <th scope="col">အမည်</th>
            <th scope="col">ခုံနံပါတ်</th>
            <th scope="col">ဖုန်းနံပါတ်</th>
            <th scope="col">ခရီးစဉ်</th>
            <th scope="col">နေရပ်လိပ်စာ</th>
            <th scope="col">ရောင်းသူ</th>
        </tr>
    </thead>
    <tbody>
        <tr>
        @foreach($customers as $key =>$customer)
      <th scope="row">{{$key+1}}</th>
      <td><a class="name" href="{{  route('staff.customer.detail',[$customer['seat_id'],$customer['id'],$date,'ms2'])}}">{{$customer->name}}</a></td>
      <th scope="row">{{$customer->seat_id}}</th>
      <td>{{$customer->phone}}</td>
      @if($customer->destination == 'maungtaw')
      <td>မောင်တော</td>
      @elseif($customer->destination == 'full')
      <td>စဆုံး</td>
      @endif
      <td>{{$customer->address}}</td>
      <td>{{$customer->saler}}</td>
      
    </tr>
    @endforeach
</tbody>
</table>
  </div>


  </div>
</div>
@endsection