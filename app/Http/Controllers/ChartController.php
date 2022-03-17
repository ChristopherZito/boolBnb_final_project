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
        $apartment = Apartment::findOrFail($id);
        $today = date("Y-m-d");
        $views = DB::table('views')
            ->select('data_views as date',DB::raw('count(*) as amount'))
            ->where('apartment_id', $apartment -> id)
            ->groupBy('date')
            ->orderBy('date')
            ->get();
        $messages =  DB::table('messages')
            ->select('created_at as date',DB::raw('count(*) as amount'))
            ->where('apartment_id', $apartment -> id , 'date' == $today)
            ->groupBy('date')
            ->orderBy('date')
            ->get();

        // dd($views, $messages);
        $data = [];
        foreach($views as $rowV) {
            $data['label'][] = $rowV->date;
            $data['data']['view'][] = (int) $rowV->amount;
        }
        foreach($messages as $rowM) {
            if ($data['label'] == $rowM->date) {
                $data['label'][] = $rowM->date;
            }
            $data['data']['message'][] = (int) $rowM->amount;
        }

        // dd($data);
        $data['chart'] = json_encode($data);
        return view('pages.chart', $data , compact('apartment') );
    }
}
