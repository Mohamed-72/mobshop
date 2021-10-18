<?php

namespace App\Http\Controllers;
use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function show()
    {
        return view('slider');
    }

    public function store(Request $request)
    {

        $slider = new Slider;

        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('images/slider/', $filename);
            $slider->image = $filename;
        }
        $slider->save();

        return redirect()->route('sliderindex');

    }

    public function sliderindexx()
    {
        $showDetails = Slider::all();
        // dd($showDetails);

        return view('slidertable', ['showdetails'=>$showDetails]);
    }


    public function destrooy($imgid)
    {
        Slider::find($imgid)->delete();
       
        return redirect()->route('sliderindex');
    }
}
