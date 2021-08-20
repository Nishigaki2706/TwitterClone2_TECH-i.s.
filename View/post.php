<?php

//設定関連を読み込む
include_once('../config.php');
//便利な関数を読み込む
include_once('../util.php');

?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <?php include_once('../View/common/head.php'); ?>
    <title>つぶやき画面/twitterクローン</title>
    <meta name="description"content="つぶやき画面です">
</head>
<body class="home">
    <div class="container">
    <?php include_once('../View/common/side.php'); ?>
        <div class="main">
            <div class="main-header">
                <h1>つぶやく</h1>
            </div>
            <div class="tweet-post">
                <div class="my-icon">
                    <img src="<?php echo HOME_URL;?>/View/img_uploaded/user/sample-person.jpg" alt="" class="">
                </div>
                <div class="input-area">
                    <form action="post.php" method="post" enctype="multipart/form-data">
                        <textarea name="body" placeholder="今どうしてる？" maxlength="140"></textarea>
                        <div class="bottom-area"></div>
                            <div class="mb-o">
                                <input type="file" name="image" class="form-control form-control-sm">
                            </div>
                            <button class="btn" type="submit">つぶやく</button>
                    </form>
                </div>
            </div>
            <!-- 仕切りエリア -->
            <div class="ditch"></div>
        </div>
    </div>
    <?php include_once('../View/common/foot.php'); ?>
</body>

</html>