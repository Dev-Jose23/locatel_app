<div class="form-group {{ $errors->has('num_factura') ? 'has-error' : ''}}">
    <label for="num_factura" class="control-label">{{ 'Num Factura' }}</label>
    <input class="form-control" name="num_factura" type="number" id="num_factura" value="{{ isset($factura->num_factura) ? $factura->num_factura : ''}}" >
    {!! $errors->first('num_factura', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('proveedor_id') ? 'has-error' : ''}}">
    <label for="proveedor_id" class="control-label">{{ 'Proveedor' }}</label>
    <input class="form-control" name="proveedor_id" type="custom-select" id="proveedor_id" value="{{ isset($factura->proveedor_id) ? $factura->proveedor_id : ''}}" >
    {!! $errors->first('proveedor_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('fecha') ? 'has-error' : ''}}">
    <label for="fecha" class="control-label">{{ 'Fecha' }}</label>
    <input class="form-control" name="fecha" type="text" id="fecha" value="{{ isset($factura->fecha) ? $factura->fecha : ''}}" >
    {!! $errors->first('fecha', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('foto') ? 'has-error' : ''}}">
    <label for="foto" class="control-label">{{ 'Foto' }}</label>
    <input class="form-control" name="foto" type="file" id="foto" value="{{ isset($factura->foto) ? $factura->foto : ''}}" >
    {!! $errors->first('foto', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('status') ? 'has-error' : ''}}">
    <label for="status" class="control-label">{{ 'Status' }}</label>
    <input class="form-control" name="status" type="text" id="status" value="{{ isset($factura->status) ? $factura->status : ''}}" >
    {!! $errors->first('status', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
