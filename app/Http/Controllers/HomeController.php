<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Seat;
use App\Models\Customer;

use Carbon\Carbon;
use Illuminate\Support\Facades\Auth ;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
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
        $ms_date6=Seat::where('ms_date1', '<', Carbon::now()->subDays(1))->paginate(50);
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
        $ms2_date6=Seat::where('ms2_date1', '<', Carbon::now()->subDays(1))->paginate(50);
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
        $sm_date1=Seat::where('ms2_date1', '<', Carbon::now()->subDays(1))->paginate(50);
        if($sm_date1 != null){
            for ($count = 0; $count < count($sm_date1) ; $count++){
            $sm_date1[$count]->sm_date1 = null;
            $sm_date1[$count]->update();
        }
        }
        $sm_date2=Seat::where('ms2_date2', '<', Carbon::now()->subDays(1))->paginate(50);
        if($sm_date2 != null){
            for ($count = 0; $count < count($sm_date2) ; $count++){
            $sm_date2[$count]->sm_date2 = null;
            $sm_date2[$count]->update();
        }
        }
        $sm_date3=Seat::where('ms2_date3', '<', Carbon::now()->subDays(1))->paginate(50);
        if($sm_date3 != null){
            for ($count = 0; $count < count($sm_date3) ; $count++){
            $sm_date3[$count]->sm_date1 = null;
            $sm_date3[$count]->update();
        }
        }
        $sm_date4=Seat::where('ms2_date4', '<', Carbon::now()->subDays(1))->paginate(50);
        if($sm_date4 != null){
            for ($count = 0; $count < count($sm_date4) ; $count++){
            $sm_date4[$count]->sm_date4 = null;
            $sm_date4[$count]->update();
        }
        }
        $sm_date5=Seat::where('ms2_date5', '<', Carbon::now()->subDays(1))->paginate(50);
        if($sm_date5 != null){
            for ($count = 0; $count < count($sm_date5) ; $count++){
            $sm_date5[$count]->sm_date5 = null;
            $sm_date5[$count]->update();
        }
        }
        $sm_date6=Seat::where('ms2_date1', '<', Carbon::now()->subDays(1))->paginate(50);
        if($sm_date6 != null){
            for ($count = 0; $count < count($sm_date6) ; $count++){
            $sm_date6[$count]->sm_date6 = null;
            $sm_date6[$count]->update();
        }
        }
        $sm_date7=Seat::where('ms2_date7', '<', Carbon::now()->subDays(1))->paginate(50);
        if($sm_date7 != null){
            for ($count = 0; $count < count($sm_date7) ; $count++){
            $sm_date7[$count]->sm_date7 = null;
            $sm_date7[$count]->update();
        }
        }
        $sm2_date1=Seat::where('ms2_date1', '<', Carbon::now()->subDays(1))->paginate(50);
        if($sm2_date1 != null){
            for ($count = 0; $count < count($sm2_date1) ; $count++){
            $sm2_date1[$count]->sm2_date1 = null;
            $sm2_date1[$count]->update();
        }
        }
        $sm2_date2=Seat::where('ms2_date2', '<', Carbon::now()->subDays(1))->paginate(50);
        if($sm2_date2 != null){
            for ($count = 0; $count < count($sm2_date2) ; $count++){
            $sm2_date2[$count]->sm2_date2 = null;
            $sm2_date2[$count]->update();
        }
        }
        $sm2_date3=Seat::where('ms2_date3', '<', Carbon::now()->subDays(1))->paginate(50);
        if($sm2_date3 != null){
            for ($count = 0; $count < count($sm2_date3) ; $count++){
            $sm2_date3[$count]->sm2_date1 = null;
            $sm2_date3[$count]->update();
        }
        }
        $sm2_date4=Seat::where('ms2_date4', '<', Carbon::now()->subDays(1))->paginate(50);
        if($sm2_date4 != null){
            for ($count = 0; $count < count($sm2_date4) ; $count++){
            $sm2_date4[$count]->sm2_date4 = null;
            $sm2_date4[$count]->update();
        }
        }
        $sm2_date5=Seat::where('ms2_date5', '<', Carbon::now()->subDays(1))->paginate(50);
        if($sm2_date5 != null){
            for ($count = 0; $count < count($sm2_date5) ; $count++){
            $sm2_date5[$count]->sm2_date5 = null;
            $sm2_date5[$count]->update();
        }
        }
        $sm2_date6=Seat::where('ms2_date1', '<', Carbon::now()->subDays(1))->paginate(50);
        if($sm2_date6 != null){
            for ($count = 0; $count < count($sm2_date6) ; $count++){
            $sm2_date6[$count]->sm2_date6 = null;
            $sm2_date6[$count]->update();
        }
        }
        $sm2_date7=Seat::where('ms2_date7', '<', Carbon::now()->subDays(1))->paginate(50);
        if($sm2_date7 != null){
            for ($count = 0; $count < count($sm2_date7) ; $count++){
            $sm2_date7[$count]->sm2_date7 = null;
            $sm2_date7[$count]->update();
        }
        }
        return view('home');
    }
}
