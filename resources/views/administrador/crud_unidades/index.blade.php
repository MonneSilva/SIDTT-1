@extends('layouts.perfiles')
<title>Administrador - Unidades</title>
@section('contenido-perfil')

 @if(Session::has('message'))
  <div class="alert alert-warning alert-dismissible" role="alert">
      {{Session::get('message')}}
  </div>
  @endif
  <input id="PageN" type="hidden" name="Unidades">
  <div class="title-l"> 
  <h7>Unidades</h7>
</div>
  <div class="wrapped">
<div id="table-crud">
           <table class="table table-hover table-responsive">
    <thead>
<tr>
   <th  title="clave"  >
    {!!Form::label('Código')!!}
   </th>
   <th  title="ua"  >
         {!!Form::label('Unidad de Aprendizaje')!!} 
</th>
      <th  title="group" >{!!Form::label('Grupo')!!} </th>
      
      <th  title="name" >
         {!!Form::label('Docente')!!}
  </th>
  <th  title="periodo" >
         {!!Form::label('Periodo')!!}
  </th>
    
    <th  title="date" >
         {!!Form::label('Inicio')!!}
  </th>
   <th  title="date" >
         {!!Form::label('Fin')!!}
  </th>
  <th  title="state" >
         {!!Form::label('Estado')!!}
  </th>
  <th title="actions" > 
    {!!Form::label('Acciones')!!}
  </th>

</tr>
</thead>
 <tbody>
    @foreach($uni as $u)
  <tr id="{{$u->idUnidad_Aprendizaje}}">
    <td name="clave"   contentEditable="false" class="editeable"> {!!Form::text('clave')!!}</td>
 <td name="ua" >{!!Form::select('unidad',$unid, $unid[$u->tipo])!!}
    </td>
    <td name="group"  class="editeable"> {!!Form::text('group',$u->grupo)!!}</td>
    <td  name="name"  > 
    <div class="input-group">
   {!!Form::select('d_titular',$docentes, $u->d_titular)!!}
  <div class="input-group-append">
    <button id="curriculum" class="btn btn-outline-secondary material-icons" type="button" name="curriculum" >assignment_ind</button>
  </div>
</div>  
    </td>
   <td  name="periodo" class="editeable">{!!Form::text('group',$u->periodo)!!}</td>
    <td  title="date">
      {!!Form::date('fecha_in',\Carbon\Carbon::parse($u->fecha_ini)->format('Y-m-d'))!!}
  
    </td>
    <td  title="date">
       {!!Form::date('fecha_fin',\Carbon\Carbon::parse($u->fecha_ini)->format('Y-m-d'))!!}
     <td title="state" >
  @if($u->deleted_at == null)
  <label>Activo</label>
  @else
  <label>Inactivo</label>
  @endif
</td>
    <td  title="actions"  class="editeable">
   <button type="button" class="btn btn-info">
                          <i id="bval" class=" material-icons" title="Editar" onclick="action();">edit</i>
                          </button>
                            <button type="button" id="delete" class="btn btn-danger">
                          <i id="bdelete" class=" material-icons" title="Eliminar" onclick="">delete</i>
                          </button> 
    </td>
         @csrf
  </tr>
  @endforeach
</tbody>
</table>
</div>
</div>

 @stop 
