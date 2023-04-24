@extends('layouts.app')

@section('content')
  <div class="container mt-4">
  @if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
  @endif
  <div class="card">
    <div class="card-header text-center font-weight-bold">
    @if($type=='ms')
   ဘူးသီးတောင်-စစ်တွေ(မနက်ပိုင်း)

@elseif($type=='sm')
စစ်တွေ-ဘူးသီးတောင်(မနက်ပိုင်း)

@elseif($type=='ms2')
ဘူးသီးတောင်-စစ်တွေ(နေ့လည်ပိုင်း)

@elseif($type=='sm2')
စစ်တွေ-ဘူးသီးတောင်(နေ့လည်ပိုင်း)

    @endif
    ({{$date}})
    </div>
    <div class="card-body">
      <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{url('admin/customer/delete')}}">
       @csrf
       <table class="table table-responsive table-striped">

<!-- Sales View Tables -->
<thead class="thead-dark">
<h3></h3>
<tr class="table-header">
<th class="table-header"scope="col">နံပါတ်</th>
<th class="table-header"scope="col">အကြောင်းအရာ</th>

</tr>
</thead>
<tr>
    <th scope="row">နာမည်</th>
    <th scope="row">{{$customer->name}}</th>
    <input type="hidden" id="name" name="name" class="form-control" value="{{$customer->name}}">
</tr>
<tr>
    <th scope="row">ဖုန်းနံပါတ်</th>
    <th scope="row">{{$customer->phone}}</th>
    <input type="hidden" id="phone" name="phone" class="form-control" value="{{$customer->phone}}">
    </th>
</tr>
<tr>
    <th scope="row">မှတ်ပုံတင်</th>
    <th scope="row">{{$customer->nrc}}</th>
    <input type="hidden" id="nrc" name="nrc" class="form-control" value="{{$customer->nrc}}">
    </th>
</tr>
<tr>
    <th scope="row">နေရပ်လိပ်စာ</th>
    <th scope="row">{{$customer->address}}</th>
    <input type="hidden" id="address" name="address" class="form-control" value="{{$customer->address}}">
    </th>
</tr>
<tr>
    <th scope="row">ခုံနံပါတ်</th>
    <th scope="row">{{$customer->seat_id}}</th>
    <input type="hidden" id="seat_id" name="seat_id" class="form-control" value="{{$customer->seat_id}}">
    <input type="hidden" id="id" name="id" class="form-control" value="{{$customer->id}}">
</tr>
<tr>
    <th scope="row">ခုံအမျိုးအစား</th>
    @if($customer->seat_type == 'window')
      <th>ပြတင်းပေါက်ထိုင်ခုံ</th>
      @elseif($customer->seat_type == 'normal')
      <th>ပုံမှန်ထိုင်ခုံ</th>
      @endif
    <input type="hidden" id="seat_id" name="seat_id" class="form-control" value="{{$customer->seat_id}}">
    <input type="hidden" id="id" name="id" class="form-control" value="{{$customer->id}}">
</tr>
<tr>
    <th scope="row">ရောင်းသူ</th>
    <th scope="row">{{$customer->saler}}</th>
    <input type="hidden" id="saler" name="saler" class="form-control" value="{{$customer->saler}}">
</tr>
<tr>
    <th scope="row">ရက်စွဲ</th>
    <th scope="row">{{$date}}</th>
    <input type="hidden" id="date" name="date" class="form-control" value="{{$date}}">
</tr>
<tr>
    <th scope="row">ခရီးစဉ်</th>
    @if($customer->destination == 'maungtaw')
      <th>မောင်တော</th>
      @elseif($customer->destination == 'full')
      <th>အစအဆုံး</th>
      @endif
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

                            <button type="submit" class="btn btn-primary">Cancel Booking</button>
                            </div>

                    
      </form>
    </div>
  </div>
</div>
@endsection