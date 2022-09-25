@extends('layouts.partials.main')

@section('container')
@if (session()->has('success'))
<div class="alert alert-success alert-dismissible" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
<div class="card">
    <div class="row">
        <div class="col-6">
            <h5 class="card-header">Rooms</h5>
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
                    <th>No Kamar</th>
                    <th>Gambar</th>
                    <th>Tipe Kamar</th>
                    <th>Harga Kamar</th>
                    <th>Last Update</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                 @foreach ($data as $row )
                <tr>
                    <th scope="row">{{ $row->id }}</th>
                    <td>{{ $row->no_kamar }}</td>
                    <td>
                        <img src="{{ asset('imageagenda/'.$row->foto) }}" alt="" style="width: 50px">
                    </td>
                    <td>{{ $row->tipe }}</td>
                    <td>{{ $row->harga }}</td>
                    <td>{{ $row->updated_at->diffForHumans() }}</td>
                    <td class="d-flex">
                        <div class="me-2">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal"
                                data-bs-target="#modalCenter2-{{ $row->id }}">
                                <i class='bx bxs-edit-alt'></i>
                            </button>
                        </div>
                        <form method="POST" action="{{ url('kamar/'.$row->id) }}">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger btn-sm btndelete"><i class='bx bx-trash'></i></button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

{{-- modal tambah starts --}}
<form method="POST" action="{{ url('kamar') }}" enctype="multipart/form-data">
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
                            <input type="hidden" name="no_kamar" id="nameWithTitle" class="form-control" placeholder="No Kamar" autofocus value="{{ 'H-'.$tt }}"/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-lg-2 mb-1">
                            <label for="nameWithTitle" class="form-label">Gambar</label>
                            <input type="file" name="foto" id="nameWithTitle" class="form-control"/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 mb-lg-2 mb-1">
                            <label for="nameWithTitle" class="form-label">Tipe Kamar</label>
                            <select class="form-select" name="tipe" id="exampleFormControlSelect1" aria-label="Default select example">
                                <option value="superior" name="superior">Superior</option>
                                <option value="deluxe" name="deluxe">Deluxe</option>
                                <option value="suite" name="suite">Suite</option>
                            </select>
                        </div>
                        <div class="col-6 mb-lg-2 mb-1">
                            <label for="nameWithTitle" class="form-label">Harga</label>
                            <input type="text" name="harga" id="nameWithTitle" class="form-control"
                                placeholder="Harga" />
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


<!-- Modal -->
@foreach ($data as $kamar)    
    <form method="POST" action="{{ url('kamar/'.$kamar->id) }}" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="modal fade" id="modalCenter2-{{ $kamar->id }}" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalCenterTitle">Edit Kamar</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col mb-lg-2 mb-1">
                                <input type="hidden" name="no_kamar" value="{{ $kamar->no_kamar  }}" id="nameWithTitle"
                                    class="form-control" placeholder="Edit Ticket Trouble" autofocus />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-lg-2 mb-1">
                                <label for="nameWithTitle" class="form-label">Gambar</label>
                                <input type="file" name="foto" id="nameWithTitle" class="form-control"/>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-lg-2 mb-1">
                                <label for="nameWithTitle" class="form-label">Tipe Kamar</label>
                                    <select class="form-select" name="tipe" value="{{ $kamar->tipe }}" id="exampleFormControlSelect1"
                                        aria-label="Default select example">
                                        <option value="superior">Superior</option>
                                        <option value="deluxe">Deluxe</option>
                                        <option value="suite">Suite</option>
                                    </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-lg-2 mb-1">
                                <label for="nameWithTitle" class="form-label">Harga</label>
                                <input type="text" name="harga" value="{{ $kamar->harga }}" id="nameWithTitle"
                                    class="form-control" placeholder="Edit Ticket Trouble" autofocus />
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                            Close
                        </button>
                        <button type="submit" class="btn btn-primary">Edit</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endforeach

@endsection
