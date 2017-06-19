<div class="form-group {{ $errors->has('nama') ? 'has-error' : ''}}">
    {!! Form::label('nama', 'Nama', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('nama', null, ['class' => 'form-control']) !!}
        {!! $errors->first('nama', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('alamat') ? 'has-error' : ''}}">
{!! Form::label('alamat', 'Alamat', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('alamat', null, ['class' => 'form-control']) !!}
        {!! $errors->first('alamat', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('nomor_hp') ? 'has-error' : ''}}">
{!! Form::label('nomor_hp', 'Nomor HP', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::number('nomor_hp', null, ['class' => 'form-control']) !!}
        {!! $errors->first('nomor_hp', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('nomor_ktp') ? 'has-error' : ''}}">
{!! Form::label('nomor_ktp', 'Nomor KTP', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::number('nomor_ktp', null, ['class' => 'form-control']) !!}
        {!! $errors->first('nomor_ktp', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('id_kereta') ? 'has-error' : ''}}">
{!! Form::label('id_kereta', 'Kereta', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
            
          <select class="form-control" name="id_kereta">
          
            @foreach($trains as $item)
              <option value="{{$item->id_kereta}}">{{$item->kode_kereta}} / {{$item->nama_kereta}} / {{$item->kapasitas_per_gerbong}} / {{$item->tujuanawal}} / {{$item->tujuanakhir}} / {{$item->jamberangkat}} - {{$item->jamtiba}}</option>
            @endforeach
          </select>
          <p>Kode Kereta / Nama Kereta / Kapasitas / Tujuan Awal / Tujuan Akhir / Jam Berangkat - Jam Tiba</p>
    </div>
</div>


<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Buy', ['class' => 'btn btn-primary']) !!}
    </div>
</div>
