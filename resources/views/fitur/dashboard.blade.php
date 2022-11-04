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
                <strong>Data Tables</strong>
            </li>
        </ol>
    </div>
    <div class="col-lg-2">

    </div>
</div>
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-2">
            <div class="widget style1 blue-bg">
                <div class="row">
                    <div class="col-4">
                        <i class="fa fa-calendar-check-o fa-5x"></i>
                    </div>
                    <div class="col-8 text-right">
                        <span> Masuk </span>
                        <h2 class="font-bold">26</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-2">
            <div class="widget style1 bg-info">
                <div class="row">
                    <div class="col-4">
                        <i class="fa fa-bell-slash fa-5x"></i>
                    </div>
                    <div class="col-8 text-right">
                        <span> Izin </span>
                        <h2 class="font-bold">26</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-2">
            <div class="widget style1 bg-info">
                <div class="row">
                    <div class="col-4">
                        <i class="fa fa-hotel fa-5x"></i>
                    </div>
                    <div class="col-8 text-right">
                        <span> Sakit </span>
                        <h2 class="font-bold">260</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-2">
            <div class="widget style1 bg-info">
                <div class="row">
                    <div class="col-4">
                        <i class="fa fa-calendar-o fa-5x"></i>
                    </div>
                    <div class="col-8 text-right">
                        <span> Cuti </span>
                        <h2 class="font-bold">12</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-2">
            <div class="widget style1 bg-info">
                <div class="row">
                    <div class="col-4">
                        <i class="fa fa-car fa-5x"></i>
                    </div>
                    <div class="col-8 text-right">
                        <span> Perjalanan Dinas </span>
                        <h2 class="font-bold">12</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-2">
            <div class="widget style1 bg-danger">
                <div class="row">
                    <div class="col-4">
                        <i class="fa fa-calendar-times-o fa-5x"></i>
                    </div>
                    <div class="col-8 text-right">
                        <span> Tidak Masuk </span>
                        <h2 class="font-bold">12</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-lg-6">
            <div class="ibox ">
                <div class="ibox-title">
                    <h5>Daftar Kehadiran <small>Diagram Balok</small></h5>
                </div>
                <div class="ibox-content">
                    <div>
                        <canvas id="barChart" height="125"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="ibox ">
                <div class="ibox-title">
                    <h5>Presensi Hari Ini</h5>
                </div>
                <div class="ibox-content">
                    <div class="flot-chart">
                        <div class="flot-chart-pie-content" id="flot-pie-chart" height="125"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection