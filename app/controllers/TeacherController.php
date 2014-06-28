<?php
class TeacherController extends BaseController {
    public function index($id) {
        $teacher = Teacher::findOrFail($id);
        $comments = $teacher->comments()->orderBy('count_likes', 'desc')->get();

        return View::make('teacher.index')
            ->with('model', $teacher)
            ->with('comments', $comments);
    }

    public function comment($id) {
        $teacher = Teacher::findOrFail($id);
        $text = trim(Input::get('comment'));
        if (count($text) > 0) {
            $comment = new Comment();
            $comment->content = $text;
            $comment->anon_author = GUID::generate();
            $comment->teacher_id = $id;
            $comment->count_likes = 0;
            $comment->save();

            return Response::json([
                'id'=>$comment->id,
                'comment'=>$comment->content,
                'anonAuthor'=>$comment->anon_author,
                'teacherId'=>intval($comment->teacher_id),
                'likes'=>$comment->count_likes,
                'date'=>$comment->created_at->timestamp
            ], 200);
        }

        return Response::json([
            'error'=>'text is empty'
        ], 400);
    }

    public function like($id) {
        $comment = Comment::findOrFail($id);
        $commentTokens = CommentToken::where('token', '=', Cookie::get('anon'))
            ->where('comment_id', '=', $id)->get();

        if (count($commentTokens) === 0) {
            $comment->count_likes = $comment->count_likes + 1;
            $comment->save();

            $commentToken = new CommentToken();
            $commentToken->token = Cookie::get('anon');
            $commentToken->comment_id = $id;
            $commentToken->save();
        }

        return Response::json([
            'id'=>$comment->id,
            'likes'=>intval($comment->count_likes)
        ], 200);
    }
}
