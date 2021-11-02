@extends('layouts.backend')

@section('css_before')
    <!-- Page JS Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('js/plugins/select2/css/select2.min.css') }}">
@endsection

@section('js_after')
    <!-- Page JS Plugins -->
    <script src="{{ asset('js/plugins/select2/js/select2.full.min.js') }}"></script>

    <!-- Page JS Code -->
    <script>
        jQuery(function () {
            Codebase.helpers('select2');
        });
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
                        <h3 class="block-title">{{$judulblock}}</h3>
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
                                    <option value="{{ Crypt::encrypt($list['id']) }}">{{$list['nama']}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- END Page Content -->
@endsection
