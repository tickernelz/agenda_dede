@extends('layouts.backend')

@section('css_before')
    <!-- Page JS Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('js/plugins/datatables/dataTables.bootstrap4.css') }}">
    <link rel="stylesheet" href="{{ asset('js/plugins/select2/css/select2.min.css') }}">
@endsection

@section('js_after')
    <!-- Page JS Plugins -->
    <script src="{{ asset('js/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('js/plugins/select2/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>
    <script src="//cdn.datatables.net/plug-ins/1.11.3/sorting/natural.js"></script>

    <!-- Page JS Code -->
    <script src="{{ asset('js/pages/tables_datatables.js') }}"></script>
    <script>
        jQuery(function () {
            Codebase.helpers('select2');
        });
    </script>
@endsection

@section('judul')
    Edit User
@endsection

@section('content')
    <!-- Page Content -->
    <div class="content">
        <div class="col-md-6 " style="float:none;margin:auto;">
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">{{$judulblock}}</h3>
                    <div class="block-options">
                        <a href="{{ redirect()->getUrlGenerator()->route('index-user') }}"><button type="button" class="btn btn-sm btn-primary">Kembali</button></a>
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
                    <form action="{{url()->current()}}/post" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" id="username" name="username"
                                   placeholder="Masukan Username.." value="{{$data->username}}">
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan Nama.." value="{{$data->nama}}">
                        </div>
                        <div class="form-group">
                            <label for="nip">NIP</label>
                            <input type="number" class="form-control" id="nip" name="nip" placeholder="Masukan NIP.." value="{{$data->nip}}">
                        </div>
                        <div class="form-group">
                            <label for="status">Status</label>
                            <select class="js-select2 form-control" id="status" name="status"
                                    style="width: 100%;" data-placeholder="Pilih Status..">
                                <option></option>
                                <!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                <option value="{{ Crypt::encrypt('super_admin') }}"
                                        @if ($data->status === 'super_admin')
                                        selected="selected"
                                    @endif>Super Admin
                                </option>
                                <option value="{{ Crypt::encrypt('admin') }}"
                                        @if ($data->status === 'admin')
                                        selected="selected"
                                    @endif>Admin
                                </option>
                                <option value="{{ Crypt::encrypt('sekretariat') }}"
                                        @if ($data->status === 'sekretariat')
                                        selected="selected"
                                    @endif>Sekretariat
                                </option>
                                <option value="{{ Crypt::encrypt('kesmas') }}"
                                        @if ($data->status === 'kesmas')
                                        selected="selected"
                                    @endif>Bid. Kesmas
                                </option>
                                <option value="{{ Crypt::encrypt('yankes') }}"
                                        @if ($data->status === 'yankes')
                                        selected="selected"
                                    @endif>Bid. Yankes
                                </option>
                                <option value="{{ Crypt::encrypt('sdk') }}"
                                        @if ($data->status === 'sdk')
                                        selected="selected"
                                    @endif>Bid. SDK
                                </option>
                                <option value="{{ Crypt::encrypt('p2') }}"
                                        @if ($data->status === 'p2')
                                        selected="selected"
                                    @endif>Bid. P2
                                </option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password"
                                   placeholder="Masukan password.." value="{{$data->password}}">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-alt-primary">Edit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- END Page Content -->
@endsection
