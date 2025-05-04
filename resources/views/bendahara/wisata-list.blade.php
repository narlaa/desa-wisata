@extends('be.master')
@section('content')
<hr class="border-light container-m--x my-4">
<h4 class="text-muted font-weight-bold py-3 my-4">Penglipuran Wisata List</h4>
<div class="col-md-6 ml-3">
    <button type="button" class="btn btn-round btn-outline-info">+ Add</button>
</div>
<div class="mt-4" style="margin-left: 10px;">
    <div class="card">
            <table class="table card-table">
                <thead class="thead-light">
                    <tr>
                        <th>No</th>
                        <th>Judul</th>
                        <th>Fasilitas</th>
                        <th>Harga</th>
                        <th>Foto1</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td>1</td>
                        <td class="p-0 text-center align-middle">
                <button type="button" class="btn btn-round btn-outline-warning">Edit</button></td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                            <td>1</td>
                            <td class="p-0 text-center align-middle">
                <button type="button" class="btn btn-round btn-outline-warning">Edit</button></td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                            <td>1</td>
                            <td class="p-0 text-center align-middle">
                <button type="button" class="btn btn-round btn-outline-warning">Edit</button></td>
                    </tr>
                </tbody>
            </table>
    </div>
</div>
                            
@endsection