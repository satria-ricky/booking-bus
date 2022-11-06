@extends('app')

@section('content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>Data Tables</h2>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="index.html">Home</a>
                </li>
                <li class="breadcrumb-item">
                    <a>Tables</a>
                </li>
                <li class="breadcrumb-item active">
                    <strong>Data Table s</strong>
                </li>
            </ol>
        </div>
        <div class="col-lg-2">

        </div>
    </div>


    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row mb-3">
            <div class="col-lg-12">
                <form>
                    <div class="row">
                        <div class="col">
                            <p style="font-size: 18px;">Jenis Ujian</p>
                            <select class="js-example-basic-single form-control" name="state">
                                <option value="AL">AZ</option>
                                <option value="WY">DP</option>
                                <option value="FG">AI</option>
                            </select>
                        </div>
                        <div class="col">
                            <p style="font-size: 18px;">Bulan</p>
                            <input type="date" id="datepicker" class="form-control rounded border-0" height="3px"
                                required />
                        </div>
                        <div class="col mt-5">
                            <button class="btn btn-lg btn-primary"> Filter</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox ">
                    <div class="ibox-title">
                        <h5>List Jadwal Ujian</h5>
                    </div>
                    <div class="ibox-content" style=" min-height: calc(100vh - 244px); ">
                        @if (Auth::user()->level == 0)
                            <button class="btn btn-lg btn-primary mb-3 mt-1" data-toggle="modal" data-target="#myModal4">
                                Tambah Jadwal</button>
                        @endif
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover dataTables-example">
                                <thead>
                                    <tr>
                                        <th class="text-center">Tanggal</th>
                                        <th class="text-center">Jam</th>
                                        <th class="text-center">Kuota Tersedia</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                    </tr>
                                </tbody>

                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal inmodal" id="myModal4" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content animated fadeIn">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span
                            class="sr-only">Close</span></button>
                    <h4 class="modal-title">Register Here!</h4>
                </div>
                <div class="modal-body bg-white">

                    <form role="form" method="post" action="addBook">
                        @csrf
                        <div class="form-group">
                            <label>Nama</label> <input type="text" name="nama" placeholder="Masukkan nama"
                                class="form-control">
                        </div>
                        <div class="form-group">
                            <label>No. Hp</label> <input type="text" name="no_hp" placeholder="Masukkan no.hp"
                                class="form-control">
                        </div>
                        <div class="form-group">
                            <label>ID. Peserta DTS</label> <input type="text" name="id_peserta"
                                placeholder="ID peserta DTS" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Tanggal</label>
                            <input class="form-control"type="text" name="tanggal" list="datalistOptions"
                                id="modalTanggal" placeholder="Type to search..." autocomplete="off" readonly>
                            <div class="form-group">
                                <label>Waktu</label>
                                <input class="form-control" type="text" name="jam" list="datalistWaktu"
                                    id="modalWaktu" placeholder="Type to search..." autocomplete="off" readonly>

                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary"
                                onclick="return confirm('Are you sure?')">Apply</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
