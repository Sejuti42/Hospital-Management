@extends('user.master')

@section('title','Show Appointments')

@section('body')
    <section class="py-5" >
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="card">
                        <div class="card-header text-center">
                            <h3>My Appointment</h3>
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>Doctor</th>
                                    <th>date</th>
                                    <th>Message</th>
                                    <th>Status</th>
                                    <th>Appointment</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($appoints as $appoint)
                                    <tr>
                                        <td>{{ $appoint->doctor }}</td>
                                        <td>{{ $appoint->date }}</td>
                                        <td>{{ $appoint->message }}</td>
                                        <td>{{ $appoint->status }}</td>
                                        <td>
                                            <a href="" class="btn btn-danger">cancle</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
