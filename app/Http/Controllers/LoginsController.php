<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LoginUser; //LoginUser.phpというModelを使いますよ宣言

class LoginsController extends Controller
{
    public function getIndex()
    {
        // $loginuser = LoginUser::first(); //LoginUserモデルにアクセスし、loginusersテーブル内の一番目のデータを取得し、$loginuserに代入する
        // dd($loginuser); //データを表示するデバッグ関数
        return view('login');
    }


    public function postIndex(Request $request)

    {

        //postIndex実行時に渡ってきた値に対して、バリデーション処理
        $this->validate($request,[
            'loginid' => 'required|integer',
            'loginpassword' => 'required|regex:/^[0-9]+$/',
            'authority' => 'required|integer|min:1|max:2',
        ]);
        if(isset($_POST['loginid'])){
            $id = filter_input(INPUT_POST,'loginid'); //指定した変数を受け取りフィルタリングする処理
            $pass = filter_input(INPUT_POST, 'loginpassword'); //指定した変数を受け取りフィルタリングする処理
            $auth = filter_input(INPUT_POST, 'authority'); //値がなければnullが$authに格納される

            return view('loginresult')->with(["id" => $id, "pass" => $pass, "auth" => $auth]);
        }
        else{
            return view('login');
        }
    }
    // {
    //     if(isset($_POST['loginid'])){
    //         $inputs = ['loginid' => $_POST['loginid'], 'loginpassword' => $_POST['loginpassword'], 'authority' => $_POST['authority']];
    //         return view('loginresult', compact('inputs'));
    //     }
    //     else{
    //         return view('login');
    //     }
    // }
}
