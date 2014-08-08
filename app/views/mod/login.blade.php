@extends('master')

@section('content')
<div class="row">
  <div class="col-md-4 col-md-offset-4 wall">
    <br><br>
    {{Form::open()}}
    <div class="form-group">
      {{Form::label('username', 'Username:')}}
      {{Form::text('username', Input::old('username'), [
        'class'=>'form-control',
        'placeholder'=>'un_tal_mod',
        'autocomplete'=>'off'
      ])}}
      {{Form::label('password', 'Password:')}}
      {{Form::password('password', [
        'class'=>'form-control',
        'placeholder'=>'Tu contraseña',
        'autocomplete'=>'off'
      ])}}
      <br>
      {{Form::submit('Ten cuidado con tus poderes :|', [
        'class'=>'btn btn-success'
      ])}}
    </div>
    {{Form::close()}}
  </div>
</div>
@stop
