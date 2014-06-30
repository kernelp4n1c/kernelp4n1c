<?php
class Teacher extends Eloquent {
    public $table = 'teachers';

    public function signatures() {
        return $this->belongsToMany('Signature', 'teacher_signature');
    }

    public function comments() {
        return $this->hasMany('Comment');
    }

    public function getCommentsAttribute($value) {
        return intval($value);
    }
}
