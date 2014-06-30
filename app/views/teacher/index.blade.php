@extends('master')

@section('content')
<div class="row">
  <div class="col-md-6 col-md-offset-3 teacher">
    <div class="teacher-info">
      <img src="{{asset("uploads/$model->picture_url")}}" alt="">
      <h1>{{{$model->name}}}</h1>
    </div>
    <hr>
    <div class="make-comment">
      <textarea class="form-control" id="comment-text"
        placeholder="Pon tu opinión" cols="5" rows="4"></textarea>
      <button class="btn btn-success" id="do-comment" data-id="{{$model->id}}"
        disabled="true"><b>Comentar Anonimamente ;)</b></button>
    </div>

    <ul class="comments" id="comment-list">
      @foreach($comments as $comment)
      <li>
        <div class="comment">
          <div class="comment-head">
            <img src="{{asset("uploads/$model->picture_url")}}">
            <span><b>{{$comment->anon_author}}</b></span>
            <br>
            <span><i class="date">{{$comment->created_at->timestamp}}</i></span>
          </div>
          <div class="comment-body">
              {{{$comment->content}}}
          </div>
          <div class="comment-footer">
            <span data-like-id="{{$comment->id}}">({{$comment->count_likes}}) </span>
            <span><a href="#" class="like" data-id="{{$comment->id}}">Like</a></span> ·

          </div>
        </div>
      </li>
      @endforeach
    </ul>
  </div>
</div>
@stop

@section('scripts')
<script src="{{asset('js/main.js')}}"></script>
@stop
