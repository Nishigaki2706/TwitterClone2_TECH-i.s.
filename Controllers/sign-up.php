<?php
//////////////////
///サインアップコントローラー
//////////////////

//設定を読み込む
include_once '../config.php';
//便利な関数を読み込む
include_once '../util.php';

//ユーザーデータ操作モデルを読み込み ユーザーの認証を行うため
include_once '../Models/users.php';

//ログイン結果 ログイン失敗時にfalesが入る想定
$try_login_result = null;

//登録項目がすべて入力されていれば
if(isset($_POST['nickname']) && isset($_POST['name'])&& isset($_POST['email']) && isset($_POST['password'])) {
    $data = [
        'nickname' => $_POST['nickname'],
        'name' => $_POST['name'],
        'email' => $_POST['email'],
        'password' => $_POST['password'],
    ];
    //ユーザーを作成し、成功すれば
    if (createUser ($data)) {
        //ログイン画面に遷移
        header('Location: ' . HOME_URL . 'Controllers/sign-in.php');
        exit;
    }
}

//画面表示
include_once '../View/sign-up.php';