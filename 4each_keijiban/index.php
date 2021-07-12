<!DOCTYPE html>
<html lang="ja">

    
<head>
<meta charset="UTF-8">
<title>4eachblog 掲示板</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
    
<body>
    
    <?php
    mb_internal_encoding("utf8");
    $pdo=new PDO("mysql:dbname=lesson01;host=localhost;","root","");
    $stmt=$pdo->query("select*from 4each_keijiban");
    ?>
    
    <header>
        <div><img src="4eachblog_logo.jpg"></div>
        <div class="header">
            <ul>
                <li>トップ</li>
                <li>プロフィール</li>
                <li>4eachについて</li>
                <li>登録フォーム</li>
                <li>問い合わせ</li>
                <li>その他</li>
            </ul>
        </div>
    </header>
    
    <main>
        <div class="main_container">
            <div class="left">
                <h1>プログラミングに役立つ参考書</h1>
                <form method="post" action="insert.php">
                    <h2>入力フォーム</h2>
                    <div>
                        <label>ハンドルネーム</label>
                        <br>
                        <input type="text" class="text" size="35" name="handlename">
                    </div>
                    
                    <div>
                        <label>タイトル</label>
                        <br>
                        <input type="text" class="text" size="35" name="title">
                    </div>
                    
                    <div>
                        <label>コメント</label>
                        <br>
                        <textarea rows="7" cols="40" name="comments"></textarea>
                    </div>
                    
                    <div>
                        <input type="submit" class="submit" value="投稿する">
                    </div>
                </form>
                <br>
                
                <?php
                while($row = $stmt->fetch()) {
                    echo "<div class='kiji'>";
                    echo "<h3>".$row['title']."</h3>";
                    echo "<div class='contents'>";
                    echo $row['comments'];
                    echo "<div class='handlename'>posted by".$row['handlename']."</div>";
                    echo "</div>";
                    echo "</div>";
                }
                ?>
                <br>
                
            </div>  
            
            <div class="right">
                <h2>人気の記事</h2>
                    <ul>
                        <li>PHPオススメ本</li>
                        <li>PHP MyAdminの使い方</li>
                        <li>いま人気のエディタTop5</li>
                        <li>HTMLの基礎</li>
                    </ul>
                <h2>オススメリンク</h2>
                    <ul>
                        <li>インターノウス株式会社</li>
                        <li>XAMPPのダウンロード</li>
                        <li>Eclipseのダウンロード</li>
                        <li>Braketsのダウンロード</li>
                    </ul>
                <h2>カテゴリ</h2>
                    <ul>
                        <li>HTML</li>
                        <li>PHP</li>
                        <li>MySQL</li>
                        <li>JavaScript</li>
                    </ul>
            </div>
        </div>
    </main>
    
    <footer>
        <p>copyright internous | 4each blog is the one which provides A to Z about programming.</p>
    </footer>
    
    
    
    
</body>
</html>