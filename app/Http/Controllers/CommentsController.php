<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comments;
class CommentsController extends Controller
{
     public function index(Request $request){
 
		if(!$request->has('keyword') || empty($request->keyword) ){
			$comment = Comments::paginate(10);
		}else{
			 $kw = $request->keyword;
			 $comment = Comments::where('curtomer_name', 'like', "%$kw%")
								->paginate(10);
			 $comment->withPath("?keyword=$kw");
		}
			return view('_admin/comments/list-comments',[
				'comment'=>$comment
			]);
 	}
 	 public function removeComments($id){
          $comment= Comments::destroy($id);
            return redirect(route('comments')); 
    }

}
