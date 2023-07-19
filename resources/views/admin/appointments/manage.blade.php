@extends('admin.master')

@section("title","Manage Appointments")

@section('body')
    <div class=" page-body-wrapper">
        <section class="py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card mx-auto text-light ">
                            <div class="card-header">
                                <h3 class="text-center">Appointments</h3>
                            </div>
                            <div class="card-body">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>Patient Name</th>
                                        <th>Email</th>
                                        <th>Date</th>
                                        <th>D Name</th>
                                        <th>Speciality</th>
                                        <th>Phone</th>
                                        <th>message</th>
                                        <th>status</th>
                                        <th>Approve</th>
                                        <th>Cancel</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($appoints as $appoint)
                                        <tr>
                                            <td>{{ $appoint->name }}</td>
                                            <td>{{ $appoint->email }}</td>
                                            <td>{{ $appoint->date }}</td>
                                            <td>{{ $appoint->doctor }}</td>
                                            <td>{{ $appoint->speciality }}</td>
                                            <td>{{ $appoint->phone }}</td>
                                            <td>{{ $appoint->message }}</td>
                                            <td>{{ $appoint->status }}</td>
                                            <td>
                                                <a class="btn btn-success" href="">Approve</a>
                                            </td>
                                            <td>
                                                <a class="btn btn-success" href="">Cancel</a>
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

    </div>
@endsection




@section('body')
    <div class="container-fluid page-body-wrapper">
        <section class="py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="text-center">Manage Product</h3>
                            </div>
                            <div class="card-body">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Phone</th>
                                        <th>Speciality</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>

    </div>
@endsection


