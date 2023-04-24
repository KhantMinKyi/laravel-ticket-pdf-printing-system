<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Staff;
use App\Models\Seat;
use App\Models\Customer;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use \Mpdf\Mpdf as PDF;
use Illuminate\Support\Facades\Storage;
class AdminController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function index()
    {
        $ms_date1=Seat::where('ms_date1', '<', Carbon::now()->subDays(1))->paginate(50);
        if($ms_date1 != null){
            for ($count = 0; $count < count($ms_date1) ; $count++){
            $ms_date1[$count]->ms_date1 = null;
            $ms_date1[$count]->update();
        }
        }
        $ms_date2=Seat::where('ms_date2', '<', Carbon::now()->subDays(1))->paginate(50);
        if($ms_date2 != null){
            for ($count = 0; $count < count($ms_date2) ; $count++){
            $ms_date2[$count]->ms_date2 = null;
            $ms_date2[$count]->update();
        }
        }
        $ms_date3=Seat::where('ms_date3', '<', Carbon::now()->subDays(1))->paginate(50);
        if($ms_date3 != null){
            for ($count = 0; $count < count($ms_date3) ; $count++){
            $ms_date3[$count]->ms_date1 = null;
            $ms_date3[$count]->update();
        }
        }
        $ms_date4=Seat::where('ms_date4', '<', Carbon::now()->subDays(1))->paginate(50);
        if($ms_date4 != null){
            for ($count = 0; $count < count($ms_date4) ; $count++){
            $ms_date4[$count]->ms_date4 = null;
            $ms_date4[$count]->update();
        }
        }
        $ms_date5=Seat::where('ms_date5', '<', Carbon::now()->subDays(1))->paginate(50);
        if($ms_date5 != null){
            for ($count = 0; $count < count($ms_date5) ; $count++){
            $ms_date5[$count]->ms_date5 = null;
            $ms_date5[$count]->update();
        }
        }
        $ms_date6=Seat::where('ms_date6', '<', Carbon::now()->subDays(1))->paginate(50);
        if($ms_date6 != null){
            for ($count = 0; $count < count($ms_date6) ; $count++){
            $ms_date6[$count]->ms_date6 = null;
            $ms_date6[$count]->update();
        }
        }
        $ms_date7=Seat::where('ms_date7', '<', Carbon::now()->subDays(1))->paginate(50);
        if($ms_date7 != null){
            for ($count = 0; $count < count($ms_date7) ; $count++){
            $ms_date7[$count]->ms_date7 = null;
            $ms_date7[$count]->update();
        }
        }
        $ms2_date1=Seat::where('ms2_date1', '<', Carbon::now()->subDays(1))->paginate(50);
        if($ms2_date1 != null){
            for ($count = 0; $count < count($ms2_date1) ; $count++){
            $ms2_date1[$count]->ms2_date1 = null;
            $ms2_date1[$count]->update();
        }
        }
        $ms2_date2=Seat::where('ms2_date2', '<', Carbon::now()->subDays(1))->paginate(50);
        if($ms2_date2 != null){
            for ($count = 0; $count < count($ms2_date2) ; $count++){
            $ms2_date2[$count]->ms2_date2 = null;
            $ms2_date2[$count]->update();
        }
        }
        $ms2_date3=Seat::where('ms2_date3', '<', Carbon::now()->subDays(1))->paginate(50);
        if($ms2_date3 != null){
            for ($count = 0; $count < count($ms2_date3) ; $count++){
            $ms2_date3[$count]->ms2_date1 = null;
            $ms2_date3[$count]->update();
        }
        }
        $ms2_date4=Seat::where('ms2_date4', '<', Carbon::now()->subDays(1))->paginate(50);
        if($ms2_date4 != null){
            for ($count = 0; $count < count($ms2_date4) ; $count++){
            $ms2_date4[$count]->ms2_date4 = null;
            $ms2_date4[$count]->update();
        }
        }
        $ms2_date5=Seat::where('ms2_date5', '<', Carbon::now()->subDays(1))->paginate(50);
        if($ms2_date5 != null){
            for ($count = 0; $count < count($ms2_date5) ; $count++){
            $ms2_date5[$count]->ms2_date5 = null;
            $ms2_date5[$count]->update();
        }
        }
        $ms2_date6=Seat::where('ms2_date6', '<', Carbon::now()->subDays(1))->paginate(50);
        if($ms2_date6 != null){
            for ($count = 0; $count < count($ms2_date6) ; $count++){
            $ms2_date6[$count]->ms2_date6 = null;
            $ms2_date6[$count]->update();
        }
        }
        $ms2_date7=Seat::where('ms2_date7', '<', Carbon::now()->subDays(1))->paginate(50);
        if($ms2_date7 != null){
            for ($count = 0; $count < count($ms2_date7) ; $count++){
            $ms2_date7[$count]->ms2_date7 = null;
            $ms2_date7[$count]->update();
        }
        }
        $sm_date1=Seat::where('sm_date1', '<', Carbon::now()->subDays(1))->paginate(50);
        if($sm_date1 != null){
            for ($count = 0; $count < count($sm_date1) ; $count++){
            $sm_date1[$count]->sm_date1 = null;
            $sm_date1[$count]->update();
        }
        }
        $sm_date2=Seat::where('sm_date2', '<', Carbon::now()->subDays(1))->paginate(50);
        if($sm_date2 != null){
            for ($count = 0; $count < count($sm_date2) ; $count++){
            $sm_date2[$count]->sm_date2 = null;
            $sm_date2[$count]->update();
        }
        }
        $sm_date3=Seat::where('sm_date3', '<', Carbon::now()->subDays(1))->paginate(50);
        if($sm_date3 != null){
            for ($count = 0; $count < count($sm_date3) ; $count++){
            $sm_date3[$count]->sm_date1 = null;
            $sm_date3[$count]->update();
        }
        }
        $sm_date4=Seat::where('sm_date4', '<', Carbon::now()->subDays(1))->paginate(50);
        if($sm_date4 != null){
            for ($count = 0; $count < count($sm_date4) ; $count++){
            $sm_date4[$count]->sm_date4 = null;
            $sm_date4[$count]->update();
        }
        }
        $sm_date5=Seat::where('sm_date5', '<', Carbon::now()->subDays(1))->paginate(50);
        if($sm_date5 != null){
            for ($count = 0; $count < count($sm_date5) ; $count++){
            $sm_date5[$count]->sm_date5 = null;
            $sm_date5[$count]->update();
        }
        }
        $sm_date6=Seat::where('sm_date6', '<', Carbon::now()->subDays(1))->paginate(50);
        if($sm_date6 != null){
            for ($count = 0; $count < count($sm_date6) ; $count++){
            $sm_date6[$count]->sm_date6 = null;
            $sm_date6[$count]->update();
        }
        }
        $sm_date7=Seat::where('sm_date7', '<', Carbon::now()->subDays(1))->paginate(50);
        if($sm_date7 != null){
            for ($count = 0; $count < count($sm_date7) ; $count++){
            $sm_date7[$count]->sm_date7 = null;
            $sm_date7[$count]->update();
        }
        }
        $sm2_date1=Seat::where('sm2_date1', '<', Carbon::now()->subDays(1))->paginate(50);
        if($sm2_date1 != null){
            for ($count = 0; $count < count($sm2_date1) ; $count++){
            $sm2_date1[$count]->sm2_date1 = null;
            $sm2_date1[$count]->update();
        }
        }
        $sm2_date2=Seat::where('sm2_date2', '<', Carbon::now()->subDays(1))->paginate(50);
        if($sm2_date2 != null){
            for ($count = 0; $count < count($sm2_date2) ; $count++){
            $sm2_date2[$count]->sm2_date2 = null;
            $sm2_date2[$count]->update();
        }
        }
        $sm2_date3=Seat::where('sm2_date3', '<', Carbon::now()->subDays(1))->paginate(50);
        if($sm2_date3 != null){
            for ($count = 0; $count < count($sm2_date3) ; $count++){
            $sm2_date3[$count]->sm2_date1 = null;
            $sm2_date3[$count]->update();
        }
        }
        $sm2_date4=Seat::where('sm2_date4', '<', Carbon::now()->subDays(1))->paginate(50);
        if($sm2_date4 != null){
            for ($count = 0; $count < count($sm2_date4) ; $count++){
            $sm2_date4[$count]->sm2_date4 = null;
            $sm2_date4[$count]->update();
        }
        }
        $sm2_date5=Seat::where('sm2_date5', '<', Carbon::now()->subDays(1))->paginate(50);
        if($sm2_date5 != null){
            for ($count = 0; $count < count($sm2_date5) ; $count++){
            $sm2_date5[$count]->sm2_date5 = null;
            $sm2_date5[$count]->update();
        }
        }
        $sm2_date6=Seat::where('sm2_date6', '<', Carbon::now()->subDays(1))->paginate(50);
        if($sm2_date6 != null){
            for ($count = 0; $count < count($sm2_date6) ; $count++){
            $sm2_date6[$count]->sm2_date6 = null;
            $sm2_date6[$count]->update();
        }
        }
        $sm2_date7=Seat::where('sm2_date7', '<', Carbon::now()->subDays(1))->paginate(50);
        if($sm2_date7 != null){
            for ($count = 0; $count < count($sm2_date7) ; $count++){
            $sm2_date7[$count]->sm2_date7 = null;
            $sm2_date7[$count]->update();
        }
        }
        return view('admin.index');
    }
    public function create()
    {
        return view('admin.user.add');
    }
    public function store(Request $request)
    {
        $retype_password=bcrypt($request->retype_password);
        $validated = $request->validate([
            'password' => 'required|min:8|same:retype_password',
            'email' => 'required|unique:staff|unique:admins',
        ]);
        if($request->type ==="staff"){
            $user = new Staff;
            $user->name = $request->name;
            $user->phone = $request->phone;
            $user->email = $request->email;
            $user->type = $request->type;
            $user->retype_password =$request->retype_password;
            $user->password = Hash::make($request->password);
            $user->save();
            return redirect('admin/user/add')->with('status', 'Add Staff Form Data Has Been inserted');
        }else if($request->type ==="admin"){
            $user = new Admin;
            $user->name = $request->name;
            $user->phone = $request->phone;
            $user->email = $request->email;
            $user->type = $request->type;
            $user->retype_password =$request->retype_password;
            $user->password = Hash::make($request->password);
            $user->save();
            return redirect('admin/user/add')->with('status', 'Add Admin Form Data Has Been inserted');
        }
    }

    public function viewuser()
    {
        $staff=Staff::Orderby('name')->paginate(50);
        $admin=Admin::Orderby('name')->paginate(50);
        return view('admin.user.view',[
            'staffs'=>$staff,
            'admins'=>$admin,
        ]);
        return view('admin.user.view');
    }
    public function userdelete($id,$type)
    {
        if($type ==="staff"){
            $user =Staff::find($id);
            $user->delete();
            return redirect('admin/user/view')->with('status', 'Add Staff Form Data Has Been inserted');
        }else if($type ==="admin"){
            $user =Admin::find($id);
            $user->delete();
            return redirect('admin/user/view')->with('status', 'Add Admin Form Data Has Been inserted');
        }
    }

    public function userdetail($id,$type){

        switch ($type) {
            case 'staff':
                $user = Staff::find($id);
              break;
            case 'admin':
                $user = Admin::find($id);
              break;
            default:
            return redirect('/admin/user/view')->with('stats', 'Error User delete!!!');
              break;
          }
        return view('admin.user.detail',[
            'user'=>$user,
        ]);
    }


    public function ms_viewdailyseat(Request $request){
        $date=$request->date;
        if($date==null){
            $date=Carbon::now()->format('Y-m-d');
        }else{
            $date=$request->date;
        }
        $seats=Seat::Orderby('id')->paginate(50);
        return view('admin.seat.ms_index',[
            'seats'=>$seats,
            'date'=>$date
        ]);

    }

    public function ms2_viewdailyseat(Request $request){
        $date=$request->date;
        if($date==null){
            $date=Carbon::now()->format('Y-m-d');
        }else{
            $date=$request->date;
        }
        $seats=Seat::Orderby('id')->paginate(50);
        return view('admin.seat.ms2_index',[
            'seats'=>$seats,
            'date'=>$date
        ]);

    }

    public function sm_viewdailyseat(Request $request){
        $date=$request->date;
        if($date==null){
            $date=Carbon::now()->format('Y-m-d');
        }else{
            $date=$request->date;
        }
        $seats=Seat::Orderby('id')->paginate(50);
        return view('admin.seat.sm_index',[
            'seats'=>$seats,
            'date'=>$date
        ]);

    }
    public function sm2_viewdailyseat(Request $request){
        $date=$request->date;
        if($date==null){
            $date=Carbon::now()->format('Y-m-d');
        }else{
            $date=$request->date;
        }
        $seats=Seat::Orderby('id')->paginate(50);
        return view('admin.seat.sm2_index',[
            'seats'=>$seats,
            'date'=>$date
        ]);

    }

    public function seatdetail($id,$date,$type){
        $seat=Seat::find($id);
        $seat_nos=Seat::Orderby('id')->paginate(50);
        return view('admin.seat.detail',[
            'seat'=>$seat,
            'seat_nos'=>$seat_nos,
            'date'=>$date,
            'type'=>$type,
        ]);
    }

    public function seatadd(Request $request)
    {
        $seat_no= $request->id;
        for ($count = 0; $count < count($seat_no) ; $count++){
            $str_json =json_encode($seat_no[$count]); //array to json string conversion
            $seat_no_decode = (json_decode($str_json));
           $seat =Seat::find($seat_no_decode);
           if($request->type ==="ms"){
               if ($seat->ms_date1==null) {$seat->ms_date1=$request->date;}
               elseif ($seat->ms_date2==null) {$seat->ms_date2=$request->date;}
               elseif ($seat->ms_date3==null) {$seat->ms_date3=$request->date;}
               elseif ($seat->ms_date4==null) {$seat->ms_date4=$request->date;}
               elseif ($seat->ms_date5==null) {$seat->ms_date5=$request->date;}
               elseif ($seat->ms_date6==null) {$seat->ms_date6=$request->date;}
               elseif ($seat->ms_date7==null) {$seat->ms_date7=$request->date;}
                else return redirect('admin/seat/ms_view')->with('status', 'Cannot Add Data Range Over 7 Days');
                $seat->update();
                $user = new Customer;
                $user->seat_id =$seat_no_decode;
                $user->name = $request->name;
                $user->phone = $request->phone;
                $user->address = $request->address;
                $user->nrc = $request->nrc;
                $user->date = $request->date;
                $user->destination = $request->destination;
                $user->seat_type = $request->seat_type;
                $user->type = $request->type;
                $user->saler = Auth::user()->name;
                $user->save();
            }else if($request->type ==="sm"){
                if ($seat->sm_date1==null) {$seat->sm_date1=$request->date;}
                elseif ($seat->sm_date2==null) {$seat->sm_date2=$request->date;}
                elseif ($seat->sm_date3==null) {$seat->sm_date3=$request->date;}
                elseif ($seat->sm_date4==null) {$seat->sm_date4=$request->date;}
                elseif ($seat->sm_date5==null) {$seat->sm_date5=$request->date;}
                elseif ($seat->sm_date6==null) {$seat->sm_date6=$request->date;}
                elseif ($seat->sm_date7==null) {$seat->sm_date7=$request->date;}
                else return redirect('admin/seat/sm_view')->with('status', 'Cannot Add Data Range Over 7 Days');
                $seat->update();
                $user = new Customer;
                $user->seat_id =$seat_no_decode;
                $user->name = $request->name;
                $user->phone = $request->phone;
                $user->address = $request->address;
                $user->nrc = $request->nrc;
                $user->date = $request->date;
                $user->destination = $request->destination;
                $user->seat_type = $request->seat_type;
                $user->type = $request->type;
                $user->saler = Auth::user()->name;
                $user->save();

            }else if($request->type ==="ms2"){
                if ($seat->ms2_date1==null) {$seat->ms2_date1=$request->date;}
                elseif ($seat->ms2_date2==null) {$seat->ms2_date2=$request->date;}
                elseif ($seat->ms2_date3==null) {$seat->ms2_date3=$request->date;}
                elseif ($seat->ms2_date4==null) {$seat->ms2_date4=$request->date;}
                elseif ($seat->ms2_date5==null) {$seat->ms2_date5=$request->date;}
                elseif ($seat->ms2_date6==null) {$seat->ms2_date6=$request->date;}
                elseif ($seat->ms2_date7==null) {$seat->ms2_date7=$request->date;}
                else return redirect('admin/seat/sm_view')->with('status', 'Cannot Add Data Range Over 7 Days');
                $seat->update();
                $user = new Customer;
                $user->seat_id =$seat_no_decode;
                $user->name = $request->name;
                $user->phone = $request->phone;
                $user->address = $request->address;
                $user->nrc = $request->nrc;
                $user->date = $request->date;
                $user->destination = $request->destination;
                $user->seat_type = $request->seat_type;
                $user->type = $request->type;
                $user->saler = Auth::user()->name;
                $user->save();

            }else if($request->type ==="sm2"){
                if ($seat->sm2_date1==null) {$seat->sm2_date1=$request->date;}
                elseif ($seat->sm2_date2==null) {$seat->sm2_date2=$request->date;}
                elseif ($seat->sm2_date3==null) {$seat->sm2_date3=$request->date;}
                elseif ($seat->sm2_date4==null) {$seat->sm2_date4=$request->date;}
                elseif ($seat->sm2_date5==null) {$seat->sm2_date5=$request->date;}
                elseif ($seat->sm2_date6==null) {$seat->sm2_date6=$request->date;}
                elseif ($seat->sm2_date7==null) {$seat->sm2_date7=$request->date;}
                else return redirect('admin/seat/sm_view')->with('status', 'Cannot Add Data Range Over 7 Days');
                $seat->update();
                $user = new Customer;
                $user->seat_id =$seat_no_decode;
                $user->name = $request->name;
                $user->phone = $request->phone;
                $user->address = $request->address;
                $user->nrc = $request->nrc;
                $user->date = $request->date;
                $user->destination = $request->destination;
                $user->seat_type = $request->seat_type;
                $user->type = $request->type;
                $user->saler = Auth::user()->name;
                $user->save();

            }
        }
        if($request->type ==="ms"){
        return redirect('admin/seat/ms_view')->with('status', 'Add Admin Form Data Has Been inserted');
        }
        else if($request->type ==="sm"){
            return redirect('admin/seat/sm_view')->with('status', 'Add Admin Form Data Has Been inserted');
        }
        else if($request->type ==="ms2"){
            return redirect('admin/seat/ms2_view')->with('status', 'Add Admin Form Data Has Been inserted');
        }
        else if($request->type ==="sm2"){
            return redirect('admin/seat/sm2_view')->with('status', 'Add Admin Form Data Has Been inserted');
        }

        }

    public function viewdailymscustomer(Request $request){
        $date=$request->date;
        if($date==null){
            $date=Carbon::now()->format('Y-m-d');
            $customers=Customer::whereDate('date', Carbon::now())->where('type','ms')->orderByRaw('CONVERT(seat_id , DECIMAL) asc')->paginate(50);
        }else{
            $date=$request->date;
            $customers=Customer::whereDate('date', $date)->where('type','ms')->orderByRaw('CONVERT(seat_id , DECIMAL) asc')->paginate(50);
        }
        return view('admin.customer.ms_index',[
            'customers'=>$customers,
            'date'=>$date
        ]);

    }
    public function viewdailyms2customer(Request $request){
        $date=$request->date;
        if($date==null){
            $date=Carbon::now()->format('Y-m-d');
            $customers=Customer::whereDate('date', Carbon::now())->where('type','ms2')->orderByRaw('CONVERT(seat_id, DECIMAL) asc')->paginate(50);
        }else{
            $date=$request->date;
            $customers=Customer::whereDate('date', $date)->where('type','ms2')->orderByRaw('CONVERT(seat_id, DECIMAL) asc')->paginate(50);
        }
        return view('admin.customer.ms2_index',[
            'customers'=>$customers,
            'date'=>$date
        ]);

    }

    public function viewdailysmcustomer(Request $request){
        $date=$request->date;
        if($date==null){
            $date=Carbon::now()->format('Y-m-d');
            $customers=Customer::whereDate('date', Carbon::now())->where('type','sm')->orderByRaw('CONVERT(seat_id, DECIMAL) asc')->paginate(50);
        }else{
            $date=$request->date;
            $customers=Customer::whereDate('date', $date)->where('type','sm')->orderByRaw('CONVERT(seat_id, DECIMAL) asc')->paginate(50);
        }
        return view('admin.customer.sm_index',[
            'customers'=>$customers,
            'date'=>$date
        ]);

    }
    public function viewdailysm2customer(Request $request){
        $date=$request->date;
        if($date==null){
            $date=Carbon::now()->format('Y-m-d');
            $customers=Customer::whereDate('date', Carbon::now())->where('type','sm2')->orderByRaw('CONVERT(seat_id, DECIMAL) asc')->paginate(50);
        }else{
            $date=$request->date;
            $customers=Customer::whereDate('date', $date)->where('type','sm2')->orderByRaw('CONVERT(seat_id, DECIMAL) asc')->paginate(50);
        }
        return view('admin.customer.sm2_index',[
            'customers'=>$customers,
            'date'=>$date
        ]);

    }

    public function customerdetail($seat_id,$id,$date,$type){
        $customer=customer::find($id);
        return view('admin.customer.detail',[
            'customer'=>$customer,
            'date'=>$date,
            'type'=>$type,
        ]);
    }
    public function customerdelete(Request $request){
        $date=$request->date;
        $customer=Customer::find($request->id);
        $seat=Seat::find($request->seat_id);
        if ($request->type == 'ms') {

            if ($seat->ms_date1==$date) {$seat->ms_date1 = null;}
            elseif ($seat->ms_date2==$date) {$seat->ms_date2 = null;}
            elseif ($seat->ms_date3==$date) {$seat->ms_date3 = null;}
            elseif ($seat->ms_date4==$date) {$seat->ms_date4 = null;}
            elseif ($seat->ms_date5==$date) {$seat->ms_date5 = null;}
            elseif ($seat->ms_date6==$date) {$seat->ms_date6 = null;}
            elseif ($seat->ms_date7==$date) {$seat->ms_date7 = null;}
            $customer->delete();
            $seat->update();
            return redirect('admin/seat/ms_view')->with('status', 'Cancle Booking Done');
        }
        elseif($request->type == 'sm') {
            if ($seat->sm_date1==$date) {$seat->sm_date1 = null;}
            elseif ($seat->sm_date2==$date) {$seat->sm_date2 = null;}
            elseif ($seat->sm_date3==$date) {$seat->sm_date3 = null;}
            elseif ($seat->sm_date4==$date) {$seat->sm_date4 = null;}
            elseif ($seat->sm_date5==$date) {$seat->sm_date5 = null;}
            elseif ($seat->sm_date6==$date) {$seat->sm_date6 = null;}
            elseif ($seat->sm_date7==$date) {$seat->sm_date7 = null;}
            $customer->delete();
            $seat->update();
            return redirect('admin/seat/sm_view')->with('status', 'Cancle Booking Done');
        }elseif ($request->type == 'ms2') {

            if ($seat->ms2_date1==$date) {$seat->ms2_date1 = null;}
            elseif ($seat->ms2_date2==$date) {$seat->ms2_date2 = null;}
            elseif ($seat->ms2_date3==$date) {$seat->ms2_date3 = null;}
            elseif ($seat->ms2_date4==$date) {$seat->ms2_date4 = null;}
            elseif ($seat->ms2_date5==$date) {$seat->ms2_date5 = null;}
            elseif ($seat->ms2_date6==$date) {$seat->ms2_date6 = null;}
            elseif ($seat->ms2_date7==$date) {$seat->ms2_date7 = null;}
            $customer->delete();
            $seat->update();
            return redirect('admin/seat/ms2_view')->with('status', 'Cancle Booking Done');
        }
        elseif($request->type == 'sm2') {
            if ($seat->sm2_date1==$date) {$seat->sm2_date1 = null;}
            elseif ($seat->sm2_date2==$date) {$seat->sm2_date2 = null;}
            elseif ($seat->sm2_date3==$date) {$seat->sm2_date3 = null;}
            elseif ($seat->sm2_date4==$date) {$seat->sm2_date4 = null;}
            elseif ($seat->sm2_date5==$date) {$seat->sm2_date5 = null;}
            elseif ($seat->sm2_date6==$date) {$seat->sm2_date6 = null;}
            elseif ($seat->sm2_date7==$date) {$seat->sm2_date7 = null;}
            $customer->delete();
            $seat->update();
            return redirect('admin/seat/sm2_view')->with('status', 'Cancle Booking Done');
        }

    }
    public function viewdailymsview(Request $request)
    {
        $date=$request->date;
        if($date==null){
            $date=Carbon::now()->format('Y-m-d');
            $customers=Customer::whereDate('date', Carbon::now())->where('type','ms')->Orderby('seat_id')->paginate(50);
        }else{
            $date=$request->date;
            $customers=Customer::whereDate('date', $date)->where('type','ms')->Orderby('seat_id')->paginate(50);
        }
        return view('admin.print.ms_index',[
            'customers'=>$customers,
            'date'=>$date
        ]);
    }


    public function viewdailyms2view(Request $request)
    {
        $date=$request->date;
        if($date==null){
            $date=Carbon::now()->format('Y-m-d');
            $customers=Customer::whereDate('date', Carbon::now())->where('type','ms2')->Orderby('seat_id')->paginate(50);
        }else{
            $date=$request->date;
            $customers=Customer::whereDate('date', $date)->where('type','ms2')->Orderby('seat_id')->paginate(50);
        }
        return view('admin.print.ms2_index',[
            'customers'=>$customers,
            'date'=>$date
        ]);
    }


    public function viewdailysmview(Request $request)
    {
        $date=$request->date;
        if($date==null){
            $date=Carbon::now()->format('Y-m-d');
            $customers=Customer::whereDate('date', Carbon::now())->where('type','sm')->Orderby('seat_id')->paginate(50);
        }else{
            $date=$request->date;
            $customers=Customer::whereDate('date', $date)->where('type','sm')->Orderby('seat_id')->paginate(50);
        }
        return view('admin.print.sm_index',[
            'customers'=>$customers,
            'date'=>$date
        ]);
    }


    public function viewdailysm2view(Request $request)
    {
        $date=$request->date;
        if($date==null){
            $date=Carbon::now()->format('Y-m-d');
            $customers=Customer::whereDate('date', Carbon::now())->where('type','sm2')->Orderby('seat_id')->paginate(50);
        }else{
            $date=$request->date;
            $customers=Customer::whereDate('date', $date)->where('type','sm2')->Orderby('seat_id')->paginate(50);
        }
        return view('admin.print.sm2_index',[
            'customers'=>$customers,
            'date'=>$date
        ]);
    }

    public function viewdailymsprint(Request $request)
    {

        $date=$request->date;
            $customers=Customer::whereDate('date', $date)->where('type','ms')->orderByRaw('CONVERT(seat_id, DECIMAL) asc')->paginate(50);
        $type='ms';
        $date=$request->date;
        $documentFileName = "fun.pdf";

        // Create the mPDF document
        $document = new PDF( [
            'mode' => 'utf-8',
            'format' => 'A4',
            'margin_header' => '3',
            'margin_top' => '20',
            'margin_bottom' => '20',
            'margin_footer' => '2',
                'default_font' => 'tharlon',

        ]);

        // Set some header informations for output
        $header = [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename="'.$documentFileName.'"'
        ];

        // Write some simple Content

        $document->WriteHTML(view('admin.print.detail',[
            'customers'=>$customers,
            'type'=>$type,
            'date'=>$date,
        ]));

        // Save PDF on your public storage
        Storage::disk('public')->put($documentFileName, $document->Output($documentFileName, "S"));

        // Get file back from storage with the give header informations
        return Storage::disk('public')->download($documentFileName, 'Request', $header);
    }


    public function viewdailyms2print(Request $request)
    {
        $date=$request->date;
            $customers=Customer::whereDate('date', $date)->where('type','ms2')->orderByRaw('CONVERT(seat_id, DECIMAL) asc')->paginate(50);
        $type='ms2';
        $date=$request->date;
        $documentFileName = "fun.pdf";

        // Create the mPDF document
        $document = new PDF( [
            'mode' => 'utf-8',
            'format' => 'A4',
            'margin_header' => '3',
            'margin_top' => '20',
            'margin_bottom' => '20',
            'margin_footer' => '2',
                'default_font' => 'tharlon',

        ]);

        // Set some header informations for output
        $header = [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename="'.$documentFileName.'"'
        ];

        // Write some simple Content

        $document->WriteHTML(view('admin.print.detail',[
            'customers'=>$customers,
            'type'=>$type,
            'date'=>$date,
        ]));

        // Save PDF on your public storage
        Storage::disk('public')->put($documentFileName, $document->Output($documentFileName, "S"));

        // Get file back from storage with the give header informations
        return Storage::disk('public')->download($documentFileName, 'Request', $header);
    }


    public function viewdailysmprint(Request $request)
    {
        $date=$request->date;
            $customers=Customer::whereDate('date', $date)->where('type','sm')->orderByRaw('CONVERT(seat_id, DECIMAL) asc')->paginate(50);
        $type='sm';
        $date=$request->date;
        $documentFileName = "fun.pdf";

        // Create the mPDF document
        $document = new PDF( [
            'mode' => 'utf-8',
            'format' => 'A4',
            'margin_header' => '3',
            'margin_top' => '20',
            'margin_bottom' => '20',
            'margin_footer' => '2',
                'default_font' => 'tharlon',

        ]);

        // Set some header informations for output
        $header = [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename="'.$documentFileName.'"'
        ];

        // Write some simple Content

        $document->WriteHTML(view('admin.print.detail',[
            'customers'=>$customers,
            'type'=>$type,
            'date'=>$date,
        ]));

        // Save PDF on your public storage
        Storage::disk('public')->put($documentFileName, $document->Output($documentFileName, "S"));

        // Get file back from storage with the give header informations
        return Storage::disk('public')->download($documentFileName, 'Request', $header);

    }


    public function viewdailysm2print(Request $request)
    {
        $date=$request->date;
            $customers=Customer::whereDate('date', $date)->where('type','sm2')->orderByRaw('CONVERT(seat_id, DECIMAL) asc')->paginate(50);
        $type='sm2';
        $date=$request->date;
        $documentFileName = "fun.pdf";

        // Create the mPDF document
        $document = new PDF( [
            'mode' => 'utf-8',
            'format' => 'A4',
            'margin_header' => '3',
            'margin_top' => '20',
            'margin_bottom' => '20',
            'margin_footer' => '2',
                'default_font' => 'tharlon',

        ]);

        // Set some header informations for output
        $header = [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename="'.$documentFileName.'"'
        ];

        // Write some simple Content

        $document->WriteHTML(view('admin.print.detail',[
            'customers'=>$customers,
            'type'=>$type,
            'date'=>$date,
        ]));

        // Save PDF on your public storage
        Storage::disk('public')->put($documentFileName, $document->Output($documentFileName, "S"));

        // Get file back from storage with the give header informations
        return Storage::disk('public')->download($documentFileName, 'Request', $header);

    }

}
