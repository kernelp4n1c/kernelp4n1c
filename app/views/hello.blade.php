@extends('master')

@section('content')
<div class="row">
  <div class="col-md-8 col-md-offset-2 wall">
    <center>
      <span style="font-size: 80px">Paredón</span>
    </center>
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <input type="text" class="form-control"
          id="name"
          autocomplete="off"
          placeholder="Busque por nombre" />
      </div>
    </div>
    <div class="teachers" id="teacher-list">
      @foreach($teachers as $teacher)
        <a href="{{url("teacher/$teacher->id")}}">
          <div class="teacher-item">
            <img src="{{asset("uploads/$teacher->picture_url")}}" />
            <div class="counter" title="{{$teacher->count_comments}} comentarios">
              {{$teacher->count_comments}}
            </div>
            <span>{{{$teacher->name}}}</span>
          </div>
        </a>
      @endforeach
    </div>
  </div>
</div>
@stop

@section('templates')
<script type="text/template" id="teacher-template">
<a href="/teacher/<%= id %>">
  <div class="teacher-item">
    <img src="/uploads/<%= picture %>" alt="">
    <div class="counter" title="<%= comments %> comentarios">
      <%= comments %>
    </div>
    <span><%= name %></span>
  </div>
</a>
</script>
@stop

@section('scripts')
<script src="{{asset('js/index.js')}}"></script>
@stop
