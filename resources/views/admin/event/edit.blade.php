@extends('layouts.master')
@section('title', 'create - event')
@section('title-content', 'Edit Data Event')
<x-navbar></x-navbar>

<x-sidebar></x-sidebar>
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4>Masukkan data</h4>
            </div>
            <div class="card-body">

                <form action="{{route('admin.edit', $event)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama Event</label>
                        <div class="col-sm-12 col-md-7">
                            <input type="text" name="name" id="name" class="form-control" value="{{$event->name}}">
                            @error('name')
                            <div class="mt-2 text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Thumbnail</label>
                        <div class="col-sm-12 col-md-7">
                            <input type="file" name="file" id="file" class="form-control">
                            @error('file')
                            <div class="mt-2 text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Deskripsi</label>
                        <div class="col-sm-12 col-md-7">
                            <textarea class="form-control" rows="5" name="desc">{{ $event->desc}}</textarea>
                            @error('desc')
                            <div class="mt-2 text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                        <div class="col-sm-12 col-md-7">
                            <button class="btn btn-primary" type="submit">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection