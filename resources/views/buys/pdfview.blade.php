<style type="text/css">
    table td, table th{
        border:1px solid black;
    }
</style>
<div class="container">

    <br/>
    <a href="{{ route('pdfview',['download'=>'pdf']) }}">Download PDF</a>

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
</div>