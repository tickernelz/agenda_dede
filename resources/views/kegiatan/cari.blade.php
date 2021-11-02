@extends('layouts.backend')

@section('css_before')
    <!-- Page JS Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('js/plugins/datatables/dataTables.bootstrap4.css') }}">
    <link rel="stylesheet" href="{{ asset('js/plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('js/plugins/flatpickr/flatpickr.min.css') }}">
    <style>
        .select2-container {
            display: block;
        }
    </style>
@endsection

@section('js_after')
    <!-- Page JS Plugins -->
    <script src="{{ asset('js/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('js/plugins/select2/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('js/plugins/flatpickr/flatpickr.min.js') }}"></script>
    <script src="https://npmcdn.com/flatpickr/dist/l10n/id.js"></script>
    <script src="//cdn.datatables.net/plug-ins/1.11.3/sorting/natural.js"></script>

    <!-- Page JS Code -->
    <script src="{{ asset('js/pages/tables_datatables.js') }}"></script>
    <script>
        jQuery(function () {
            Codebase.helpers('select2');
            Codebase.helpers('flatpickr');
            Codebase.helpers('coreBootstrapCustomFileInput');
        });
        flatpickr.localize(flatpickr.l10ns.id);
        $(document).ready(function () {
            $('#kota').select2({
                dropdownParent: $('#modal-tambah')
            });
            $('#kecamatan').select2({
                dropdownParent: $('#modal-tambah')
            });
            $('#provinsi').select2({
                dropdownParent: $('#modal-tambah')
            });
        });

        function editFunc(id) {
            $.ajax({
                type: "GET",
                url: "{{ route('get-kegiatan') }}",
                dataType: "JSON",
                data: {id: id},
                success: function (data) {
                    $.map(data, function (obj) {
                        $('#modal-edit').modal('show');
                        $('[name="idedit"]').val(obj.id);
                        $('[name="tglmulaiedit"]').val(obj.tanggaldari).trigger('change');
                        $('[name="tglakhiredit"]').val(obj.tanggalsampai).trigger('change');
                        $('[name="kegiatanedit"]').val(obj.kegiatan);
                        $('[name="keteranganedit"]').val(obj.keterangan);
                        $('[name="tempatedit"]').val(obj.tempat).trigger('change');
                        $('[name="provinsiedit"]').val(obj.provinsi).trigger('change');
                        $('[name="kotaedit"]').val(obj.kota).trigger('change');
                        $('[name="kecamatanedit"]').val(obj.kecamatan).trigger('change');
                        $('[name="berkasedit"]').val(obj.berkas);
                    });
                }
            });
            return false;
        }
    </script>
@endsection

@section('judul')
    Kelola Kegiatan
@endsection

