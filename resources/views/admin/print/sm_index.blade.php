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
    thead{
        background-color:#FCD546;
        color:black;
        margin-bottom:10px;
    }
    .nav-link{
        color:black;
        font-size:18px;
    }
    a{
        text-decoration:none;
        color:#FCD546;
        font-size:18px;
    }
</style>
<div class="text-center">
    <h2>ခရီးသည်ဦးရေ
        (
            {{$customers->count()}}
        )
    </h2>
</div>
<div class="container">
<div class="card">
                <div class="card-header">({{ $date }})</div>
  
                <div class="card-body">
                <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{url('admin/print/detail/sm')}}">
       @csrf
        <div class="form-group mb-3">
          <input type="date" id="date" name="date" class="form-control" required="">
        </div>
        <button type="submit" class="btn btn-primary">ရက်ရွေးပါ</button>
  </form>
  </div>


  </div>
</div>
@endsection