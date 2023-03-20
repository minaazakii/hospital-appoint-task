@extends('layouts.app')


@section('content')
<div style="margin-top:20px;" class="col-md-8 m-x-auto pull-xs-none vamiddle ">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <i class="fa fa-align-justify"></i> Appointments
                </div>
                <div class="card-block">
                    <table class="table table-bordered table-striped table-condensed">
                        <thead>
                            <tr>
                                <th>Username</th>
                                <th>Date of Appointment</th>
                                <th>Time of Appointment</th>
                                <th>Speciality</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($appointments as $appointment)
                                <tr>
                                    <td>{{ $appointment->user->id == auth()->id() ? 'Me' : $appointment->user->name }}
                                    </td>
                                    <td>{{ $appointment->date }}</td>
                                    <td>{{ $appointment->time }}</td>
                                    <td>{{ $appointment->speciality->title }}</td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!--/col-->
    </div>
</div>
@endsection
