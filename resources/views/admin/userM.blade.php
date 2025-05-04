@extends('be.master')
@section('content')
<hr class="border-light container-m--x my-4">
<h4 class="text-muted font-weight-bold py-3 my-4">Penglipuran Users</h4>
<div class="d-flex mb-3 mr-6">
    <button type="button" class="btn btn-round btn-outline-info"><i class="feather icon-plus-circle mr-2"></i>Add User</button>
</div>
<table class="table table-hover">
    <thead>
        <tr>
            <th>#</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Username</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            <td class="p-0 text-center align-middle">
                <button type="button" class="btn btn-round btn-outline-warning">Edit</button></td>
            </td>
            <td class="p-0 text-center align-middle">
                <button type="button" class="btn btn-round btn-outline-dark">Non-aktifkan</button>
            </td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
            <td class="p-0 text-center align-middle">
                <button type="button" class="btn btn-round btn-outline-warning">Edit</button></td>
            </td>
            <td class="p-0 text-center align-middle">
                <button type="button" class="btn btn-round btn-outline-dark">Non-aktifkan</button>
            </td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td colspan="2">Larry the Bird</td>
            <td>@twitter</td>
            <td class="p-0 text-center align-middle">
                <button type="button" class="btn btn-round btn-outline-warning">Edit</button></td>
            </td>
            <td class="p-0 text-center align-middle">
                <button type="button" class="btn btn-round btn-outline-dark">Non-aktifkan</button>
            </td>
        </tr>
    </tbody>
</table>
@endsection