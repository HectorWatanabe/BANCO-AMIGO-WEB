{!! Form::open(['url' => $url, 'method' => $method]) !!}
    
    <div class="form-group">
        <label>Descripción</label>
        {{Form::text('description', null, [ 'class' => 'form-control', 'required', 'placeholder' => 'Ingresa una descripción'])}}
    </div>

    <div class="form-group">
        <label>Inicio de Rango</label>
        {{Form::number('rango1', null, [ 'class' => 'form-control', 'placeholder' => 'Registra el inicio de plazo', 'required'])}}
    </div>

    <div class="form-group">
        <label>Fin de Rango</label>
        {{Form::number('rango2', null, [ 'class' => 'form-control', 'placeholder' => 'Registra el fin de plazo', 'required'])}}
    </div>

    <div class="form-group">
        <label>Días de Intereses</label>
        {{Form::number('days', null, [ 'class' => 'form-control', 'placeholder' => 'Registra el Plazo de días', 'required'])}}
    </div>

    <button type="submit" class="btn btn-primary">Registrar</button>
    <button type="reset" class="btn btn-default">Regresar</button>
{!! Form::close() !!}