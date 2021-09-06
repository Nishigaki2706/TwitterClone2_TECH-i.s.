<?php
/////////////////////////////
//ユーザーデータを処理
////////////////////////////

/**
 * ユーザーを作成
 * 
 *  @param array $data
 *  @return bool
 */
function createUser(array $data)
{
    //DB接続
    $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

    //接続エラーがある場合->処理停止
    if ($mysqli->connrct_error) {
        echo 'MySQLの接続に失敗しました。 :'. $mysqli->connect_error . "\n";
        exit;
    }

    //新規登録のsqlクエリを作成
    $query = 'INSERT INTO users (email, name, nickname, password) VALUES (?, ?, ?, ?)';

    //プリペアドステートメントに、作成したクエリを登録
    $statement = $mysqli->prepare($query);

    //パスワードをハッシュ値に変更
    $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT); 
      //password_hash関数はパスワードを暗号のような文字列に変換できる

    //クエリのプレースホルダ（?の部分）にカラム値を紐付け
    $statement->bind_param('ssss', $data['email'], $data['name'], $data['nickname'], $data['password']);
      //ssssはstringを意味している1つ目のｓが$data['email']を表し、2つ目のsが$data['name']を表している…4つめのｓまで同じ。すべてstringで処理される。また処理は左からされる

    //クエリを実行
    $response = $statement->execute();

    //実行に失敗した場合->エラーを表示
    if ($response === false) {
        echo 'エラーメッセージ:' . $mysqli->error . "\n";
    }

    //DB接続を解放
    $statement->close();
    $mysqli->close();

    return $response;
}


/**
 *  ユーザー情報取得：ログインチェック
 * 
 *  @param string $email
 *  @param string $password
 *  @return array|false
 */
function findUserAndCheckPassword(string $email, string $password)
{
     //DB接続
     $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

     //接続エラーがある場合->処理停止
     if($mysqli->connect_errno) {
       echo 'MySQLの接続に失敗しました。:' . $mysqli->connct_error . "\n";
       exit;
     }

     //入力値をエスケープ（メールアドレスをエスケープ）
     $email = $mysqli->real_escape_string($email);

     //SQLクエリを作成
     // -外部からのリクエストは何が入ってくるかわからないので、必ず、エスケープしたものをクオートで囲む
     $query = 'SELECT * FROM users WHERE email = "' . $email . '"';

     //クエリ実行
     $result = $mysqli->query($query);

     //クエリ実行が失敗した場合->return
     if ($result) {
       //MySQL処理中にエラー発生
       echo 'エラーメッセージ：' .$mysqli->error . "\n";
       $mysqli->close();
       return false;
     }

     //ユーザー情報を取得
     $user = $result->fetch_array(MYSQLI_ASSOC)

     //ユーザーが存在しない場合->return
     if (!$user) {
       $mysqli->close();
       return false;
     }

     //パスワードチェック、不一致の場合->return
     if (!password_verify($password,$user['password'])) {
       $mysqli->close();
       return false;
     }

     //DB接続を解放
     $mysqli->close();

     return $user;
}
