@extends('layouts.app')

@section('active','active')

@section('title','Transaksi')

@section('content')

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Reservator / Transaksi</h1>

    </div>

    <!-- Content Row -->
    <div class="row">

        <div class="col-md-12">
            <div class="my-2">
                <form action="/laporan/filter-tanggal" method="GET">
                    <div class="input-group mb-3">
                        <input type="date" class="form-control" name="start_date">
                        <input type="date" class="form-control" name="end_date">
                        <button class="btn btn-primary" type="submit">GET</button>
                    </div>
                </form>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Date</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $key => $data)
                    <tr>
                        <th scope="row">{{ ++$key }}</th>
                        <td>{{ $data->name }}</td>
                        <td>{{ $data->email }}</td>
                        <td>{{ $data->created_at }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>


</div>

@endsection




