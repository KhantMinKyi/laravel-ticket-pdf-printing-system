<!DOCTYPE html>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<head>
<link rel="stylesheet" href='https://mmwebfonts.comquas.com/fonts/?font=pyidaungsu'/>
  <title>   @if($type=='ms')
    Boo Thee Taung - Sittwe (Morning)

    @elseif($type=='sm')
     Sittwe - Boo Thee Taung (Morning)

    @elseif($type=='ms2')
     Boo Thee Taung - Sittwe (Morning)

    @elseif($type=='sm2')
     Sittwe - Boo Thee Taung(Afternoon)

    @endif
    ({{$date}})</title>
<style>
body{
  font-family:Pyidaungsu;
}


b{
    padding-left:20px;
    padding-right:10px;
  }
  table, th, td {
    border: 1px solid;
    font-size:14px;
        padding-top:3px;
  }
  table {
    width: 100%;
    border-collapse: collapse;
  }
  td {
    text-align: center;
  }
  .line{
    border:1px solid black;
  }
  .qrcode{
      margin-left: 80%;
  }
  .logo{
    float: left;
  width: 20%;
  }
  .heading{
    padding-top:20px;
  }
  .logo_heading{
    padding-bottom:30px;
  }
  .text{
    line-height:2;
  }
  .website{
    margin-left:70%;
  }
</style>
</head>
<body>
<div class="container">
 <div class="card mb-2">
 <div class="card-body">
 <div class="card-subtitle mb-2 text-muted small">
 </div>
 <div class="logo_heading">

   <h2 class="heading">
   @if($type=='ms')
   ဘူးသီးတောင်-စစ်တွေ(မနက်ပိုင်း)

@elseif($type=='sm')
စစ်တွေ-ဘူးသီးတောင်(မနက်ပိုင်း)

@elseif($type=='ms2')
ဘူးသီးတောင်-စစ်တွေ(နေ့လည်ပိုင်း)

@elseif($type=='sm2')
စစ်တွေ-ဘူးသီးတောင်(နေ့လည်ပိုင်း)

    @endif
    ({{$date}})</h2>
  </div>
 <div>
 </div>
 <table  class="table table-bordered">
     <thead>

         <tr>
         <th scope="col">စဉ်</th>
            <th scope="col">နာမည်</th>
            <th scope="col">ခုံနံပါတ်</th>
             <th scope="col">မှတ်ပုံတင်</th>
             <th scope="col">ဖုန်းနံပါတ်</th>
            <th scope="col">ခရီးစဉ်</th>
            <th scope="col">နေရပ်လိပ်စာ</th>
            <th scope="col">ရောင်းသူ</th>
            </tr>
    </thead>
    <tbody>

      @foreach($customers as $key =>$customer)
        <tr>
      <td scope="row">{{$key+1}}</td>
      <td>{{$customer->name}}</td>
      <td scope="row">{{$customer->seat_id}}</td>
      <td>{{$customer->nrc}}</td>
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
 
</body>
</html>