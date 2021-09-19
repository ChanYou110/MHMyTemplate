<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Charm;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    function store(Request $request){
        //リクエストの中身を見る。
        // dd($request);
        
        //$charm_inputsにrequestに入っているcharmFormの値を入れる。
        $charm_inputs = $request['charmForm'];
        //$skill_inputsにrequestに入っているskillFormの値を入れる。
        $skill_inputs = $request['skillForm'];
        //$ornament_inputsにrequestに入っているornamentFormの値を入れる。
        $ornament_inputs = $request['ornamentForm'];
        //$post_inputsにrequestに入っているpostFormの値を入れる。
        $post_inputs = $request['postForm'];
        
        //DBに保存する過程で失敗したらロールバックをして保存を取り消す(無駄なデータを保存しないようにする)。
        DB::transaction(function() use($charm_inputs, $skill_inputs, $ornament_inputs, $post_inputs){
            //データをデータベースに保存する処理
            $charm = Charm::create($charm_inputs);
            //charm_idとuser_idは$request['postForm']に含まれていないため別で$post_inputsに入れてからDB保存する。
            $post_inputs['charm_id'] = $charm->id;
            $post_inputs['user_id'] = auth()->user()->id;
            $post = Post::create($post_inputs);
            
            //中間テーブルへの登録
            $post->skills()->attach($skill_inputs);
            $post->ornaments()->attach($ornament_inputs);
        });
    }
}
