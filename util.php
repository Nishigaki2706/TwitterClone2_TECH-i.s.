<?php
//便利な関数
////////////////////
/*画像ファイル名から画像のURL を生成
*
*@param string $name 画像ファイル名
*@param string $type ユーザー画像かツイート画像
*@return string
*/
function buildImagePath(string $name = null, string $type)
{
    if($type ==='user' && !isset($name)) {
        return HOME_URL . 'View/img/icon-default-user.svg';
    }

    return HOME_URL . 'View/img_uploaded/' . $type . '/' . htmlspecialchars ($name);
}


/*
*指定した日時からどれだけ経過したかを取得
*  @param string $datetime 日時
*  @return string
*/
function convertToDayTimeAgo(string $datetime)//タイプヒンティング
{
    $unix = strtotime($datetime);
    $now = time();
    $diff_sec = $now - $unix;

    if ($diff_sec < 60) {
        $time = $diff_sec;
        $unix = '秒前';
    }elseif ($diff_sec < 3600){
        $time = $diff_sec / 60;
        $unix = '分前';
    }elseif($diff_sec < 86400){
        $time = $diff_sec / 3600;
        $unix = '時間前';
    }elseif($diff_sec < 2764800){
        $time = $diff_sec / 86400;
        $unix = '日前'; 
    }else{
        if (date('Y') !== date('Y',$unix)){//等しくなかったら年月日を出す
            $time = date('Y年n月j日' , $unix);
        }else{//等しかったら年日を表示
            $time = date('n月j日' , $unix);
        }
        return $time;
    }   
    
    return (int)$time . $unix;
    //文字列や変数を結合するときは「.(ドット)」を使います。
}
/** 
*ユーザー情報をセッションに保存
*
* @param array $user
* @return void
*/

function saveUserSession(array $user){
    //セッションを開始していない場合
    if (session_status() === PHP_SESSION_NONE) {
        //セッション開始
        session_start();
    }

    $_SESSION['USER'] = $user;
}
/**
 * ユーザー情報をセッションから削除
 * 
 * @return void
 */
function deleteUserSession()
{
    //セッションを開始していない場合
    if (session_status() === PHP_SESSION_NONE) {
        //セッション開始
        session_start();
    }

    //セッションのユーザー情報を削除
    unset($_SESSION['USER']);
}