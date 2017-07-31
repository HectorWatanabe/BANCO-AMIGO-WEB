{!! Form::open(['url' => $url, 'method' => $method]) !!}
    <div class="form-group">
        <label>Tipo Plan</label>
        {{Form::text('bank_name', $bank_name, [ 'class' => 'form-control', 'required'])}}
    </div>

    <div class="form-group">
        <label>Moneda</label>
        {{Form::text('type', $type_rate, [ 'class' => 'form-control', 'required'])}}
    </div>

    <div class="form-group">
        <label>Tasa</label>
        {{Form::number('rate', null, [ 'class' => 'form-control', 'step' => 'any','placeholder' => 'Registra una Tasa', 'required'])}}
    </div>

    <div class="form-group">
        <label>Días</label>
        {{Form::number('days', null, [ 'class' => 'form-control', 'placeholder' => 'Registra el Plazo de días', 'required'])}}
    </div>

    <button type="submit" class="btn btn-primary">Registrar</button>
    <button type="reset" class="btn btn-default">Regresar</button>
{!! Form::close() !!}