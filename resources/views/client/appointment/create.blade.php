@extends('layouts.app')


@section('content')
    <div style="margin-top:20px;" class="col-md-8 m-x-auto pull-xs-none vamiddle ">
        <div class="card">

            <form action="{{ route('client.appointment.store') }}" method="POST">
                @csrf
                <div class="card-header">
                    <strong>Appointment</strong>
                    <small>Card</small>
                </div>
                <div class="card-block">
                    <div class="row">
                        <div class="col-sm-12">
                            @foreach ($errors->all() as $error)
                                <p class="text-danger">{{ $error }}</p>
                            @endforeach

                        </div>

                        <div class="col-sm-12">

                            <div class="form-group">
                                <label for="name">Your Name</label>
                                <input readonly type="text" class="form-control" value="{{ auth()->user()->name }}">
                            </div>

                        </div>

                        <div class="col-sm-12">

                            <div class="form-group">
                                <label for="ccnumber">Your Email</label>
                                <input type="text" class="form-control" readonly value="{{ auth()->user()->email }}">
                            </div>

                        </div>

                        <div class="form-group col-sm-6">
                            <label for="ccmonth">Speciality</label>
                            <select name="speciality_id" class="form-control">
                                <option selected disabled>Select Speciality </option>
                                @foreach ($specialities as $speciality)
                                    <option value="{{ $speciality->id }}">{{ $speciality->title }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-sm-3">

                            <div class="form-group">
                                <label for="cvv">Date </label>
                                <input type="date" class="form-control" name="date" placeholder="123">
                            </div>

                        </div>

                        <div class="col-sm-3">

                            <div class="form-group">
                                <label for="cvv">Time </label>
                                <input type="time" class="form-control" name="time" placeholder="123">
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <button type="submit" class="btn btn-primary">Add Appointment</button>
                        </div>

                    </div>

                </div>
            </form>
        </div>
    </div>
@endsection
