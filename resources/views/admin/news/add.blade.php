@extends('admin.master')

@section('title', 'Create News')

@section('body')
    <div class="container-fluid page-body-wrapper">
        <section class="py-5">
            <div class="container">
                <div class="row">
                    <div class="col md-12 mx-auto">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="text-center text-light">Add News</h3>
                            </div>
                            <div class="card-body">
                                <div class="text-center">
                                    <h5 class="text-success">
                                        {{Session::get('success')}}
                                    </h5>
                                </div>
                                <form action="{{ route('create.news') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row mt-3">
                                        <label class="col-md-4">Title</label>
                                        <div class="col-md-8">
                                            <input type="text" name="title" id="" class="form-control bg-white text-dark" placeholder="write the name">
                                        </div>
                                    </div>

                                    <div class="row mt-3">
                                        <label class="col-md-4">Author</label>
                                        <div class="col-md-8">
                                            <input type="text" name="name" id="" class="form-control bg-white text-dark" placeholder="write the name">
                                        </div>
                                    </div>

                                    <div class="row mt-3">
                                        <label class="col-md-4">date</label>
                                        <div class="col-md-8">
                                            <input type="text" name="date" id="" class="form-control bg-white text-dark" placeholder="write the name">
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <label class="col-md-4" >Description</label>
                                        <div class="col-md-8">
                                            <textarea name="description" id="" cols="30" rows="10" class="bg-white text-dark form-control"></textarea>
                                        </div>
                                    </div>

                                    <div class="row mt-3">
                                        <label class="col-md-4">Image</label>
                                        <div class="col-md-8">
                                            <input type="file" name="image" id="" class="form-control" accept="image/*">
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <label class="col-md-4">Author Image</label>
                                        <div class="col-md-8">
                                            <input type="file" name="author_image" id="" class="form-control" accept="image/*">
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <label class="col-md-4">status</label>
                                        <div class="col-md-8">
                                            <label for=""><input type="radio" name="status" value="1" checked /> Published</label>
                                            <label for=""><input type="radio" name="status" value="0" /> Unpublished</label>
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

