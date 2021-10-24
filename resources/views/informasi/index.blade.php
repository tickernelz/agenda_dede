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

    <!-- Page JS Code -->
    <script src="{{ asset('js/pages/tables_datatables.js') }}"></script>
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
                <div class="table-responsive">
                    <table class="table table-bordered table-vcenter js-dataTable-full">
                        <thead>
                        <tr>
                            <th class="text-center" style="width: 3%">#</th>
                            @if(Auth::user()->hasAnyRole('super_admin|admin'))
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
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($data as $list)
                            <tr>
                                <td class="text-center">{{$loop->iteration}}</td>
                                @if(Auth::user()->hasAnyRole('super_admin|admin'))
                                    @if($list->bagian === '1')
                                        <td>Sekretariat</td>
                                    @endif
                                    @if($list->bagian === '2')
                                        <td>Bid. Kesmas</td>
                                    @endif
                                    @if($list->bagian === '3')
                                        <td>Bid. Yankes</td>
                                    @endif
                                    @if($list->bagian === '4')
                                        <td>Bid. SDK</td>
                                    @endif
                                    @if($list->bagian === '5')
                                        <td>Bid. P2</td>
                                    @endif
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
