@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                </div>


            </div>
            <div class="panel panel-default">
                <div class="container_web">
                    <a href="{{ route('buy') }}">Buy</a>
                    <br>    
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection



{{-- @section('content')
<div class="container">
    <div class="row">
        <div class="col-md-7">
            <div class="panel panel-default">
                <div class="panel-heading">Formulir Pembelian Tiket </div>

                <div class="panel-body">
                    <form class="form-horizontal" action="beli" method="POST">
                    {{ csrf_field() }}
                      <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Name</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="name" placeholder="Name" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="alamat" class="col-sm-2 control-label">Alamat</label>
                        <div class="col-sm-9">
                        <textarea class="form-control" name="alamat" placeholder="Alamat" rows="3" required></textarea>   
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="nomor_hp" class="col-sm-2 control-label">Nomor HP</label>
                        <div class="col-sm-9">
                       <input type="number" class="form-control" name="nomor_hp" placeholder="Nomor HP" min="0" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="nomor_ktp" class="col-sm-2 control-label">Nomor KTP</label>
                        <div class="col-sm-9">
                          <input type="number" class="form-control" name="nomor_ktp" placeholder="Nomor KTP" min="0" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="kode_kereta" class="col-sm-2 control-label">Kode Kereta</label>
                        <div class="col-sm-9">
                          <select name="kode_kereta" class="form-control">
                            <option value="kereta01">Kereta01</option>
                            <option value="kereta02">Kereta02</option>
                            <option value="kereta03">Kereta03</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="nomor_gerbong" class="col-sm-2 control-label">Nomor Gerbong</label>
                        <div class="col-sm-9">
                          <select name="nomor_gerbong" class="form-control">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="nomor_kursi" class="col-sm-2 control-label">Nomor Kursi</label>
                        <div class="col-sm-9">
                          <select name="nomor_kursi" class="form-control">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-9">
                          <button type="submit" class="btn btn-primary btn-block">Daftar</button>
                        </div>
                      </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-sm-5">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                </div>

            </div>
            <div class="panel panel-default">
            <div class="table-responsive">
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th>Name</th><th>Kode Kereta</th><th>Nomor Gerbong</th><th>Nomor Kursi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($home as $item)
                                    <tr>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->kode_kereta }}</td>
                                        <td>{{ $item->nomor_gerbong }}</td>
                                        <td>{{ $item->nomor_kursi }}</td>
                                        <td>
                                            <li style="margin-bottom:5px;">{{ $item->item }} <a href="{{ route('/edit', $item->id_beli) }}" class="btn btn-warning btn-xs">Edit</a> <a href="{{ url('/'.$item->id_beli) }}" class="btn btn-danger btn-xs">x</a></li> --}}
                                            {{-- <a href="{{ url($item->id_beli) }}" title="View pembelian"><button class="btn btn-info btn-xs"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url($item->id_beli . '/edit') }}" title="Edit pembelian"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                            {!! Form::open([
                                                'method'=>'DELETE',
                                                'url' => ['/home', $item->id_beli],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-xs',
                                                        'title' => 'Delete concert',
                                                        'onclick'=>'return confirm("Confirm delete?")'
                                                )) !!}
                                            {!! Form::close() !!} --}}
          {{--                               </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $concerts->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>
                      </div>
        </div>
    </div>
</div>
@endsection
 --}}