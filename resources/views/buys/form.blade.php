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
<div class="form-group {{ $errors->has('kode_kereta') ? 'has-error' : ''}}">
{!! Form::label('kode_kereta', 'Kode Kereta', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::select('kode_kereta', array('Kereta01' => 'Kereta01', 'Kereta02' => 'Kereta02', 'Kereta03' => 'Kereta03'), ['class' => 'form-control']) !!}
        {!! $errors->first('kode_kereta', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('nomor_gerbong') ? 'has-error' : ''}}">
{!! Form::label('nomor_gerbong', 'Nomor Gerbong', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::select('nomor_gerbong', array('1' => '1', '2' => '2', '3' => '3', '4' => '4'), ['class' => 'form-control']) !!}
        {!! $errors->first('nomor_gerbong', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('nomor_kursi') ? 'has-error' : ''}}">
{!! Form::label('nomor_kursi', 'Nomor Kursi', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::select('nomor_kursi', array('1' => '1', '2' => '2', '3' => '3'), ['class' => 'form-control']) !!}
        {!! $errors->first('nomor_hp', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>
