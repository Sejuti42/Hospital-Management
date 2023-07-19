@extends('admin.master')

@section("title","Manage Product")

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
                                    <th>Room N.</th>
                                    <th>D. Image</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($doctors as $doctor)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $doctor->name }}</td>
                                        <td>{{ $doctor->number }}</td>
                                        <td>{{ $doctor->speciality }}</td>
                                        <td>{{ $doctor->room }}</td>
                                        <td>
                                            <img src="{{ asset($doctor->image) }}" alt="" style=" height: 90px; width: 100px ">
                                        </td>

                                        <td>
                                            <a href="{{ route('doctor.edit', ['id' => $doctor->id]) }}" class="btn btn-success">edit</a>
                                            <a href="{{ route('doctor.delete', ['id' => $doctor->id]) }}" class="btn btn-warning">delete</a>
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


