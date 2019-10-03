<?php

namespace App\Http\Controllers\Article;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Article; //Model Articleを使いますよ宣言
use App\Http\Requests\Article\ArticleRequest; //Request ArticleRequestを使いますよ宣言

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alldata = Article::all();
        if($alldata->isEmpty() == true){
            dd('Empty');
        }
        else{
            return view('index', compact('alldata'));
            //compact('alldata')は['alldata'=>$alldata]に等しい。
        }
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndex()
    {
        return view('article');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function confirm_newdata(ArticleRequest $request)
    {
        $info = $request->all();
        // $info = ['name' => $_POST['name'], 'email' => $_POST['email'], 'age' => $_POST['age'], 'area' => $_POST['area'], 'gender' => $_POST['gender'], 'media1' => $_POST['media1'], 'media2' => $_POST['media2'], 'comment' => $_POST['comment'], 'image' => $_POST['image']];
        return view('article/confirm', compact('info'));

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function send_data($id) //編集画面にデータを送る
    {
        $info = Article::find($id);
        return view('article/edit', ['info' => $info]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function confirm_editdata(ArticleRequest $request) //編集画面で入力した内容を確認するために表示させる
    {
        $info = $request->all();
        if(!isset($info['media1'])){
            $info['media1'] = null;
        }
        if(!isset($info['media2'])){
            $info['media2'] = null;
        }

        if($info['media1']===$info['media2']){
            return redirect('/article/edit/'.$info['id'])->with('media','告知メディアはどちらかを絶対に選択してください。');
        }

        return view('article/editconfirm', compact('info'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function confirm_deletedata($id) //削除対象内容を確認するために表示させる
    {
        $info = Article::find($id);
        return view('article/deleteconfirm', ['info' => $info]);

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = array(
            'name' => $request->name,
            'email' => $request->email,
            'age' => $request->age,
            'area' => $request->area,
            'gender' => $request->gender,
            'media1' => $request->media1,
            'media2' => $request->media2,
            'note' => $request->note,
            'image' => $request->image,
        );
        Article::insert($data);
        return view('article/complete');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request) //tableへのinsertを実行する
    {
        $id = $request->id;
        $data = Article::find($id);
        $data->name = $request->name; //inputメソッドで取得した入力値で、tableから取得した値を上書き
        $data->email = $request->email;
        $data->age = $request->age;
        $data->area = $request->area;
        $data->gender = $request->gender;
        $data->media1 = $request->media1;
        $data->media2 = $request->media2;
        $data->note = $request->note;
        $data->image = $request->image;
        $data->save();

        return redirect()->action('Article\ArticlesController@index');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request) //
    {
        $data = Article::find($request->id);
        $data->delete();
        return redirect()->action('Article\ArticlesController@index');
    }
}