@section('content')
    <!-- Page Content -->
    <div class="content">
        <div class="col-md-12 " style="float:none;margin:auto;">
            <div class="block">
                <form action="{{ route('cari-kegiatan') }}" method="get">
                    @csrf
                    <div class="block-header block-header-default">
                        <h3 class="block-title">{{$judulblockpertama}}</h3>
                        <div class="block-options">
                            <button type="submit" class="btn btn-sm btn-outline-primary">
                                <i class="fa fa-fw fa-search"></i> Cari
                            </button>
                        </div>
                    </div>
                    <div class="block-content">
                        @if(session('errors'))
                            <div class="alert alert-danger alert-dismissable" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                                <h3 class="alert-heading font-size-h5 font-w700 mb-5">Error</h3>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        @if (Session::has('success'))
                            <div class="alert alert-success mb-3" role="alert">
                                {{ Session::get('success') }}
                            </div>
                        @endif
                        @if (Session::has('error'))
                            <div class="alert alert-danger mb-3" role="alert">
                                {{ Session::get('error') }}
                            </div>
                        @endif

                        <div class="form-group">
                            <label for="kegiatan">Kegiatan</label>
                            <select class="js-select2 form-control" id="kegiatan" name="kegiatan"
                                    style="width: 100%;" data-placeholder="Pilih Kegiatan..">
                                <option></option>
                                @foreach($kegiatan as $list)
                                    <option value="{{ Crypt::encrypt($list['id']) }}"
                                            @if (Crypt::decrypt(Request::get('kegiatan')) === $list['id'])
                                            selected="selected"
                                        @endif>{{$list['nama']}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-12 " style="float:none;margin:auto;">
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">{{$judulblockkedua}}</h3>
                    <div class="block-options">
                        <button type="button" class="btn btn-sm btn-outline-primary" data-toggle="modal"
                                data-target="#modal-tambah">
                            <i class="fa fa-fw fa-plus"></i> Tambah
                        </button>
                    </div>
                </div>
                <div class="block-content">
                    <div class="table-responsive">
                        <table class="table table-bordered table-vcenter js-dataTable-full">
                            <thead>
                            <tr>
                                <th class="text-center" style="width: 3%">#</th>
                                <th>Tanggal Mulai</th>
                                <th>Tanggal Selesai</th>
                                <th>Nama Kegiatan</th>
                                <th>Keterangan</th>
                                <th>Tempat</th>
                                <th>Kecamatan</th>
                                <th>Kota</th>
                                <th>Provinsi</th>
                                <th class="text-center">Berkas</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($datakegiatan as $list)
                                <tr>
                                    <td class="text-center">{{$loop->iteration}}</td>
                                    <td>{{$list->tanggaldari}}</td>
                                    <td>{{$list->tanggalsampai}}</td>
                                    <td>{{$list->kegiatan}}</td>
                                    <td>{{$list->keterangan}}</td>
                                    <td>{{$list->tempat}}</td>
                                    <td>{{$list->kecamatan}}</td>
                                    <td>{{$list->kota}}</td>
                                    <td>{{$list->provinsi}}</td>
                                    <td class="text-center">
                                        @if (isset($list->berkas))
                                            <div class="btn-group btn-group-sm" role="group">
                                                <a type="button" class="btn btn-secondary"
                                                   href="/berkas/{{$list->berkas}}">
                                                    Lihat
                                                </a>
                                                <a type="button" class="btn btn-sm btn-secondary"
                                                   href="{{ Request::url() }}/hapus-berkas/{{$list->id}}"
                                                   onclick="return confirm('Yakin Mau Dihapus?');">
                                                    Hapus
                                                </a>
                                            </div>
                                        @else
                                            Tidak Ada Berkas
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        <div class="btn-group btn-group-sm" role="group">
                                            <a type="button" class="btn btn-secondary"
                                               onclick="editFunc({{ $list->id }})">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a type="button" class="btn btn-secondary"
                                               href="{{ Request::url() }}/hapus/{{$list->id}}"
                                               onclick="return confirm('Yakin Mau Dihapus?');">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Tambah -->
        <div class="modal fade" id="modal-tambah" tabindex="-1" role="dialog" aria-labelledby="modal-slideup"
             aria-hidden="true">
            <div class="modal-dialog modal-dialog-slideup" role="document">
                <div class="modal-content">
                    <form action="{{ route('tambah-kegiatan') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="block block-themed block-transparent mb-0">
                            <div class="block-header bg-primary-dark">
                                <h3 class="block-title">Tambah Kegiatan</h3>
                                <div class="block-options">
                                    <button type="button" class="btn-block-option" data-dismiss="modal"
                                            aria-label="Close">
                                        <i class="si si-close"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="block-content">
                                <input type="hidden" class="form-control bg-white"
                                       value="{{ Crypt::decrypt(Request::get('kegiatan')) }}" id="bagian" name="bagian">
                                <div class="mb-3">
                                    <label class="form-label" for="tglmulai">Tanggal Mulai</label>
                                    <input type="text" class="js-flatpickr form-control bg-white" id="tglmulai"
                                           name="tglmulai" data-allow-input="false" data-enable-time="true"
                                           data-date-format="Y-m-d H:i" data-time_24hr="true">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="tglakhir">Tanggal Akhir</label>
                                    <input type="text" class="js-flatpickr form-control bg-white" id="tglakhir"
                                           name="tglakhir" data-allow-input="false" data-enable-time="true"
                                           data-date-format="Y-m-d H:i" data-time_24hr="true">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="kegiatan">Kegiatan</label>
                                    <input type="text" class="form-control bg-white" id="kegiatan" name="kegiatan">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="keterangan">Keterangan</label>
                                    <input type="text" class="form-control bg-white" id="keterangan" name="keterangan">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="tempat">Tempat</label>
                                    <input type="text" class="form-control bg-white" id="tempat" name="tempat">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="provinsi">Provinsi</label>
                                    <select class="js-select2 form-select" name="provinsi"
                                            id="provinsi" style="width: 100%;" data-placeholder="Pilih Provinsi..">
                                        <option></option>
                                        @foreach($provinsi as $list)
                                            <option
                                                value="{{ $list->nama }}">{{$list->nama}}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="kota">Kota</label>
                                    <select class="js-select2 form-select" name="kota"
                                            id="kota" style="width: 100%;" data-placeholder="Pilih Kota..">
                                        <option></option>
                                        @foreach($kota as $list)
                                            <option
                                                value="{{ $list->nama }}">{{$list->nama}}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="kecamatan">Kecamatan</label>
                                    <select class="js-select2 form-select" name="kecamatan"
                                            id="kecamatan" style="width: 100%;" data-placeholder="Pilih Kecamatan..">
                                        <option></option>
                                        @foreach($kecamatan as $list)
                                            <option
                                                value="{{ $list->nama }}">{{$list->nama}}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="berkas">Upload Berkas</label>
                                    <div class="custom-file">
                                        <!-- Populating custom file input label with the selected filename (data-toggle="custom-file-input" is initialized in Helpers.coreBootstrapCustomFileInput()) -->
                                        <input type="file" class="custom-file-input" id="berkas"
                                               name="berkas" data-toggle="custom-file-input">
                                        <label class="custom-file-label" for="berkas">Pilih Berkas</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-alt-success">
                                <i class="fa fa-check"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Modal Edit -->
        <div class="modal fade" id="modal-edit" tabindex="-1" role="dialog" aria-labelledby="modal-slideup"
             aria-hidden="true">
            <div class="modal-dialog modal-dialog-slideup" role="document">
                <div class="modal-content">
                    <form action="{{ route('edit-kegiatan') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="block block-themed block-transparent mb-0">
                            <div class="block-header bg-primary-dark">
                                <h3 class="block-title">Edit Kegiatan</h3>
                                <div class="block-options">
                                    <button type="button" class="btn-block-option" data-dismiss="modal"
                                            aria-label="Close">
                                        <i class="si si-close"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="block-content">
                                <input type="hidden" class="form-control bg-white"
                                       value="{{ Crypt::decrypt(Request::get('kegiatan')) }}" id="bagianedit"
                                       name="bagianedit">
                                <input type="hidden" class="form-control bg-white" id="idedit" name="idedit">
                                <div class="mb-3">
                                    <label class="form-label" for="tglmulaiedit">Tanggal Mulai</label>
                                    <input type="text" class="js-flatpickr form-control bg-white" id="tglmulaiedit"
                                           name="tglmulaiedit" data-allow-input="false" data-enable-time="true"
                                           data-date-format="Y-m-d H:i" data-time_24hr="true">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="tglakhiredit">Tanggal Akhir</label>
                                    <input type="text" class="js-flatpickr form-control bg-white" id="tglakhiredit"
                                           name="tglakhiredit" data-allow-input="false" data-enable-time="true"
                                           data-date-format="Y-m-d H:i" data-time_24hr="true">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="kegiatanedit">Kegiatan</label>
                                    <input type="text" class="form-control bg-white" id="kegiatanedit"
                                           name="kegiatanedit">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="keteranganedit">Keterangan</label>
                                    <input type="text" class="form-control bg-white" id="keteranganedit"
                                           name="keteranganedit">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="tempatedit">Tempat</label>
                                    <input type="text" class="form-control bg-white" id="tempatedit" name="tempatedit">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="provinsiedit">Provinsi</label>
                                    <select class="js-select2 form-select" name="provinsiedit"
                                            id="provinsiedit" style="width: 100%;" data-placeholder="Pilih Provinsi..">
                                        <option></option>
                                        @foreach($provinsi as $list)
                                            <option
                                                value="{{ $list->nama }}">{{$list->nama}}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="kotaedit">Kota</label>
                                    <select class="js-select2 form-select" name="kotaedit"
                                            id="kotaedit" style="width: 100%;" data-placeholder="Pilih Kota..">
                                        <option></option>
                                        @foreach($kota as $list)
                                            <option
                                                value="{{ $list->nama }}">{{$list->nama}}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="kecamatanedit">Kecamatan</label>
                                    <select class="js-select2 form-select" name="kecamatanedit"
                                            id="kecamatanedit" style="width: 100%;"
                                            data-placeholder="Pilih Kecamatan..">
                                        <option></option>
                                        @foreach($kecamatan as $list)
                                            <option
                                                value="{{ $list->nama }}">{{$list->nama}}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="berkasedit">Upload Berkas</label>
                                    <div class="custom-file">
                                        <!-- Populating custom file input label with the selected filename (data-toggle="custom-file-input" is initialized in Helpers.coreBootstrapCustomFileInput()) -->
                                        <input type="file" class="custom-file-input" id="berkas"
                                               name="berkasedit" data-toggle="custom-file-input">
                                        <label class="custom-file-label" for="berkasedit">Pilih Berkas</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-alt-success">
                                <i class="fa fa-check"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- END Page Content -->
@endsection
