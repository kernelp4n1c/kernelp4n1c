<?php
class ModController extends BaseController {
    public function login() {
        if (!Auth::check()) {
            return View::make('mod.login');
        }
        $teachers = Teacher::all();
        return View::make('mod.index')
            ->with('teachers', $teachers);
    }

    public function doLogin() {
        if (Auth::attempt(['username'=>Input::get('username'), 'password'=>Input::get('password')])) {
            return Redirect::to('mod/god');
        }
        return Redirect::to('mod/god')->withInput(Input::except('password'));
    }

    public function logout() {
        if (Auth::check()) {
            Auth::logout();
        }
        return Redirect::to('/');
    }

    public function changePassword() {
        $user = Auth::user();
        $current = Input::get('current');
        $new = Input::get('new');
        $new2 = Input::get('new2');

        if (Auth::validate(['username'=>$user->username, 'password'=>$current])) {
            if ($new === $new2 && strlen($new) > 0 && strlen($new2) > 0) {
                $user->password = Hash::make($new);
                $user->save();
                return Redirect::to('mod/god')
                    ->with('message', 'Password actualizado.');
            }
            return Redirect::to('mod/god')
                ->with('error', 'Passwords no coinciden.');
        }
        return Redirect::to('mod/god')
            ->with('error', 'Password incorrecto.');
    }

    public function modTeacher($id) {
        $teacher = Teacher::findOrFail($id);
        $comments = $teacher->comments()->where('visible', '=', '1')->get();

        return View::make('mod.comments')
            ->with('model', $teacher)
            ->with('comments', $comments);
    }

    public function removeComment($id) {
        $comment = Comment::findOrFail($id);
        $comment->visible = false;
        $comment->save();

        return Response::json([
            'status'=>'ok',
            'id'=>$id
        ]);
    }
}
