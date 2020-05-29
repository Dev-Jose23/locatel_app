<div class="form-group {{ $errors->has('cod_proveedor') ? 'has-error' : ''}}">
    <label for="cod_proveedor" class="control-label">{{ 'Cod Proveedor' }}</label>
    <input class="form-control" name="cod_proveedor" type="number" id="cod_proveedor" value="{{ isset($proveedor->cod_proveedor) ? $proveedor->cod_proveedor : ''}}" >
    {!! $errors->first('cod_proveedor', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('proveedor') ? 'has-error' : ''}}">
    <label for="proveedor" class="control-label">{{ 'Proveedor' }}</label>
    <input class="form-control" name="proveedor" type="text" id="proveedor" value="{{ isset($proveedor->proveedor) ? $proveedor->proveedor : ''}}" >
    {!! $errors->first('proveedor', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('correo') ? 'has-error' : ''}}">
    <label for="correo" class="control-label">{{ 'Correo' }}</label>
    <input class="form-control" name="correo" type="email" id="correo" value="{{ isset($proveedor->correo) ? $proveedor->correo : ''}}" >
    {!! $errors->first('correo', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('telefono') ? 'has-error' : ''}}">
    <label for="telefono" class="control-label">{{ 'Telefono' }}</label>
    <input class="form-control" name="telefono" type="text" id="telefono" value="{{ isset($proveedor->telefono) ? $proveedor->telefono : ''}}" >
    {!! $errors->first('telefono', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
