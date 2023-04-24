@extends('layouts.app')
  
@section('content')
<style>
  thead{
    text-align:center;
  }
  .fa-user{
    font-size:40px;
          
  }
    th , td {
      text-align:center;
        font-size:16px;
        border:5px solid white; 
    }
    a{
      text-decoration:none;
      color:green;
      
    }
    .no{
        padding-bottom:30px;
    }
</style>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h4>ရက်စွဲ({{$date}})ဘူးသီးတောင်-စစ်တွေ(နေ့လည်ပိုင်း)</h4> </div>
                <div class="px-3 py-2">

</div>
                <div class="card-body">
                <h4>ခုံများကို ခုနှစ်ရက်သာ ကြိုတင်ရောင်းချရန်!</h4>
                <table class="table">
                <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{url('admin/seat/ms2_view')}}">
       @csrf
        <div class="form-group mb-3">
          <input type="date" id="date" name="date" class="form-control" required="">
        </div>
        <button type="submit" class="btn btn-primary">ရက်ရွေးပါ</button>
  </form>
                <!-- Sales View Tables -->
  <thead class="thead-dark">
    <h4>ခုံ</h4>
    

  </thead>
  <tbody>
  @foreach($seats as $key =>$seat)
  @if($key%4 == 0)
  <tr>
      @else
      @endif
      
      @if($key%4== 0)
        </tr>
        @else
        @endif

        @if($seat->ms2_date1==$date)<th scope="row" ><a href="#" style="color:red;">
        @elseif($seat->ms2_date2==$date)<th scope="row" ><a href="#" style="color:red;">
        @elseif($seat->ms2_date3==$date)<th scope="row" ><a href="#" style="color:red;">
        @elseif($seat->ms2_date4==$date)<th scope="row" ><a href="#" style="color:red;">
        @elseif($seat->ms2_date5==$date)<th scope="row" ><a href="#" style="color:red;">
        @elseif($seat->ms2_date6==$date)<th scope="row" ><a href="#" style="color:red;">
        @elseif($seat->ms2_date7==$date)<th scope="row" ><a href="#" style="color:red;">
        @else <th scope="row" style="background-color:white;"><a href="{{  route('admin.seat.detail',[$seat['id'],$date,'ms2'])}}">
        @endif
        
          <h4>
            <i class="fa-solid fa-user" ></i> 
          </h4>
          <br>
          @if($seat->ms2_date1==$date)<i class="fa-solid fa-check"></i><br>ယူပြီး
        @elseif($seat->ms2_date2==$date)<i class="fa-solid fa-check"></i><br>ယူပြီး
        @elseif($seat->ms2_date3==$date)<i class="fa-solid fa-check"></i><br>ယူပြီး
        @elseif($seat->ms2_date4==$date)<i class="fa-solid fa-check"></i><br>ယူပြီး
        @elseif($seat->ms2_date5==$date)<i class="fa-solid fa-check"></i><br>ယူပြီး
        @elseif($seat->ms2_date6==$date)<i class="fa-solid fa-check"></i><br>ယူပြီး
        @elseif($seat->ms2_date7==$date)<i class="fa-solid fa-check"></i><br>ယူပြီး
        @else
        @endif
          <h4 class="no">
            {{$seat->seat}}
          </h4>
        </a>
        </th>   


@endforeach


  </tbody>
</table>

@if($seats->count()==null)
    @else
{{ $seats->links() }}
@endif
</div>
            </div>
    </div>
</div>
@endsection