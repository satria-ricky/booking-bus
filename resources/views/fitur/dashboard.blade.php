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
                    <input type="date" id="datepicker"  class="form-control rounded border-0" height="3px" required />
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
                               
                            </tbody>
                            
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection