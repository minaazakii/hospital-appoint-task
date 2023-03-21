<?php

namespace App\Http\Controllers\Api;

use App\helpers\TimeChecker;
use Illuminate\Http\Request;
use App\Models\UserSpeciality;
use App\Http\Controllers\Controller;
use App\Http\Requests\api\UserSpecialityStore;

class AppointmentController extends Controller
{

    public function index()
    {
        $appointements = UserSpeciality::all();
        return response()->json($appointements);
    }
    public function store(UserSpecialityStore $request)
    {
        if (!TimeChecker::InRange($request->time)) {
            return response()->json(['error' => 'Appointment Time Between 12 PM and 9 PM']);
        }

        $appointment = UserSpeciality::create(
            [
                'user_id' => $request->user_id,
                'speciality_id' => $request->speciality_id,
                'date' => $request->date,
                'time' => $request->time,
            ]
        );
        return response()->json(['appointment' => $appointment]);
    }

    public function show($id)
    {
        $appointment = UserSpeciality::find($id);
        return response()->json($appointment);
    }


    public function update(Request $request, $id)
    {
        if (!TimeChecker::InRange($request->time)) {
            return response()->json(['error' => 'Appointment Time Between 12 PM and 9 PM']);
        }
        $appointment = UserSpeciality::find($id);
        $appointment->update(
            [
                'speciality_id' => $request->speciality_id,
                'date' => $request->date,
                'time' => $request->time,
            ]
        );
        return response()->json(['appointment' => $appointment]);
    }


    public function destroy($id)
    {
        $appointment = UserSpeciality::find($id);
        $appointment->delete();
        return response()->json('Deleted Successfully');
    }
}
