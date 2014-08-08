@extends('master')

@section('content')
<div class="row">
  <div class="col-md-8 col-md-offset-2 wall">
    <br>
    <div class="panel panel-warning">
      <div class="panel-heading">
        Tú deberias ser el moderador <b>{{{Auth::user()->username}}}</b>
        -----------&gt; <a href="{{url('mod/logout')}}">Cerrar Sesión</a> &lt;-----------
      </div>
    </div>

    <div class="row mod-panel">
      <div class="col-md-8">
        <div class="panel panel-info">
          <div class="panel-heading">
            <h3 class="panel-title">Moderar Comentarios</h3>
          </div>
          <div class="panel-body">
            <table class="table table-striped">
              <thead>
                <th>Nombre</th>
                <th></th>
              </thead>
              <tbody>
                @foreach($teachers as $teacher)
                  <tr>
                    <td>{{{$teacher->name}}}</td>
                    <td>
                      <a href="{{url("mod/god/$teacher->id")}}" title="">
                        Moderar
                      </a>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="panel panel-success">
          <div class="panel-heading">
            <h3 class="panel-title">Cambiar Contraseña</h3>
          </div>
          <div class="panel-body">
            @if(Session::has('error'))
              <div class="alert alert-danger alert-dismissable">
                <button type="button" class="close" data-dismiss="alert"
                  aria-hidden="true">&times;</button>
                {{{Session::get('error')}}}
              </div>
            @endif
            @if(Session::has('message'))
              <div class="alert alert-success alert-dismissable">
                <button type="button" class="close" data-dismiss="alert"
                  aria-hidden="true">&times;</button>
                {{{Session::get('message')}}}
              </div>
            @endif
            {{Form::open(['url'=>url('mod/god/update')])}}
            <div class="form-group">
              {{Form::label('current', 'Password Actual:')}}
              {{Form::password('current', [
                'class'=>'form-control',
                'placeholder'=>'Password Actual',
                'autocompelte'=>'off'
              ])}}
              {{Form::label('new', 'Nuevo Password')}}
              {{Form::password('new', [
                'class'=>'form-control',
                'placeholder'=>'Nuevo Password',
                'autocompelte'=>'off'
              ])}}
              {{Form::label('new2', 'Confirmar')}}
              {{Form::password('new2', [
                'class'=>'form-control',
                'placeholder'=>'Confirmar',
                'autocompelte'=>'off'
              ])}}
            </div>
            {{Form::submit('Actualizar Password', [
              'class'=>'btn btn-success'
            ])}}
            {{Form::close()}}
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@stop

@section('styles')
<link rel="stylesheet" href="{{asset('css/panel.css')}}">
@stop
