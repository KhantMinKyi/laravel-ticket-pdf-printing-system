@extends('layouts.app')

@section('content')
<style>
  .dropdown-menu{
    margin:100px;
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
    @if($type=='ms')
    ဘူးသီးတောင်-စစ်တွေ
    @elseif($type=='sm')
    စစ်တွေ-ဘူးသီးတောင်
    @endif
    ({{$date}})
    </div>
    <div class="card-body">
      <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{url('admin/seat/add')}}">
       @csrf
       <table class="table table-responsive table-striped">

<!-- Sales View Tables -->
<thead class="thead-dark">
<h3></h3>
<tr class="table-header">
<th class="table-header"scope="col">စဉ်</th>
<th class="table-header"scope="col">အကြောင်းအရာ</th>

</tr>
</thead>
<tr>
    <th scope="row";">အမည်</th>
    <th scope="row">
    <input type="text" id="name" name="name" class="form-control" value="" required="">
    </th>
</tr>
<tr>
    <th scope="row">ဖုန်းနံပါတ်</th>
    <th scope="row">
    <input type="text" id="phone" name="phone" class="form-control" value="" required="">
    </th>
</tr>
<tr>
    <th scope="row">မှတ်ပုံတင်</th>
    <th scope="row">
    <input type="text" id="nrc" name="nrc" class="form-control" value="" required="">
    </th>
</tr>
<tr>
    <th scope="row">နေရပ်လိပ်စာ</th>
    <th scope="row">
    <input type="text" id="address" name="address" class="form-control" value="" required="">
    </th>
</tr>
<tr>
    <th scope="row">ခုံနံပါတ်</th>
    <th scope="row">

  <div class="dropdown">
    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    {{$seat->seat}}
    </button>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    @foreach($seat_nos as $key =>$seat_no)
      <a class="dropdown-item" href="#">
      <div class="form-check">
          <input class="form-check-input" type="checkbox" id="flexCheckDefault" name="id[]" value="{{$seat_no->id}}">
          <label class="form-check-label" for="flexCheckDefault" name="id[]" value="{{$seat_no->id}}">
            {{$seat_no->seat}}
          </label>
        </div>
      </a>
      @endforeach
    </div>
  </div>
    </th>
</tr>
<tr>
    <th scope="row">ခုံအမျိုးအစား</th>
    <th scope="row">

  <div class="dropdown">
    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    ရွေးပါ
    </button>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
      <a class="dropdown-item" href="#">
      <div class="form-check">
  <input class="form-check-input" type="radio"  name="seat_type" id="flexRadioDefault1" value="window">
  <label class="form-check-label" for="flexRadioDefault1" name="seat_type" value="window">
  ပြတင်းပေါက်ထိုင်ခုံ
  </label>
</div>
      </a>
      <a class="dropdown-item" href="#">
      <div class="form-check">
  <input class="form-check-input" type="radio" name="seat_type" id="flexRadioDefault2" value="normal">
  <label class="form-check-label" for="flexRadioDefault2" name="seat_type" value="normal">
  ပုံမှန်ထိုင်ခုံ
  </label>
</div>
      </a>
    </div>
  </div>
    </th>

</tr>

<tr>
    <th scope="row">ခရီးစဉ်</th>
    <th scope="row">

  <div class="dropdown">
    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    ခရီးစဉ်
    </button>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
      <a class="dropdown-item" href="#">
      <div class="form-check">
          <input class="form-check-input" type="radio" id="flexCheckDefault" name="destination" value="full">
          <label class="form-check-label" for="flexCheckDefault" name="destination" value="full">
          စဆုံး
          </label>
        </div>
      </a>
      <a class="dropdown-item" href="#">
      <div class="form-check">
          <input class="form-check-input" type="radio" id="flexCheckDefault" name="destination" value="maungtaw">
          <label class="form-check-label" for="flexCheckDefault" name="destination" value="maungtaw">
            
မောင်တော
          </label>
        </div>
      </a>
    </div>
  </div>
    </th>

</tr>
<tr>

</tr>
<tr>
    <th scope="row">ရက်စွဲ</th>
    <th scope="row">{{$date}}</th>
    <input type="hidden" id="date" name="date" class="form-control" value="{{$date}}">
</tr>
<tr>
    <th scope="row">လမ်းကြောင်း</th>
    @if($type=='ms')
    <th scope="row">ဘူးသီးတောင်-စစ်တွေ(မနက်ပိုင်း)</th>
    <input type="hidden" id="type" name="type" class="form-control" value="ms">
    @elseif($type=='sm')
    <th scope="row">စစ်တွေ-ဘူးသီးတောင်(မနက်ပိုင်း)</th>
    <input type="hidden" id="type" name="type" class="form-control" value="sm">
    @elseif($type=='ms2')
    <th scope="row">ဘူးသီးတောင်-စစ်တွေ(နေ့လည်ပိုင်း)</th>
    <input type="hidden" id="type" name="type" class="form-control" value="ms2">
    @elseif($type=='sm2')
    <th scope="row">စစ်တွေ-ဘူးသီးတောင်(နေ့လည်ပိုင်း)</th>
    <input type="hidden" id="type" name="type" class="form-control" value="sm2">
    @endif
    <input type="hidden" id="type" name="type" class="form-control" value="{{$type}}">
</tr>
</tbody>
</table>

                            <button type="submit" class="btn btn-primary">ထည့်သွင်းမည်</button>
                            </div>

                    
      </form>
    </div>
  </div>
</div>
@endsection