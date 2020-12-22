@extends('layouts.main')
@extends('layouts.side-bar')

@section('content')



<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col-6">
                <h4 class="card-title">
                    Kawasan Lindung
                </h4>
            </div>
            @auth
            <div class="col-6 text-sm-right">
                <h4 class="card-title">
                    <button class="btn btn-success m-r-5" id="add">
                        <i class="anticon anticon-plus"></i>
                       Tambah Data
                    </button>
                </h4>
            </div>
            @endauth
        </div>
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="table">
                <thead>
                <tr class="text-sm-center">
                    <th>Data</th>
                    <th>Nilai</th>
                    <th>Satuan</th>
                    <th>Tahun</th>
                    @auth
                    <th>Aksi</th>
                    @endauth
                </tr>
                </thead>
            </table>
        </div>
    </div>

    <div class="modal fade" id="modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Form Kawasan Lindung</h5>
                    <button type="button" class="close" data-dismiss="modal">
                        <i class="anticon anticon-close"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="form">
                        {{ csrf_field() }}
                        <div class="form-group" id="div_data">
                            <label for="pelapor_nik">Data</label>
                            <input type="text" class="form-control" id="data_input" name="data_input" placeholder="...." >
                        </div>
                        <div class="form-group" id="div_value">
                            <label for="pelapor_nik">Value</label>
                            <input type="number" class="form-control" id="value_input" name="value_input" placeholder="....." >
                        </div>
                        <div class="form-group" id="div_satuan">
                            <label for="pelapor_nik">Satuan</label>
                            <input type="text" class="form-control" id="satuan_input" name="satuan_input" placeholder="...." >
                        </div>
                        <div class="form-group" id="div_satuan">
                            <label for="pelapor_nik">Tahun</label>
                            <input type="number" class="form-control" id="tahun_input" name="satuan_input" placeholder="...." >
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default mr-3" data-dismiss="modal">Keluar</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection

@section('js')


@auth
<script>

    $(document).ready( function () {

        $.extend( $.fn.dataTable.defaults, {
                autoWidth: false,
                language: {
                    search: '<span>Cari:</span> _INPUT_',
                    searchPlaceholder: 'Cari...',
                    lengthMenu: '<span>Tampil:</span> _MENU_',
                    paginate: { 'first': 'First', 'last': 'Last', 'next': $('html').attr('dir') == 'rtl' ? '&larr;' : '&rarr;', 'previous': $('html').attr('dir') == 'rtl' ? '&rarr;' : '&larr;' }
                }
            });

        function loadData() {
            $('#table').dataTable({
                 "ajax": "{{ url('/kud/data/4/2') }}",
                        "columns": [
                            { "data": "data" },
                            { "data": "value" },
                            { "data": "satuan"},
                            { "data": "tahun"},

                            {
                                data: 'id',
                                sClass: 'text-center',
                                render: function(data) {
                                    return'<a href="#" data-id="'+data+'" id="edit" class="text-warning" title="edit"><i class="anticon anticon-edit"></i> </a> &nbsp;'+
                                        '<a href="#" data-id="'+data+'" id="delete" class="text-danger" title="hapus"><i class="anticon anticon-delete"></i> </a>';
                                },
                            }
                        ],
                        columnDefs: [
                            {
                                width: "150px",
                                targets: [0]
                            },
                            {
                                width: "50px",
                                targets: [1]
                            },
                            {
                                width: "50px",
                                targets: [2],
                                orderable: false
                            },
                            {
                                width: "50px",
                                targets: [3],
                            },
                            {
                                width: "50px",
                                targets: [4],
                                orderable: false
                            },
                        ],

                });
        } loadData();


        $(document).on('click', '#add', function() {
                $('#modal').modal('show');
                $('#form').attr('action', '{{ url('kud/create/4/2') }}');
        });


        $('#form').submit(function(e) {
                e.preventDefault();
                $.ajax({
                    url: $(this).attr('action')+'?_token='+'{{ csrf_token() }}',
                    type: 'post',
                    data: {
                        'data_input': $('#data_input').val(),
                        'value_input': $('#value_input').val(),
                        'satuan_input': $('#satuan_input').val(),
                        'tahun_input': $('#tahun_input').val(),
                    },
                    success :function () {
                        $('#table').DataTable().destroy();
                        loadData();
                        $('#modal').modal('hide');
                    },

                });
        });

        $(document).on('click', '#edit', function() {
                var data = $('#table').DataTable().row($(this).parents('tr')).data();
                $('#modal').modal('show');
                $('#data_input').val(data.data).change();
                $('#value_input').val(data.value).change();
                $('#satuan_input').val(data.satuan).change();
                $('#tahun_input').val(data.tahun).change();
                $('#form').attr('action', '{{ url('kud/update/4') }}/'+data.id);
        });


        $('#modal').on('hidden.bs.modal', function(e) {
                $(this).find('#form')[0].reset();
        });

        $(document).on('click', '#delete', function() {
                var id = $(this).data('id');
                if (confirm("Yakin ingin menghapus data?")){
                    $.ajax({
                        url : "{{ url('kud/delete/4') }}/"+id,
                        success :function () {
                            $('#table').DataTable().destroy();
                            loadData();
                        }
                    })
                }
        });

    } );



</script>
@endauth

@guest
<script>

    $(document).ready( function () {

        $.extend( $.fn.dataTable.defaults, {
                autoWidth: false,
                language: {
                    search: '<span>Cari:</span> _INPUT_',
                    searchPlaceholder: 'Cari...',
                    lengthMenu: '<span>Tampil:</span> _MENU_',
                    paginate: { 'first': 'First', 'last': 'Last', 'next': $('html').attr('dir') == 'rtl' ? '&larr;' : '&rarr;', 'previous': $('html').attr('dir') == 'rtl' ? '&rarr;' : '&larr;' }
                }
            });

        function loadData() {
            $('#table').dataTable({
                 "ajax": "{{ url('/kud/data/4/2') }}",
                        "columns": [
                            { "data": "data" },
                            { "data": "value" },
                            { "data": "satuan"},
                            { "data": "tahun"},

                        ],
                        columnDefs: [
                            {
                                width: "150px",
                                targets: [0]
                            },
                            {
                                width: "50px",
                                targets: [1]
                            },
                            {
                                width: "50px",
                                targets: [2],
                                orderable: false
                            },
                            {
                                width: "50px",
                                targets: [3],
                            },

                        ],

                });
        } loadData();

    } );


</script>
@endguest

@endsection
