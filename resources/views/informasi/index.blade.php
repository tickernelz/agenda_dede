@extends('layouts.backend')

@section('css_before')
    <!-- Page JS Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('js/plugins/datatables/dataTables.bootstrap4.css') }}">
@endsection

@section('js_after')
    <!-- Page JS Plugins -->
    <script src="{{ asset('js/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>
    <script src="//cdn.datatables.net/plug-ins/1.11.3/sorting/natural.js"></script>
    <script src="//cdn.datatables.net/plug-ins/1.11.3/sorting/enum.js"></script>

    <!-- Page JS Code -->
    <script src="{{ asset('js/pages/tables_datatables.js') }}"></script>
    <script>
        jQuery('.js-dataTable-informasi').dataTable({
            pageLength: 5,
            lengthMenu: [[5, 10, 20], [5, 10, 20]],
            autoWidth: false,
            order: [[1, 'asc']],
            columnDefs: [
                {type: 'natural', targets: '_all'}
            ]
        });
    </script>

@endsection

@section('judul')
    Informasi Kegiatan
@endsection

@section('content')
    <!-- Page Content -->
    <div class="content">
        <div class="block">
            <div class="block-header block-header-default">
                <h3 class="block-title">{{ $judulblock }}</h3>
                <div class="block-options">
                </div>
            </div>
            <div class="block-content">
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
                <div class="table-responsive">
                    <table class="table table-bordered table-vcenter js-dataTable-informasi">
                        <thead>
                        <tr>
                            <th class="text-center" style="width: 3%">#</th>
                            <th>Status</th>
                            @if(Auth::user()->hasAnyRole('Super Admin|Admin'))
                                <th>Bagian</th>
                            @endif
                            <th>Tanggal Mulai</th>
                            <th>Tanggal Selesai</th>
                            <th>Nama Kegiatan</th>
                            <th>Keterangan</th>
                            <th>Tempat</th>
                            <th>Kecamatan</th>
                            <th>Kota</th>
                            <th>Provinsi</th>
                            <th class="text-center">Berkas</th>
                            @if(Auth::user()->hasAnyRole('Super Admin|Admin'))
                                <th class="text-center">Aksi</th>
                                <th class="text-center">Riwayat Notifikasi</th>
                            @endif
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($data as $list)
                            <tr>
                                <td class="text-center">{{$loop->iteration}}</td>
                                @if (\Carbon\Carbon::now() < ($list->tanggaldari))
                                    <td data-order="1"><span class="badge badge-secondary">Kegiatan Akan Dimulai</span></td>
                                @endif
                                @if (\Carbon\Carbon::now() > ($list->tanggaldari) && \Carbon\Carbon::now() < ($list->tanggalsampai))
                                    <td data-order="2"><span class="badge badge-primary">Berlangsung</span></td>
                                @endif
                                @if (\Carbon\Carbon::now() > ($list->tanggalsampai))
                                    <td data-order="3"><span class="badge badge-success">Kegiatan Selesai</span></td>
                                @endif
                                @if(Auth::user()->hasAnyRole('Super Admin|Admin'))
                                    <td>{{$list->bagian->nama}}</td>
                                @endif
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
                                        <a type="button" class="btn btn-secondary"
                                           href="/berkas/{{$list->berkas}}">
                                            Lihat
                                        </a>
                                    @else
                                        Tidak Ada Berkas
                                    @endif
                                </td>
                                @if(Auth::user()->hasAnyRole('Super Admin|Admin'))
                                    <td class="text-center">
                                        <a type="button" class="btn btn-sm btn-primary"
                                           href="{{ route('kirim-notifikasi', $list->id) }}">
                                            Kirim Notifikasi
                                        </a>
                                    </td>
                                    <td class="text-center">
                                        @if($list->notifikasi)
                                            {{$list->notifikasi->diffForHumans()}}
                                        @else
                                            Belum ada notifikasi
                                        @endif
                                    </td>
                                @endif
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- END Page Content -->
@endsection
