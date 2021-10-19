<!DOCTYPE html>
<html lang="ja">
<head>
    <?php include_once('../View/common/head.php'); ?>
    <title>ホーム画面/twitterクローン</title>
    <meta name="description"content="ホーム画面です">
</head>

<body class="home">
    <div class="container">
    <?php include_once('../View/common/side.php'); ?>
        <div class="main">
            <div class="main-header">
                <h1>ホーム</h1>
            </div>

            <!-- つぶやき投稿エリア -->
            <div class="tweet-post">
                <div class="my-icon">
                    <img src="<?php echo htmlspecialchars($view_user['image_path']);?>" alt="" class="">
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

            <div class="ditch"></div>

            <!-- つぶやき一覧エリア -->
            <?php if (empty($view_tweets)): ?>
                <p class="p-3">ツイートがまだありません。</p>
            <?php else: ?>
                <div class="tweet-list">
                    <?php foreach ($view_tweets as $view_tweet): ?>
                        <?php include('../View/common/tweet.php'); ?>
                    <?php endforeach;?>
                </div>
            <?php endif;?>
        </div>
    </div>
    <?php include_once('../View/common/foot.php'); ?>
</body>

</html>