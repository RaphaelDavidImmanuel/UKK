@extends('layouts.partials.main')

@section('container')
<div class="card">
    <div class="row">
        <div class="col-6">
            <h5 class="card-header">Pemesanan</h5>
        </div>
        <div class="col-6 p-3 d-flex justify-content-end">
            <div class="d-flex me-2">
                {{-- Search --}}
                <form action="{{ url('/kamar') }}" method="GET" class="me-2 me-lg-3">
                    <div class="input-group input-group-merge">
                        <span class="input-group-text" id="basic-addon-search31"><i class="bx bx-search"></i></span>
                        <input type="search" name="search" class="form-control" placeholder="Search..."
                            aria-label="Search..." aria-describedby="basic-addon-search31"
                            value="{{ request('search') }}" />
                    </div>
                </form>
                {{-- End Search --}}
                <!-- Button  create -->
                <button type="button" class="btn btn-primary text-uppercase" data-bs-toggle="modal"
                    data-bs-target="#modalCenter">
                    Add
                </button>
            </div>
        </div>
    </div>
    <div class="table-responsive text-nowrap">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Customer</th>
                    <th>No Kamar</th>
                    <th>Tipe Kamar</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                @foreach ($data as $index => $row)
                <tr>
                    <th scope="row">{{ $index + $data->firstItem() }}</th>
                    <td>{{ $row->no_kamar }}</td>
                    <td>{{ $row->harga }}</td>
                    <td>{{ $row->tipe }}</td>
                    <td class="d-flex">
                        <div class="me-2">
                            <!-- Button trigger modal -->
                            <a href="{{ ('kamar/'.$row->id.'/edit') }}" class="btn btn-warning btn-sm">
                                <i class='bx bxs-edit-alt'></i></a>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-end mt-2 me-lg-3 me-2">
            {{ $data->onEachSide(1)->links() }}
        </div>
    </div>
</div>

{{-- modal tambah starts --}}
<form method="POST" action="{{ url('kamar') }}">
    @csrf
    <div class="modal fade" id="modalCenter" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalCenterTitle">Tambah</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col mb-lg-2 mb-1">
                            <label for="nameWithTitle" class="form-label">No Kamar</label>
                            <input type="text" name="no_kamar" id="nameWithTitle" class="form-control"
                                placeholder="No Kamar" autofocus />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 mb-lg-2 mb-1">
                            <label for="nameWithTitle" class="form-label">Tipe Kamar</label>
                            <input type="text" name="tipe" id="nameWithTitle" class="form-control"
                                placeholder="Tipe Kamar" />
                        </div>
                        <div class="col-6 mb-lg-2 mb-1">
                            <label for="nameWithTitle" class="form-label">Harga</label>
                            <input type="text" name="harga" id="nameWithTitle" class="form-control"
                                placeholder="harga" />
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                        Close
                    </button>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </div>
            </div>
        </div>
    </div>
</form>
{{-- modal tambah ends --}}
@endsection
