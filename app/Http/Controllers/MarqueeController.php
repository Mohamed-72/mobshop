<?php

namespace App\Http\Controllers;
use App\Models\Marquee;
use Illuminate\Http\Request;

class MarqueeController extends Controller
{
    public function show()
    {
        return view('marquee');
    }

    public function store(Request $request)
    {

        $marquee = new Marquee;

        $marquee->comment = $request->input('comment');

        $marquee->save();

        return redirect()->route('marqueeindex');

    }

    public function marqueeindex()
    {
        $showDetails = Marquee::all();
        // dd($showDetails);

        return view('marqueetable', ['showdetails'=>$showDetails]);
    }

    public function destroy($commentid)
    {
        Marquee::find($commentid)->delete();
       
        return redirect()->route('marqueeindex');
    }

}
