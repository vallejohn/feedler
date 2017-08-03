@extends('master')

@section('content')
    <div class="col-lg-8 offset-2">
        <div class="card">
            <div class="card-header">
                Create
            </div>
            <div class="card-block">
                <form action="/posts" method="post">

                    {{ csrf_field() }}

                    <div class="form-group row">
                        <label for="type" class="col-sm-2 col-form-label">Type</label>
                        <div class="col-sm-10">
                            <select class="custom-select mb-2 mr-sm-2 mb-sm-0" id="type" name="type_id" required>
                                <option value="">Choose...</option>
                                @foreach ($types as $type)
                                    <option value="{{ $type->id }}">{{ $type->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="title" class="col-sm-2 col-form-label">Title</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="title" name="title" placeholder="Title" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="subtitle" class="col-sm-2 col-form-label">Subtitle</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="subtitle" name="subtitle" placeholder="Subtitle">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="category" class="col-sm-2 col-form-label">Category</label>
                        <div class="col-sm-10">
                            <select class="custom-select mb-2 mr-sm-2 mb-sm-0" id="category" name="category_id" required>
                                <option value="">Choose...</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <textarea class="form-control" placeholder="Content Here" id="exampleTextarea" rows="3" name="body" required></textarea>
                    </div>

                    <div class="d-flex justify-content-end">
                        <div class="form-group ml-2">
                            <button type="submit" class="btn btn-success">Publish</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection
