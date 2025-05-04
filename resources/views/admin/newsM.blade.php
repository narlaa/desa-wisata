@extends('be.master')
@section('content')
<div class="col-md-6">
    <div class="card mb-4">
        <div class="card-body">
            <div class="d-flex align-items-center justify-content-between">
                <div class="">
                    <h2 class="mb-2"> 256 </h2>
                        <p class="text-muted mb-0"><span class="badge badge-primary">News Upload</span> Today</p>
                </div>
                <div class="feather icon-bar-chart-2 display-4 text-primary"></div>
            </div>
        </div>
    </div>
    <button type="button" class="btn btn-round btn-outline-info">+ Add</button>
</div>
<div class="mt-4" style="margin-left: 10px;">
    <div class="card">
        <div class="card-header">Penglipuran News</div>
            <table class="table card-table">
                <thead class="thead-light">
                    <tr>
                        <th>#</th>
                        <th>Judul</th>
                        <th>Tanggal</th>
                        <th>Deskripi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                    </tr>
                </tbody>
            </table>
    </div>
</div>
                            
@endsection