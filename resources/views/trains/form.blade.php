<div class="form-group {{ $errors->has('kode_kereta') ? 'has-error' : ''}}">
    {!! Form::label('kode_kereta', 'Kode Kereta', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('kode_kereta', null, ['class' => 'form-control']) !!}
        {!! $errors->first('kode_kereta', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('nama') ? 'has-error' : ''}}">
    {!! Form::label('nama', 'Nama', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('nama', null, ['class' => 'form-control']) !!}
        {!! $errors->first('nama', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('jumlah_gerbong') ? 'has-error' : ''}}">
    {!! Form::label('jumlah_gerbong', 'Jumlah gerbong', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::number('jumlah_gerbong', null, ['class' => 'form-control']) !!}
        {!! $errors->first('jumlah_gerbong', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('kapasitas_per_gerbong') ? 'has-error' : ''}}">
    {!! Form::label('kapasitas_per_gerbong', 'Kapasitas Per Gerbong', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('kapasitas_per_gerbong', null, ['class' => 'form-control']) !!}
        {!! $errors->first('kapasitas_per_gerbong', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>
