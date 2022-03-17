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
        $record = DB::table('views')
            ->select('data_views as date',DB::raw('count(*) as amount'))
            ->where('apartment_id', $apartment -> id)
            ->groupBy('date')
            ->orderBy('date')
            ->get();
        // $messages = Message::where('apartment_id', $apartment -> id)->get();
        $data = [];
        dd($record);
        foreach($record as $row) {
            $data['label'][] = $row->date;
            $data['data'][] = (int) $row->amount;
          }
        // dd($dataM, $dataV);
        // dd($data);
        $data['data'] = json_encode($data);
        // $dataM['dataM'] = json_encode($dataM);
        return view('pages.chart', $data , compact('apartment') );
    }
}
