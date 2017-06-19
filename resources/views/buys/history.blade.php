@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading">Laporan Penjualan</div>
                    <div class="panel-body">

                        

                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th>Id Transaksi</th><th>Nama</th><th>Alamat</th><th>Nomor HP</th><th>Nomor KTP</th><th>Kode Kereta</th><th>Tujuan Awal</th><th>Tujuan Akhir</th><th>Jam Berangkat</th><th>Jam Tiba</th><
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($buys as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->nama }}</td>
                                        <td>{{ $item->alamat }}</td>
                                        <td>{{ $item->nomor_hp }}</td>
                                        <td>{{ $item->nomor_ktp }}</td>
                                        <td>{{ $item->kode_kereta }}</td>
                                        <td>{{ $item->tujuanawal }}</td>
                                        <td>{{ $item->tujuanakhir }}</td>
                                        <td>{{ $item->jamberangkat }}</td>
                                        <td>{{ $item->jamtiba }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $buys->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection