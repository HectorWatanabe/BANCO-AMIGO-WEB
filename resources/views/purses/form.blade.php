{!! Form::open(['url' => $url, 'method' => $method]) !!}
    <div class="form-group">
        <label>Empresa</label>
        {{Form::text('company','Paypal', [ 'class' => 'form-control', 'required'])}}
    </div>

    <div class="form-group">
        <label>Moneda</label>
        {{Form::text('type_cash', $type_cash, [ 'class' => 'form-control', 'required'])}}
    </div>

    <div class="form-group">
        <label>Monto de Dinero</label>
        {{Form::number('cash', $purse->cash, [ 'class' => 'form-control', 'step' => 'any','placeholder' => 'Registre un monto de dinero', 'required'])}}
    </div>

    <button type="submit" class="btn btn-primary">Registrar</button>
    <button type="reset" class="btn btn-default">Regresar</button>
{!! Form::close() !!}