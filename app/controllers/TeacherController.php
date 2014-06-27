<?php
class TeacherController extends BaseController {
    public function index($id) {
        $teacher = Teacher::find($id);

        return View::make('teacher.index')
            ->with('model', $teacher);
    }
}
