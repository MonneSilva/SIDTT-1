<div class="form-row">
    <div class="form-group col-md-2">
      {!!Form::label('Boleta:')!!}
      {!!Form::text('boleta',null,['class'=>'form-control-plaintext','placeholder'=>'Ingresa tu boleta'])!!}
    </div>
    <div class="form-group col-md-6">
      {!!Form::label('Nombre(s)')!!}
      {!!Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Ingresa tu nombre'])!!}
    </div>
    </div>
  <div class="form-row">
    
    <div class="form-group col-md-6">
      {!!Form::label('Apellido Paterno')!!}
                  {!!Form::text('ape_pat',null,['class'=>'form-control','placeholder'=>'Apellido Paterno'])!!}
  </div>
     <div class="form-group col-md-6">
     {!!Form::label('Apellido Materno')!!}
                  {!!Form::text('ape_mat',null,['class'=>'form-control','placeholder'=>'Apellido Materno'])!!}
  </div>
</div>
<div class="form-row">
    <div class="form-group col-md-8">
     {!!Form::label('Correo Electrónico')!!}
                  {!!Form::email('email',null,['class'=>'form-control','placeholder'=>'Ingresa tu correo electrónico'])!!}
    </div>
    <div class="form-group col-md-4">
      {!!Form::label('Contraseña')!!}
                  {!!Form::password('password',['class'=>'form-control','placeholder'=>'Ingresa tu contraseña'])!!}
  </div>
</div>
<div class="form-row">
    <div class="form-group col-md-8">
     {!!Form::label('Confirmar Correo Electrónico')!!}
                  {!!Form::email('email_confirmation',null,['class'=>'form-control','placeholder'=>'Ingresa tu correo electrónico'])!!}
    </div>
    <div class="form-group col-md-4">
      {!!Form::label('Confirmar Contraseña')!!}
                  {!!Form::password('password_confirmation',['class'=>'form-control','placeholder'=>'Ingresa tu contraseña'])!!}
  </div>
</div>
      {!!Form::hidden('type','alumno')!!}