<?php
class Comment extends Eloquent {
    public $table = 'comments';

    public function teacher() {
        return $this->belongsTo('Teacher');
    }
}
