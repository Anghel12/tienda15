<div class="container">
    <div class="row">
        {!! Form::open(['route' => 'CrearOrden', 'method' => 'POST', 'class' => 'col-12']) !!}
            <h3 class="mb-5">Shipping Info</h3>

            <div class="form-group">
                {!! Form::label('fullname', 'Nombre completo', ['class' => 'form-label fs-0 text-1000 ps-0 text-none']) !!}
                {!! Form::text('fullname', null, ['class' => 'form-control', 'placeholder' => 'Nombre completo']) !!}
                @error('fullname')
                    <span class="text-danger"> {{$message}} </span>
                @enderror  
            </div>

            <div class="form-group">
                {!! Form::label('phone', 'Telefono', ['class' => 'form-label fs-0 text-1000 ps-0 text-none']) !!}
                {!! Form::text('phone', null, ['class' => 'form-control', 'placeholder' => 'Telefono']) !!}
                @error('phone')
                    <span class="text-danger"> {{$message}} </span>
                @enderror  
            </div>

            <div class="form-group">
                {!! Form::label('address', 'Calle', ['class' => 'form-label fs-0 text-1000 ps-0 text-none']) !!}
                {!! Form::text('address', null, ['class' => 'form-control', 'placeholder' => 'Calle']) !!}
                @error('address')
                    <span class="text-danger"> {{$message}} </span>
                @enderror  
            </div>

            <div class="form-group">
                {!! Form::label('city', 'ciudad', ['class' => 'form-label fs-0 text-1000 ps-0 text-none']) !!}
                {!! Form::text('city', null, ['class' => 'form-control', 'placeholder' => 'ciudad']) !!}
                @error('city')
                    <span class="text-danger"> {{$message}} </span>
                @enderror  
            </div>

            <div class="form-group">
                {!! Form::label('state', 'Estado', ['class' => 'form-label fs-0 text-1000 ps-0 text-none']) !!}
                {!! Form::text('state', null, ['class' => 'form-control', 'placeholder' => 'Estado']) !!}
                @error('state')
                    <span class="text-danger"> {{$message}} </span>
                @enderror  
            </div>

            <div class="form-group">
                {!! Form::label('zipcode', 'zipcode', ['class' => 'form-label fs-0 text-1000 ps-0 text-none']) !!}
                {!! Form::text('zipcode', null, ['class' => 'form-control', 'placeholder' => 'zipcode']) !!}
                @error('zipcode')
                    <span class="text-danger"> {{$message}} </span>
                @enderror  
            </div>

            <div class="form-group">
                <p class="font-weight-bold">Metodo de pagos</p>
                <label>
                    {!! Form::radio('payment_method', 'cash_on_delivery') !!}
                    cash_on_delivery
                </label>
                <label>
                    {!! Form::radio('payment_method', 'paypal', true) !!}
                    paypal
                </label>
                @error('status')
                    <hr>
                    <span class="text-danger"> {{$message}} </span>
                @enderror 
            </div>

            {!! Form::submit('crear orden', ['class' => 'btn btn-primary px-8 px-sm-11 me-2 col-md-9']) !!}
            <a class="btn btn-phoenix-secondary text-nowrap col-md-1" href="{{ url('/') }}" type="submit">Cancelar</a>
        {!! Form::close() !!}
    </div>
</div>
