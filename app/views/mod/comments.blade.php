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
        <div class="panel panel-info mod-panel">
          <div class="panel-heading">
            <h3 class="panel-title">Comentarios para <b>{{$model->name}}</b></h3>
            -----------&gt; <a href="{{url('mod/god')}}" title="">Volver</a> &lt;-----------
          </div>
          <div class="panel-body">
            <ul class="comments" id="comment-list">
              @foreach($comments as $comment)
              <li id="comment-{{$comment->id}}">
                <div class="comment">
                  <div class="comment-head">
                    <img src="{{asset("uploads/$comment->anon_picture")}}">
                    <span><b>{{$comment->anon_author}}</b></span>
                    <br>
                    <span><i class="date">{{$comment->created_at->timestamp}}</i></span>
                  </div>
                  <div class="comment-body">
                      {{{$comment->content}}}
                  </div>
                  <div class="comment-footer">
                    <span data-like-id="{{$comment->id}}">({{$comment->count_likes}}) Likes</span> ·
                    <button class="btn btn-danger" data-id="{{$comment->id}}">Eliminar</button>
                  </div>
                </div>
              </li>
              @endforeach
            </ul>
          </div>
        </div>
  </div>
</div>
@stop

@section('styles')
<link rel="stylesheet" href="{{asset('css/panel.css')}}">
@stop

@section('scripts')
<script src="{{asset('js/panel.js')}}"></script>
@stop
