<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $appointments = Appointment::all();
        return view("admin.appointments.index", compact("appointments"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "first_name" => 'required',
            "last_name" => 'required',
            "phone" => 'required',
            "street_name" => 'required',
            "house_number" => 'required',
            "postal_code" => 'required',
            "city" => 'required',
            "number_hours" => 'required|integer',
            "date" => 'required|date',
            "hours" => 'required|integer',
            "minutes" => 'required',
        ]);
        $date = date_create($request->date);
        $date->setTime(intval($request->hours), intval($request->minutes), 0);
        // dd($request->all());
        $appointment = Appointment::create([
            "first_name" => $request->first_name,
            "last_name" => $request->last_name,
            "phone" => $request->phone,
            "email" => $request->email,
            "street_name" => $request->street_name,
            "house_number" => $request->house_number,
            "postal_code" => $request->postal_code,
            "city" => $request->city,
            "number_hours" => $request->number_hours,
            "datetime" => $date,
            "is_paid" => false,
            "status" => "new"
        ]);
        return redirect()->route('thankyou');
    }

    /**
     * Display the specified resource.
     */
    public function show(Appointment $appointment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Appointment $appointment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Appointment $appointment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Appointment $appointment)
    {
        //
    }
}
