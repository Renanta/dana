@extends('layouts.master')
@section('title', 'Admin - Dashboard')
@section('title-content', 'Dashboard Admin')
<x-navbar></x-navbar>

<x-sidebar></x-sidebar>
@section('content')

<div class="row">
    <div class="col-12 col-sm-12 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4>Tabel Event</h4>
            </div>
            <div class="card-body">
                <div class="card">
                    @if(session('success'))
                    <div class="alert alert-success alert-dismissible show fade">

                        <div class="alert-body">
                            <button class="close" data-dismiss="alert">
                                <span>&times;</span>
                            </button>
                            {{ session ('success')}}
                        </div>
                    </div>
                    @endif <div class="card-header">
                        <a href="{{route('admin.create')}}" class="btn btn-primary">Tambah Data Event</a>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-striped table-md">
                                <tr>
                                    <th>No</th>
                                    <th>Event</th>
                                    <th>Desc</th>
                                    <th>Thumbnail</th>
                                    <th>Action</th>
                                </tr>
                                @foreach($events as $event)
                                <tr>
                                    <td>{{ $events->count() * ($events->currentPage() - 1) + $loop ->  iteration }}</td>
                                    <td>{{ $event -> name }}</td>
                                    <td>{{ $event -> desc }}</td>
                                    <td><img src="{{asset('storage/event/'.$event->thumbnail)}}" alt="" class="img-fluid" style="height: 100px; widht:100px;"></td>
                                    <td>
                                        <a href="{{route('admin.edit', $event->slug)}}" class="btn btn-primary">Edit</a>
                                        <a href="{{route('admin.destroy', $event->slug)}}" class="button delete-confirm btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                                @endforeach

                            </table>
                            {{ $events -> links()}}

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection