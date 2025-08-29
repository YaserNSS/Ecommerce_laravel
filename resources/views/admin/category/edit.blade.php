@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-header">
                <h3>
                    Edit Category
                <a href="{{url('admin/category')}}" class="btn btn-primary btn-sm text-white float-end">back</a>
                </h3>
            </div>
            <div class="card-body">

            <form action=" {{ url('admin/category/'.$category->id)}}" enctype="multipart/form-data" method="POST">
                @csrf
                @method('PUT')
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="">Name</label>
                            <input type="text" name="name" value="{{ $category->name}}" class="form-control">
                                @error('name') <small class="text-danger">{{$message}}</small>@enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Slug</label>
                            <input type="text" name="slug" value="{{ $category->slug}}"  class="form-control">
                            @error('slug') <small class="text-danger">{{$message}}</small>@enderror
                        </div>
                        <div class="col-md-12 mb-3">
                                <label for="">Description</label>
                                <textarea type="text" name="description" class="form-control" rows="3">{{ $category->description}} </textarea>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Image</label><br>
                            <img src="{{ asset('/upload/category/'.$category->image)}}" alt="" width="60" height="60">
                            <input type="file" name="image" class="form-control">
                        </div>
                        <div class="col-md-6 mb-3">
                                <label for="">Status</label>
                                <input type="checkbox" name="status" {{ $category->status == '1' ? 'checked' : ''}}>
                        </div>
                        <div class="col-md-12">
                            <h4>SEO Tags</h4>
                        </div>
                        <div class="col-md-6 mb-3">
                                <label for="">Meta Title</label>
                                <input type="text" name="meta_title" class="form-control" value="{{ $category->meta_title}}">
                        </div>
                        <div class="col-md-12 mb-3">
                                <label for="">Meta Keyword</label>
                                <textarea type="text" name="meta_keyword" class="form-control" rows="3">{{ $category->meta_keyword}}</textarea>
                        </div>
                        <div class="col-md-12 mb-3">
                                <label for="">Meta Description</label>
                                <textarea type="text" name="meta_description" class="form-control" rows="3">{{ $category->meta_description}}</textarea>
                        </div>
                        <div class="col-md-12 mb-3">
                            <button type="submit" class="btn btn-primary float-end">Update</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>

@endsection
