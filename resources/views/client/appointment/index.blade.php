@extends('layouts.app')


@section('content')
    <div style="margin-top:20px;" class="col-md-8 m-x-auto pull-xs-none vamiddle ">
        @if (auth()->user()->is_admin == 1)
            <div class="card">
                <div class="card-header">
                    <strong>Search</strong>
                </div>
                <div class="card-block">
                    <form action="{{ route('client.appointment.search') }}">
                        @csrf
                        <div class="row">

                            <div class="form-group col-sm-6">
                                <label for="ccmonth">Speciality</label>
                                <select name="speciality_id" class="form-control" id="ccmonth">
                                    <option selected disabled>Select Speciality</option>
                                    @foreach ($specialities as $speciality)
                                        <option value="{{ $speciality->id }}">{{ $speciality->title }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-sm-6">

                                <div class="form-group">
                                    <label>Date</label>
                                    <input name="date" type="date" class="form-control">
                                </div>

                            </div>

                            <div class="col-sm-12">
                                <button class="btn btn-primary">Search</button>
                            </div>

                        </div>
                    </form>
                    <!--/row-->
                </div>
            </div>
        @endif

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
                                        @if (auth()->user()->is_admin == 1 || auth()->id() == $appointment->user_id)
                                            <td>{{ $appointment->user_id == auth()->id() ? 'Me' : $appointment->user->name }}
                                            </td>
                                            <td>{{ $appointment->date }}</td>
                                            <td>{{ $appointment->time }}</td>
                                            <td>{{ $appointment->speciality->title }}</td>
                                        @endif
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
