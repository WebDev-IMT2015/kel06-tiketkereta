@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Tiket {{ $buy->train()->first()->kode_kereta }}</div>
                    <div class="panel-body">

                        <a id="back" href="{{ url('/buys') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $buy->id }}</td>
                                    </tr>
                                    <tr><th> Nama </th><td> {{ $buy->nama }} </td></tr>
                                    <tr><th> Alamat </th><td> {{ $buy->alamat }} </td></tr>
                                    <tr><th> Nomor HP </th><td> {{ $buy->nomor_hp }} </td></tr>
                                    <tr><th> Nomor KTP </th><td> {{ $buy->nomor_ktp }} </td></tr>
                                    <tr><th> Kode Kereta </th><td>{{ $buy->train()->first()->kode_kereta }}</td></tr>
                                    <tr><th> Nama Kereta </th><td>{{ $buy->train()->first()->nama_kereta }}</td></tr>
                                    <tr><th> Tujuan Awal </th> <td>{{ $buy->train()->first()->tujuanawal }}</td></tr>
                                     <tr><th> Tujuan Akhir </th><td>{{ $buy->train()->first()->tujuanakhir }}</td></tr>
                                     <tr><th> Jam Berangkat </th> <td>{{ $buy->train()->first()->jamberangkat }}</td></tr>
                                     <tr><th> Jam Tiba </th><td>{{ $buy->train()->first()->jamtiba }}</td></tr>
                                     <tr><th> Tarif </th><td>{{ $buy->train()->first()->tarif }}</td></tr>
                                       
                                        
                                       
                                        
                                </tbody>
                            </table>
                             <button id="my" onclick="myFunction()">Print this page</button>

                                <script>
                                function myFunction() {
                                    var x = document.getElementById('my');
                                        x.style.display = 'none';
                                    var y = document.getElementById('back');
                                        y.style.display = 'none';
                                    window.print();
                                    x.style.display = 'inline';
                                    y.style.display = 'inline';
                                }
                                </script>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
