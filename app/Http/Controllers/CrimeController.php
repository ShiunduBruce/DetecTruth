<?php

namespace App\Http\Controllers;

use App\Models\Crime;
use App\Models\Location;
use App\Http\Requests\StoreCrimeRequest;
use App\Http\Requests\UpdateCrimeRequest;
use Auth;

class CrimeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create',[
            'types'=>['murder', 'sexual assault', 'online fraud', 'robbery', 'other'],
            'locations'=>Location::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCrimeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCrimeRequest $request)
    {
        $crime = Crime::create([
            'description' => $request->description,
            'location_id' => $request->location,
            'user_id' => Auth::user()->id,
            'type'=>$request->type,
            //approved or not
        ]);
        $crime->save();
        return redirect(route('crime.myReports'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Crime  $crime
     * @return \Illuminate\Http\Response
     */
    public function show(Crime $crime)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Crime  $crime
     * @return \Illuminate\Http\Response
     */
    public function edit(Crime $crime)
    {
        $crime = Crime::findOrFail($crime->id);

        abort_if($crime->user_id != Auth::id(), 404);

        return view("edit", [
            "crime"=> Crime::findOrFail($crime->id),
            'types'=>['murder', 'sexual assault', 'online fraud', 'robbery', 'other'],
            'locations'=>Location::all()
            ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCrimeRequest  $request
     * @param  \App\Models\Crime  $crime
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCrimeRequest $request, Crime $crime)
    {
        $crime =  Crime::findOrFail($crime->id);
        $crime->update([
            'description' => $request->description,
            'location_id' => $request->location,
            'user_id' => Auth::user()->id,
            'type'=>$request->type,
            'status'=>'pending'
            //approved or not
        ]);

        $crime->save();
        return redirect(route('crime.myReports'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Crime  $crime
     * @return \Illuminate\Http\Response
     */
    public function destroy(Crime $crime)
    {
        abort_if($crime->user_id != Auth::id(), 404);

        $crime = Crime::find($crime->id);
        $crime->delete();
        return redirect(route('crime.myReports'));

    }
    public function myReports()
    {
        return view('my-reports', [
            'murder'=>Crime::Where([['type','=', "murder"], ['user_id', '=', Auth::user()->id]])->count(),
            'robbery'=>Crime::Where([['type','=', "robbery"],['user_id', '=', Auth::user()->id]])->count(),
            'sexual_assault'=> Crime::Where([['type','=',"sexual assault"],['user_id', '=', Auth::user()->id]])->count(),
            'other'=> Crime::Where([['type','=', "other"],['user_id', '=', Auth::user()->id]])->count(),
            'reports'=>Crime::where('user_id', '=', Auth::user()->id)->take(10)->latest()->get()
         ]);
    }
    public function admin()
    {
        abort_if(!Auth::user()->isAdmin(), 404);

        return view('admin', [
            'murder'=>Crime::Where([['type','=', "murder"], ['status', '=', 'approved']])->count(),
            'robbery'=>Crime::Where([['type','=', "robbery"],['user_id', '=', 'approved']])->count(),
            'sexual_assault'=> Crime::Where([['type','=',"sexual assault"],['status', '=', 'approved']])->count(),
            'other'=> Crime::Where([['type','=', "other"],['status', '=', 'approved']])->count(),
            'pending_reports'=>Crime::where('status', '=', 'pending')->get()
         ]);
    }
    public function approve(Crime $crime)
    {
        abort_if(!Auth::user()->isAdmin(), 404);

        $crime = Crime::find($crime->id);
        $crime->status = 'approved';
        $crime->save();
        return redirect(route('crime.admin'));
    }
    public function reject(Crime $crime)
    {
        abort_if(!Auth::user()->isAdmin(), 404);

        $crime = Crime::find($crime->id);
        $crime->status = 'rejected';
        $crime->save();
        return redirect(route('crime.admin'));
    }
}
