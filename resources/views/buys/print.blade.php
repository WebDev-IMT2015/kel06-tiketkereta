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
                                        <th>Id Transaksi</th><th>Nama</th><th>Alamat</th><th>Nomor HP</th><th>Nomor KTP</th><th>Kode Kereta</th><th>Tujuan Awal</th><th>Tujuan Akhir</th><th>Jam Berangkat</th><th>Jam Tiba</th><th>Tarif</th>
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
                                        <td>{{ $item->train()->first()->kode_kereta }}</td>
                                        <td>{{ $item->train()->first()->nama_kereta }}</td>
                                        <td>{{ $item->train()->first()->tujuanawal }}</td>
                                        <td>{{ $item->train()->first()->tujuanakhir }}</td>
                                        <td>{{ $item->train()->first()->jamberangkat }}</td>
                                        <td>{{ $item->train()->first()->jamtiba }}</td>
                                        <td>{{ $item->train()->first()->tarif }}</td>
                                    </tr>
                                @endforeach

                                
                                </tbody>
                            </table>
                            <button id="my" onclick="myFunction()">Print this page</button>

                                <script>
                                function myFunction() {
                                    var x = document.getElementById('my');
                                        x.style.display = 'none';
                                    window.print();
                                    x.style.display = 'block';
                                }
                                </script>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection