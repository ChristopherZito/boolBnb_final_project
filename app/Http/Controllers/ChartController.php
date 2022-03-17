<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Apartment;
use App\View;
use App\Message;
use Carbon\Carbon;
class ChartController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function chart($id){
        $record = DB::table('users')->all()->get();

        $record = select(\DB::raw("COUNT(*) as count"), \DB::raw("DAYNAME(created_at) as day_name"), \DB::raw("DAY(created_at) as day"))
            ->where('created_at', '>', Carbon::today()->subDay(60))
            ->groupBy('day_name','day')
            ->orderBy('day')
            ->get();
        dd($record);
        $apartment = Apartment::findOrFail($id);
        $messages = Message::where('apartment_id', $apartment -> id)->get();
        $views = View::where('apartment_id', $apartment -> id)->get();

        // $record = View::where('apartment_id', $apartment -> id)
        //     ->groupBy('data_views')
        //     ->orderBy('data_views')
        //     ->get();

        //     dd($record);
        // $data = [];
        // dd($views);
        $a = [180,23,32,64,87];
        $dataM['data'][] = $a;

        $b = [40,10,5,40,70];
        $dataV['data'][] = $b;
        
        // dd($dataM, $dataV);
        $dataV['dataV'] = json_encode($dataV);
        $dataM['dataM'] = json_encode($dataM);
        return view('pages.chart', $dataV , $dataM , compact('apartment') );
    }
}
