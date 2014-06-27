<?php
class Teacher extends Eloquent {
    public $table = 'teachers';

    public function comments() {
        return $this->hasMany('Comment');
    }

    public function signatures() {
        return $this->hasMany('Signature');
    }
}
