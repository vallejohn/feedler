@extends('manage_master')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card mb-3">
                <div class="card-header">
                    <i class="fa fa-table"></i> Posts
                </div>
                <div class="card-block">
                    <div class="table-responsive">
                        <div id="dataTable_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                            <div class="row">
                                <div class="col-sm-12">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th>Title</th>
                                            <th>Category</th>
                                            <th>Created</th>
                                            <th>Actions</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($posts as $post)
                                            <tr>
                                                <td>{{$post->title}}</td>
                                                <td>{{$post->category->name}}</td>
                                                <td>{{$post->created_at->diffForHumans()}}</td>
                                                <td><a href="#">View</a> &nbsp
                                                    <a href="#">Edit</a> &nbsp
                                                    <a href="#">Delete</a>
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
                <div class="card-footer small text-muted">
                    Updated yesterday at 11:59 PM
                </div>
            </div>
        </div>
    </div>
@endsection