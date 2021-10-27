<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\validator;


class EventController extends Controller
{
    

    public function Show(Request $request)
    {

        $eventData = DB::table('event')->get();
       
        return view('eventlist',compact('eventData'));
    }

    public function view(Request $request)
    {
        return view('addevent');
    }

    public function storeevent(Request $request)
    {
        $validator = validator::make($request->all(),[
            'title' => 'required',
            'sdate' => 'required|date|before:end_date',
            'edate' => 'required|date|after:start_date',
           
        ],[
            'sdate' => 'start date is not big then end date',
            'edate' => 'end date is not small then start date'
        ]);
        $eventTitle = $request->title;
        $startDate = $request->sdate;
        $endDate = $request->edate;
        $recurrence1 = $request->msection;
        $recurrence2 = $request->dsection;

        $eventStore = array(
            'event_title' => $eventTitle,
            'start_date' => $startDate,
            'end_date' => $endDate,
            'recurrence_1' => $recurrence1,
            'recurrence_2' => $recurrence2,
        );
       
        DB::table('event')->insert($eventStore);
        
        return redirect('/');
    }

    public function event($id)
    {
        $eventData = DB::table('event')->where('id',$id)->first();

        $start = $eventData->start_date;
        $endDate = $eventData->end_date;

        
        return view('eventview',compact('eventData'));
    }
}
