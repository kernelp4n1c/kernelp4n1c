<?php
class Signature extends Eloquent {
    public $table = 'signatures';

    public function teachers() {
        return $this->belongsToMany('Teacher', 'teacher_signature');
    }
}
