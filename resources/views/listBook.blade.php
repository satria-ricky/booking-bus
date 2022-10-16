<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>INSPINIA | Register</title>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link href="{{ url('assets') }}/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ url('assets') }}/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="{{ url('assets') }}/css/plugins/iCheck/custom.css" rel="stylesheet">
        <!-- Sweet Alert -->
        <link href="{{ url('assets') }}/css/plugins/sweetalert/sweetalert.css" rel="stylesheet">
    <link href="{{ url('assets') }}/css/animate.css" rel="stylesheet">
    <link href="{{ url('assets') }}/css/style.css" rel="stylesheet">

</head>

<body class="gray-bg">

  
    <div class="wrapper wrapper-content loginscreen animated fadeInDown">
        <div class="row">
            <div class="col-lg-2">
            
            </div>
            <div class="col-lg-8">
                <div class="ibox">
                    <div class="ibox-title">
                        <h5>Find Out Our Schedule!</h5>
                        <form class="m-t" role="form">
                            @csrf
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="form-group">
                                <label for="tanggal" class="form-label">Date</label>
                                <input class="form-control" name="date" list="datalistOptions" id="tanggal" placeholder="Type to search..." autocomplete="off">
                                <datalist id="datalistOptions">
                                    @foreach ($tanggal as $row)
                                        <option value="{{ $row->tanggal }}">
                                    @endforeach
                                </datalist>
                            </div>
                            <div class="form-group">
                                <label for="waktu" class="form-label">Time</label>
                                <input class="form-control" name="time" list="datalistWaktu" id="waktu" placeholder="Type to search..." autocomplete="off">
                                <datalist id="datalistWaktu">
                                    @foreach ($waktu as $row)
                                        <option value="{{ $row->jam }}">
                                    @endforeach
                                </datalist>
                            </div>
                            <input type="button" value="Check" onclick="check()" class="btn btn-success"/>
                        </form>
                        
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
                                    @foreach ($booked as $row)
                                        <tr class="gradeX">
                                            <td>{{ $row->tanggal }}</td>
                                            <td>{{ $row->jam }}</td>
                                            <td>{{ 10 - $row->total }}</td>
                                            <td> 
                                                @if (10 - $row->total == 0 )
                                                <button type="button" class="btn btn-danger" disabled > Daftar</button></td>    
                                                @else
                                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal4" onclick="modalTambah('{{ $row->tanggal }}','{{ $row->jam }}')"> Daftar</button></td>
                                                @endif
                                        </tr>
                                    @endforeach
                                </tbody>
                                
                            </table>
                        </div>

                    </div>
                    <div class="ibox-footer ">
                       
                    </div>

                </div>
            </div>
            <div class="col-lg-2">
            
            </div>
        </div>
       
        {{-- <div class="footer">
            <div>
                <strong>Copyright</strong> Example Company &copy; 2014-2018
            </div>
        </div>     --}}
    </div>


    

    <div class="modal inmodal" id="myModal4" role="dialog"  aria-hidden="true">
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
                            <label>Tanggal</label> 
                            <input class="form-control"type="text" name="tanggal" list="datalistOptions" id="modalTanggal" placeholder="Type to search..." autocomplete="off" readonly>
                        <div class="form-group">
                            <label>Waktu</label> 
                            <input class="form-control" type="text" name="jam" list="datalistWaktu" id="modalWaktu" placeholder="Type to search..." autocomplete="off" readonly>
                    
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" onclick="return confirm('Are you sure?')">Apply</button>
                </form>
                </div>
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

    <script src="{{ url('assets') }}/js/plugins/sweetalert/sweetalert.min.js"></script>

    
    <script>


        $(document).ready(function () {
            $('.dataTables-example').DataTable({
                responsive: true
            });

        });

        function modalTambah(t,j){
            // console.log(t,j);
            $("#modalTanggal").val(t);
            $("#modalWaktu").val(j);
        }
        

        function check(){
            var tanggal = document.getElementById('tanggal').value;
            var waktu = document.getElementById('waktu').value;
            // console.log(tanggal,waktu);
            $('.dataTables-example').DataTable().destroy();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
            });

                $.ajax({
                    type: 'post',
                    url: '/filterBook/',
                    data : {
                        _token: "{{csrf_token()}}", 
                        tanggal:tanggal,
                        waktu:waktu
                    },
                    success: function(data){
                        console.log(data);
                        // $('.dataTables-example').DataTable( {
                        //     "data": data,
                        //     "columns": [
                        //         {
                        //             "data": "tanggal",
                        //         },
                        //         {
                        //             "data": "jam",
                        //         },
                        //         {
                                    
                        //             "data": "book_id",
                        //             "render": function(data, type, row, meta) {
                        //             return 10 - row.total;
                        //             }
                        //         },
                        //         {
                        //             "data": "book_id",
                        //             "render": function(data, type, row, meta) {
                        //                 if (10 - row.total == 0) {
                        //                     return `<button type="button" class="btn btn-danger" disabled > Daftar</button></td>`;
                        //                 } else {
                        //                     return `<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal4" onclick="modalTambah('${row.tanggal}','${row.jam}')">Daftar</button></td>`;
                        //                 }
                        //             }
                        //         }
                        //     ]
                        // } );

                    }, 
                    error: function(){
                        console.log('AJAX load did not work');
                    }
                });
        
           

        }
    </script>

@if(session()->has('pesan'))
<script>
    swal({
        title: "Good job!",
        text: "{{ session('pesan') }}",
        type: "success"
    });
</script>
@endif

@if(session()->has('error'))
<script>
    swal({
        title: "Sorry!",
        text: "This Schedule is Full, Please Choose Another Schedule!",
        type: "error"
    });
</script>
@endif

</body>

</html>
