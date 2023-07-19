@extends('admin.master')

@section('title', 'Create Doctor')

@section('body')
    <div class="container-fluid page-body-wrapper">
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col md-12 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="text-center text-light">Add Doctor</h3>
                        </div>
                        <div class="card-body">
                            <div class="text-center">
                                <h5 class="text-success">
                                    {{Session::get('success')}}
                                </h5>
                            </div>
                            <form action="{{ route('doctor.create') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row mt-3">
                                    <label class="col-md-4">Doctor Name</label>
                                    <div class="col-md-8">
                                        <input type="text" name="name" id="" class="form-control" placeholder="write the name">
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <label class="col-md-4">Phone</label>
                                    <div class="col-md-8">
                                        <input type="number" name="number" id="" class="form-control bg-white" placeholder="write the name">
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <label class="col-md-4">Speciality</label>
                                    <div class="col-md-8">
                                        <select name="speciality" id="" class="form-control bg-white" >
                                            <option value="">--- Select a Option---</option>
                                            <option value="">Skin</option>
                                            <option value="">Heart</option>
                                            <option value="">Eye</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <label class="col-md-4">Room No</label>
                                    <div class="col-md-8">
                                        <input type="text" name="room" id="" class="form-control bg-white" placeholder="write the name">
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <label class="col-md-4">Doctor Image</label>
                                    <div class="col-md-8">
                                        <input type="file" name="image" id="" class="form-control" accept="image/*">
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label class="col-md-4"></label>
                                    <div class="col-md-8">
                                        <input type="submit" id="" class="btn btn-success" value="Add Product">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </div>
@endsection
