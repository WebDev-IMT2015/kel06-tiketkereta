@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading">Trains</div>
                    <div class="panel-body">
                        <a href="{{ url('/trains/create') }}" class="btn btn-success btn-sm" title="Add New Train">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>

                        {!! Form::open(['method' => 'GET', 'url' => '/trains', 'class' => 'navbar-form navbar-right', 'role' => 'search'])  !!}
                        <div class="input-group">
                            <input type="text" class="form-control" name="search" placeholder="Search...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="submit">
                                    <i class="fa fa-search">OK</i>
                                </button>
                            </span>
                        </div>
                        {!! Form::close() !!}

                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th>ID</th><th>Kode</th><th>Nama</th><th>Jumlah Gerbong</th><th>Kapasitas Gerbong</th><th>Tujuan Awal</th><th>Tujuan Akhir</th><th>Jam Berangkat</th><th>Jam Tiba</th><th>Tarif</th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($trains as $item)
                                    <tr>
                                        <td>{{ $item->id_kereta }}</td>
                                        <td>{{ $item->kode_kereta }}</td>
                                        <td>{{ $item->nama_kereta }}</td>
                                        <td>{{ $item->jumlah_gerbong }}</td>
                                        <td>{{ $item->kapasitas_per_gerbong }}</td>
                                        <td>{{ $item->tujuanawal }}</td>
                                        <td>{{ $item->tujuanakhir }}</td>
                                        <td>{{ $item->jamberangkat }}</td>
                                        <td>{{ $item->jamtiba }}</td>
                                        <td>{{ $item->tarif }}</td>
                                        <td>
                                            {{-- <a href="{{ url('/trains/' . $item->id_kereta) }}" title="View Train"><button class="btn btn-info btn-xs"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a> --}}
                                            <a href="{{ url('/trains/' . $item->id_kereta . '/edit') }}" title="Edit Train"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                            {!! Form::open([
                                                'method'=>'DELETE',
                                                'url' => ['/trains', $item->id_kereta],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-xs',
                                                        'title' => 'Delete Train',
                                                        'onclick'=>'return confirm("Confirm delete?")'
                                                )) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $trains->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
