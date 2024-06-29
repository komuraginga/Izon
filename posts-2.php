<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>投稿画面</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>投稿画面</h1>
    </header>
    <nav>
        <ul>
            <li><a href="index.php">ホーム</a></li>
            <li><a href="post.php">投稿</a></li>
            <li><a href="select.php">投稿選択</a></li>
        </ul>
    </nav>
    <main>
        <form action="submit_post.php" method="post">
            <label for="title">タイトル:</label>
            <input type="text" id="title" name="title" required>
            
            <label for="content">内容:</label>
            <textarea id="content" name="content" rows="4" required></textarea>
            
            <button type="submit">投稿する</button>
        </form>
    </main>
    <footer>
        <p>&copy; 2024 サイト</p>
    </footer>
</body>
</html>
