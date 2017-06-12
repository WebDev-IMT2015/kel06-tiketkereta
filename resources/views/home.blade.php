@extends('layouts.app2')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">Formulir Pembelian Tiket </div>

                <div class="panel-body">
                    <form class="form-horizontal" action="beli" method="POST">
                    {{ csrf_field() }}
                      <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Name</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="name" placeholder="Name">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="alamat" class="col-sm-2 control-label">Alamat</label>
                        <div class="col-sm-9">
                        <textarea class="form-control" name="alamat" placeholder="Alamat" rows="3"></textarea>   
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="nomor_hp" class="col-sm-2 control-label">Nomor HP</label>
                        <div class="col-sm-9">
                       <input type="number" class="form-control" name="nomor_hp" placeholder="Nomor HP" min="0">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="nomor_ktp" class="col-sm-2 control-label">Nomor KTP</label>
                        <div class="col-sm-9">
                          <input type="number" class="form-control" name="nomor_ktp" placeholder="Nomor KTP" min="0">
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
        <div class="col-sm-4">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
