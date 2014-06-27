<?php
class CommenToken extends Eloquent {
    public $table = 'comment_token';

    public function comment() {
        return $this->belongsTo('Comment');
    }
}
