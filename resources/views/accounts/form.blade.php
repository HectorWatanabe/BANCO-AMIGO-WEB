{!! Form::open(['url' => $url, 'method' => $method]) !!}
    <div class="form-group">
        <label>Días de Plazo</label>
        {{ Form::select('days', $list_days, null, ['class' => 'form-control', 'required', 'placeholder' => 'Selecciona un Plazo'])}}
    </div>

    <div class="form-group">
        <label>Tipo de Moneda</label>
        {{ Form::select('type_account', [ 'Soles' => 'Soles s/', 'Dólares' => 'Dólares $'], null, ['class' => 'form-control', 'required', 'placeholder' => 'Selecciona un tipo de moneda'])}}
    </div>

    <div class="form-group">
        <label>Saldo Inicial</label>
        {{Form::number('balance', null, [ 'class' => 'form-control', 'step' => 'any','placeholder' => 'Registra una saldo', 'required'])}}
        <p class="help-block">{{$message}}</p>
    </div>

    <button type="submit" class="btn btn-primary">Registrar</button>
    <button type="reset" class="btn btn-default">Regresar</button>
{!! Form::close() !!}