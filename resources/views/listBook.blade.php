<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>INSPINIA | Register</title>

    <link href="{{ url('assets') }}/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ url('assets') }}/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="{{ url('assets') }}/css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="{{ url('assets') }}/css/animate.css" rel="stylesheet">
    <link href="{{ url('assets') }}/css/style.css" rel="stylesheet">

</head>

<body class="gray-bg">

  
    <div class="wrapper wrapper-content loginscreen animated fadeInDown">
        <div class="row">
            <div class="col-lg-8">
                <div class="ibox">
                    <div class="ibox-title">
                        <h5>Find Out Our Schedule!</h5>
                        <form class="m-t" method="get" role="form" action="filterBook">
                            @csrf
                            <div class="form-group">
                                <label for="exampleDataList" class="form-label">Date</label>
                                <input class="form-control" name="date" list="datalistOptions" id="exampleDataList" placeholder="Type to search..." autocomplete="off">
                                <datalist id="datalistOptions">
                                    @foreach ($tanggal as $row)
                                        <option value="{{ $row->tanggal }}">
                                    @endforeach
                                </datalist>
                            </div>
                            <div class="form-group">
                                <label for="exampleWaktu" class="form-label">Time</label>
                                <input class="form-control" name="time" list="datalistWaktu" id="exampleWaktu" placeholder="Type to search..." autocomplete="off">
                                <datalist id="datalistWaktu">
                                    @foreach ($waktu as $row)
                                        <option value="{{ $row->jam }}">
                                    @endforeach
                                </datalist>
                            </div>
                            <button type="submit" class="btn btn-success">Check</button>
                        </form>
                        
                    </div>
                
                    <div class="ibox-content" style=" min-height: calc(100vh - 244px); ">

                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Tanggal</th>
                                        <th>Jam</th>
                                        <th>Kuota Tersedia</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($booked as $row)
                                        <tr class="gradeX">
                                            <td>{{ $row->tanggal }}</td>
                                            <td>{{ $row->jam }}</td>
                                            <td>{{ $row->tanggal }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                
                            </table>
                        </div>

                    </div>
                    <div class="ibox-footer ">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal4" > Daftar</button>
                    </div>

                    <div class="modal inmodal" id="myModal4" tabindex="-1" role="dialog"  aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content animated fadeIn">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                    <h4 class="modal-title">Register Here!</h4>
                                </div>
                                <div class="modal-body bg-white">
                                    
                                    <form role="form" method="post" action="addBook">
                                        @csrf 
                                        <div class="form-group">
                                            <label>Nama</label> <input type="text" name="nama" placeholder="Masukkan nama" class="form-control"></div>
                                        <div class="form-group">
                                            <label>No. Hp</label> <input type="text" name="no_hp" placeholder="Masukkan no.hp" class="form-control"></div>
                                        <div class="form-group">
                                            <label>ID. Peserta DTS</label> <input type="text" name="id_peserta"  placeholder="ID peserta DTS" class="form-control"></div>
                                        <div class="form-group">
                                            <label>Tanggal</label> <input type="text" name="tanggal"  class="form-control" value="" readonly></div>
                                        <div class="form-group">
                                            <label>Waktu</label> <input type="text" name="waktu"  class="form-control" value="" readonly></div>
                                    
                                    
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Apply</button>
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <div class="footer">
            <div>
                <strong>Copyright</strong> Example Company &copy; 2014-2018
            </div>
        </div>
    </div>

    

    <!-- Mainly scripts -->
    <script src="{{ url('assets') }}/js/jquery-3.1.1.min.js"></script>
    <script src="{{ url('assets') }}/js/popper.min.js"></script>
    <script src="{{ url('assets') }}/js/bootstrap.js"></script>
    <!-- iCheck -->
    <script src="{{ url('assets') }}/js/plugins/iCheck/icheck.min.js"></script>
    <script src="{{ url('assets') }}/js/plugins/dataTables/datatables.min.js"></script>
    <script>
    
        $(document).ready(function () {
            $('.dataTables-example').DataTable({
                responsive: true
            });

        });

    </script>
</body>

</html>
