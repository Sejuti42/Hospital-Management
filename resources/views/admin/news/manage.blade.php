@extends('admin.master')

@section("title","Manage Blogs")

@section('body')
    <div class="container-fluid page-body-wrapper">
        <section class="py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="text-center">Manage Blogs</h3>
                            </div>
                            <div class="card-body">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Title</th>
                                        <th>Name</th>
                                        <th>Date</th>
                                        <th>Description</th>
                                        <th>Image</th>
                                        <th>Author Image</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($allnews as $news)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $news->title }}</td>
                                            <td>{{ $news->name }}</td>
                                            <td>{{ $news->date }}</td>
                                            <td>{{ $news->description }}</td>
                                            <td>
                                                <img src="{{ asset($news->image) }}" alt="" style="height: 80px">

                                            <td>
                                                <img src="{{ asset($news->author_image) }}" alt="" style="height: 80px">
                                            </td>
                                            <td>{{ $news->status == 1 ? 'Published' : 'Unpublished' }}</td>
                                            <td>
                                                <a href="{{ route('edit.news', ['id' => $news->id]) }}" class="btn btn-warning">edit</a>
                                                <a href="{{ route('delete.news', ['id' => $news->id]) }}" class="btn btn-danger">delete</a>
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


