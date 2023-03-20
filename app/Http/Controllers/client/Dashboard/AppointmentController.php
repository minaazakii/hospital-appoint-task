<?php

namespace App\Http\Controllers\client\Dashboard;

use App\helpers\TimeChecker;
use App\Http\Controllers\Controller;
use App\Http\Requests\client\appointment\StoreAppointRequest;
use App\Models\Speciality;
use App\Models\UserSpeciality;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function index()
    {
        $specialities = Speciality::all();
        $appointments = UserSpeciality::all();
        return view('client.appointment.index',
        [
            'appointments'=>$appointments,
            'specialities'=>$specialities
        ]);
    }
    public function create()
    {
        $specialities = Speciality::all();
        return view('client.appointment.create',
        [
            'specialities' => $specialities
        ]);
    }
    public function store(StoreAppointRequest $request)
    {
        // dd($request->date,$request->time);
        $userSpeciality = UserSpeciality::where('user_id',auth()->id())
        ->where('speciality_id',$request->speciality_id)
        ->first();
        if($userSpeciality)
        {
            return back()->with('error','You already have a speciality reserved wait till Your Current one is Finished.');
        }

        if(!TimeChecker::InRange($request->time))
        {
            return back()->with('error','Appointment Time Between 12 PM and 9 PM');
        }
        $userSpeciality = UserSpeciality::create(
            [
                'user_id'=>auth()->id(),
                'speciality_id'=>$request->speciality_id,
                'date'=>$request->date,
                'time'=>$request->time,
            ]);
        return back()->with('success','Appointment Added Successfully');
    }
    public function searchAppointment(Request $request)
    {
        $appointments = UserSpeciality::where('date',$request->date)
        ->where('speciality_id',$request->speciality_id)
        ->get();
        return view('client.appointment.search',
        [
            'appointments'=>$appointments,
        ]);

    }
}
