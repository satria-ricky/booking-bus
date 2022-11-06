@extends('app')

@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Data Tables</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.html">Daftar Peserta</a>
            </li>
            <li class="breadcrumb-item">
                <a>Tables</a>
            </li>
        </ol>
    </div>
    <div class="col-lg-2">

    </div>
</div>


<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox ">
                <div class="ibox-title">
                    <h5>Peserta CATC</h5>
                </div>
                <div class="ibox-content" style=" min-height: calc(100vh - 244px); ">
                    @if (Auth::user()->level ==0)
                     <button class="btn btn-lg btn-primary mb-3 mt-1"> Tambah Peserta</button>   
                    @endif
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover dataTables-example">
                            <thead>
                                <tr>
                                    <th class="text-center">No</th>
                                    <th class="text-center">Nama</th>
                                    <th class="text-center">Id registrasi</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                               
                            </tbody>
                            
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection