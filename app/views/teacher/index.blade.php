@extends('master')

@section('content')
<div class="row">
  <div class="col-md-5 teacher">
    <div class="teacher-info">
      <img src="{{asset("uploads/$model->picture_url")}}" alt="">
      <h1>{{{$model->name}}}</h1>
    </div>
    <hr>
    <div class="make-comment">
      <textarea class="form-control" id="comment"
        placeholder="Pon tu opinión" cols="5" rows="3">
      </textarea>
      <button class="btn btn-success"><b>Comentar Anonimamente ;)</b></button>
    </div>

    <ul class="comments">
      <li>
        <div class="comment">
          <div class="comment-head">
            <img src="{{asset("uploads/$model->picture_url")}}" alt="">
            <span><b>Un tal loco</b></span>
            <br>
            <span><i>fecha</i></span>
          </div>
          <div class="comment-body">
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
              proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
          </div>
          <div class="comment-footer">
            <span>(0) </span>
            <span><a href="#" title="">Like</a></span> ·
            <span>(1) </span>
            <span><a href="#" title="">Dislike</a></span> ·
            <span><a href="#" title="">Comment</a></span>
          </div>
        </div>
      </li>
    </ul>
  </div>
</div>

@stop

@section('scripts')
<script src="{{asset('js/main.js')}}"></script>
@stop
