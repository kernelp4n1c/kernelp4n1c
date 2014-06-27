<?php
class Signature extends Eloquent {
    public $table = 'signatures';

    public function teacher() {
        return $this->belongsTo('Teacher');
    }
}
