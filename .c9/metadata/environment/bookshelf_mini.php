{"filter":false,"title":"bookshelf_mini.php","tooltip":"/bookshelf_mini.php","undoManager":{"mark":9,"position":9,"stack":[[{"start":{"row":0,"column":0},"end":{"row":21,"column":7},"action":"insert","lines":["<!DOCTYPE html>","<html lang=\"ja\">","    <head>","        <meta charset=\"utf-8\">","        <title>Bookshelf | カンタン！あなたのオンライン本棚</title>","        <link rel=\"stylesheet\" href=\"bookshelf.css\">","    </head>","    <body>","        <a href=\"bookshelf_mini.php\"><h1>Bookshelf</h1></a>","        <h2>書籍の登録フォーム</h2>","        <form action=\"bookshelf_mini.php\" method=\"POST\">","            <input type=\"text\" name=\"book_title\" placeholder=\"書籍タイトルを入力\" required>","            <input type=\"submit\" name=\"submit_add_book\" value=\"登録\">","        </form>","        <h2>登録された書籍一覧</h2>","        <ul>","            <li>はじめてのWebアプリケーション</li>","            <li>かんたん！PHPプログラミング</li>","            <li>PHP+MySQLで作るWebアプリケーション</li>","        </ul>","    </body>","</html>"],"id":1}],[{"start":{"row":0,"column":0},"end":{"row":21,"column":7},"action":"remove","lines":["<!DOCTYPE html>","<html lang=\"ja\">","    <head>","        <meta charset=\"utf-8\">","        <title>Bookshelf | カンタン！あなたのオンライン本棚</title>","        <link rel=\"stylesheet\" href=\"bookshelf.css\">","    </head>","    <body>","        <a href=\"bookshelf_mini.php\"><h1>Bookshelf</h1></a>","        <h2>書籍の登録フォーム</h2>","        <form action=\"bookshelf_mini.php\" method=\"POST\">","            <input type=\"text\" name=\"book_title\" placeholder=\"書籍タイトルを入力\" required>","            <input type=\"submit\" name=\"submit_add_book\" value=\"登録\">","        </form>","        <h2>登録された書籍一覧</h2>","        <ul>","            <li>はじめてのWebアプリケーション</li>","            <li>かんたん！PHPプログラミング</li>","            <li>PHP+MySQLで作るWebアプリケーション</li>","        </ul>","    </body>","</html>"],"id":2},{"start":{"row":0,"column":0},"end":{"row":55,"column":7},"action":"insert","lines":["<!DOCTYPE html>","<html lang=\"ja\">","    <head>","        <meta charset=\"utf-8\">","        <title>Bookshelf | カンタン！あなたのオンライン本棚</title>","        <link rel=\"stylesheet\" href=\"bookshelf.css\">","    </head>","    <body>","        <a href=\"bookshelf_mini.php\"><h1>Bookshelf</h1></a>","        <h2>書籍の登録フォーム</h2>","        <form action=\"bookshelf_mini.php\" method=\"POST\">","            <input type=\"text\" name=\"book_title\" placeholder=\"書籍タイトルを入力\" required>","            <input type=\"submit\" name=\"submit_add_book\" value=\"登録\">","        </form>","        <h2>登録された書籍一覧</h2>","        <ul>","            <?php // 登録された書籍タイトルの数だけループ 開始 ?>","                <li><?php // print 書籍タイトル; ?></li>","            <?php // ループ 終了 ?>","        </ul>","    </body>","</html>","MySQLと連携してデータをもらった上でループを回すことになるので、どんなループでプログラミングすればいいのかわかりません。ここでは一旦<?php // コメント ?>という形式で何をそこにプログラミングするかをわかるようにコメントしておきました。登録された書籍タイトルの数だけループを回し、li要素をHTMLに埋め込めれば良いわけです。","ここでは、どこがPHPで動的になる部分なのか（書籍タイトル一覧のli要素）と、何のデータの保存が必要なのか（書籍タイトルの文字列データ）を確認することができました。","開発用の確認コード","開発しながら、フォームはちゃんと送信されているか？など頻繁に確認することになります。そういったときには開発中は確認コードを入れておけば簡単に動作確認が行えます。","今回の場合、フォームデータがちゃんと送信されているかを常に確認しておきたいので、最初に確認できるようにしました。","bookshelf_mini.php","<!DOCTYPE html>","<html lang=\"ja\">","    <head>","        <meta charset=\"utf-8\">","        <title>Bookshelf | カンタン！あなたのオンライン本棚</title>","    </head>","    <body>","<?php","    // フォームデータ送受信確認用コード（本番では削除）","    print '<div style=\"background-color: skyblue;\">';","    print '<p>動作確認用:</p>';","    var_dump($_POST['book_title']);","    print '</div>';","?>","        <a href=\"bookshelf_mini.php\"><h1>Bookshelf</h1></a>","        <h2>書籍の登録フォーム</h2>","        <form action=\"bookshelf_mini.php\" method=\"POST\">","            <input type=\"text\" name=\"book_title\" placeholder=\"書籍タイトルを入力\" required>","            <input type=\"submit\" name=\"submit_add_book\" value=\"登録\">","        </form>","        <h2>登録された書籍一覧</h2>","        <ul>","            <?php // 登録された書籍タイトルの数だけループ 開始 ?>","                <li><?php // print 書籍タイトル; ?></li>","            <?php // ループ 終了 ?>","        </ul>","    </body>","</html>"]}],[{"start":{"row":0,"column":0},"end":{"row":27,"column":18},"action":"remove","lines":["<!DOCTYPE html>","<html lang=\"ja\">","    <head>","        <meta charset=\"utf-8\">","        <title>Bookshelf | カンタン！あなたのオンライン本棚</title>","        <link rel=\"stylesheet\" href=\"bookshelf.css\">","    </head>","    <body>","        <a href=\"bookshelf_mini.php\"><h1>Bookshelf</h1></a>","        <h2>書籍の登録フォーム</h2>","        <form action=\"bookshelf_mini.php\" method=\"POST\">","            <input type=\"text\" name=\"book_title\" placeholder=\"書籍タイトルを入力\" required>","            <input type=\"submit\" name=\"submit_add_book\" value=\"登録\">","        </form>","        <h2>登録された書籍一覧</h2>","        <ul>","            <?php // 登録された書籍タイトルの数だけループ 開始 ?>","                <li><?php // print 書籍タイトル; ?></li>","            <?php // ループ 終了 ?>","        </ul>","    </body>","</html>","MySQLと連携してデータをもらった上でループを回すことになるので、どんなループでプログラミングすればいいのかわかりません。ここでは一旦<?php // コメント ?>という形式で何をそこにプログラミングするかをわかるようにコメントしておきました。登録された書籍タイトルの数だけループを回し、li要素をHTMLに埋め込めれば良いわけです。","ここでは、どこがPHPで動的になる部分なのか（書籍タイトル一覧のli要素）と、何のデータの保存が必要なのか（書籍タイトルの文字列データ）を確認することができました。","開発用の確認コード","開発しながら、フォームはちゃんと送信されているか？など頻繁に確認することになります。そういったときには開発中は確認コードを入れておけば簡単に動作確認が行えます。","今回の場合、フォームデータがちゃんと送信されているかを常に確認しておきたいので、最初に確認できるようにしました。","bookshelf_mini.php"],"id":3}],[{"start":{"row":0,"column":0},"end":{"row":23,"column":2},"action":"insert","lines":["<?php","    // MySQLサーバ接続に必要な値を変数に代入","    $host = 'localhost';","    $username = 'root';","    $password = '';","    $db_name = 'bookshelf_mini';","","    // 変数を設定して、MySQLサーバに接続","    $database = mysqli_connect($host, $username, $password, $db_name);","","    // 接続を確認し、接続できていない場合にはエラーを出力して終了する","    if ($database == false) {","        die('Connect Error (' . mysqli_connect_errno() . ') ' . mysqli_connect_error());","    }","","    // MySQL に utf8 で接続するための設定をする","    $charset = 'utf8';","    mysqli_set_charset($database, $charset);","","    // ここにMySQLを使ったなんらかの処理を書く","","    // MySQLを使った処理が終わると、接続は不要なので切断する","    mysqli_close($database);","?>"],"id":4}],[{"start":{"row":24,"column":0},"end":{"row":51,"column":7},"action":"remove","lines":["<!DOCTYPE html>","<html lang=\"ja\">","    <head>","        <meta charset=\"utf-8\">","        <title>Bookshelf | カンタン！あなたのオンライン本棚</title>","    </head>","    <body>","<?php","    // フォームデータ送受信確認用コード（本番では削除）","    print '<div style=\"background-color: skyblue;\">';","    print '<p>動作確認用:</p>';","    var_dump($_POST['book_title']);","    print '</div>';","?>","        <a href=\"bookshelf_mini.php\"><h1>Bookshelf</h1></a>","        <h2>書籍の登録フォーム</h2>","        <form action=\"bookshelf_mini.php\" method=\"POST\">","            <input type=\"text\" name=\"book_title\" placeholder=\"書籍タイトルを入力\" required>","            <input type=\"submit\" name=\"submit_add_book\" value=\"登録\">","        </form>","        <h2>登録された書籍一覧</h2>","        <ul>","            <?php // 登録された書籍タイトルの数だけループ 開始 ?>","                <li><?php // print 書籍タイトル; ?></li>","            <?php // ループ 終了 ?>","        </ul>","    </body>","</html>"],"id":5}],[{"start":{"row":24,"column":0},"end":{"row":51,"column":7},"action":"insert","lines":["<!DOCTYPE html>","<html lang=\"ja\">","    <head>","        <meta charset=\"utf-8\">","        <title>Bookshelf | カンタン！あなたのオンライン本棚</title>","    </head>","    <body>","<?php","    // フォームデータ送受信確認用コード（本番では削除）","    print '<div style=\"background-color: skyblue;\">';","    print '<p>動作確認用:</p>';","    var_dump($_POST['book_title']);","    print '</div>';","?>","        <a href=\"bookshelf_mini.php\"><h1>Bookshelf</h1></a>","        <h2>書籍の登録フォーム</h2>","        <form action=\"bookshelf_mini.php\" method=\"POST\">","            <input type=\"text\" name=\"book_title\" placeholder=\"書籍タイトルを入力\" required>","            <input type=\"submit\" name=\"submit_add_book\" value=\"登録\">","        </form>","        <h2>登録された書籍一覧</h2>","        <ul>","            <?php // 登録された書籍タイトルの数だけループ 開始 ?>","                <li><?php // print 書籍タイトル; ?></li>","            <?php // ループ 終了 ?>","        </ul>","    </body>","</html>"],"id":6}],[{"start":{"row":0,"column":0},"end":{"row":23,"column":2},"action":"remove","lines":["<?php","    // MySQLサーバ接続に必要な値を変数に代入","    $host = 'localhost';","    $username = 'root';","    $password = '';","    $db_name = 'bookshelf_mini';","","    // 変数を設定して、MySQLサーバに接続","    $database = mysqli_connect($host, $username, $password, $db_name);","","    // 接続を確認し、接続できていない場合にはエラーを出力して終了する","    if ($database == false) {","        die('Connect Error (' . mysqli_connect_errno() . ') ' . mysqli_connect_error());","    }","","    // MySQL に utf8 で接続するための設定をする","    $charset = 'utf8';","    mysqli_set_charset($database, $charset);","","    // ここにMySQLを使ったなんらかの処理を書く","","    // MySQLを使った処理が終わると、接続は不要なので切断する","    mysqli_close($database);","?>"],"id":7}],[{"start":{"row":0,"column":0},"end":{"row":25,"column":2},"action":"insert","lines":["<?php","    // MySQLサーバ接続に必要な値を変数に代入","    $host = 'localhost';","    $username = 'root';","    $password = '';","    $db_name = 'bookshelf_mini';","","    // 変数を設定して、MySQLサーバに接続","    $database = mysqli_connect($host, $username, $password, $db_name);","","    // 接続を確認し、接続できていない場合にはエラーを出力して終了する","    if ($database == false) {","        die('Connect Error (' . mysqli_connect_errno() . ') ' . mysqli_connect_error());","    }","","    // MySQL に utf8 で接続するための設定をする","    $charset = 'utf8';","    mysqli_set_charset($database, $charset);","","    // ここにMySQLを使ったなんらかの処理を書く","    $sql = 'SELECT * FROM books ORDER BY created_at DESC';","    $result = mysqli_query($database, $sql);","","    // MySQLを使った処理が終わると、接続は不要なので切断する","    mysqli_close($database);","?>"],"id":8}],[{"start":{"row":0,"column":0},"end":{"row":53,"column":7},"action":"remove","lines":["<?php","    // MySQLサーバ接続に必要な値を変数に代入","    $host = 'localhost';","    $username = 'root';","    $password = '';","    $db_name = 'bookshelf_mini';","","    // 変数を設定して、MySQLサーバに接続","    $database = mysqli_connect($host, $username, $password, $db_name);","","    // 接続を確認し、接続できていない場合にはエラーを出力して終了する","    if ($database == false) {","        die('Connect Error (' . mysqli_connect_errno() . ') ' . mysqli_connect_error());","    }","","    // MySQL に utf8 で接続するための設定をする","    $charset = 'utf8';","    mysqli_set_charset($database, $charset);","","    // ここにMySQLを使ったなんらかの処理を書く","    $sql = 'SELECT * FROM books ORDER BY created_at DESC';","    $result = mysqli_query($database, $sql);","","    // MySQLを使った処理が終わると、接続は不要なので切断する","    mysqli_close($database);","?>","<!DOCTYPE html>","<html lang=\"ja\">","    <head>","        <meta charset=\"utf-8\">","        <title>Bookshelf | カンタン！あなたのオンライン本棚</title>","    </head>","    <body>","<?php","    // フォームデータ送受信確認用コード（本番では削除）","    print '<div style=\"background-color: skyblue;\">';","    print '<p>動作確認用:</p>';","    var_dump($_POST['book_title']);","    print '</div>';","?>","        <a href=\"bookshelf_mini.php\"><h1>Bookshelf</h1></a>","        <h2>書籍の登録フォーム</h2>","        <form action=\"bookshelf_mini.php\" method=\"POST\">","            <input type=\"text\" name=\"book_title\" placeholder=\"書籍タイトルを入力\" required>","            <input type=\"submit\" name=\"submit_add_book\" value=\"登録\">","        </form>","        <h2>登録された書籍一覧</h2>","        <ul>","            <?php // 登録された書籍タイトルの数だけループ 開始 ?>","                <li><?php // print 書籍タイトル; ?></li>","            <?php // ループ 終了 ?>","        </ul>","    </body>","</html>"],"id":9},{"start":{"row":0,"column":0},"end":{"row":62,"column":7},"action":"insert","lines":["<?php","    // MySQLサーバ接続に必要な値を変数に代入","    $host = 'localhost';","    $username = 'root';","    $password = '';","    $db_name = 'bookshelf_mini';","","    // 変数を設定して、MySQLサーバに接続","    $database = mysqli_connect($host, $username, $password, $db_name);","","    // 接続を確認し、接続できていない場合にはエラーを出力して終了する","    if ($database == false) {","        die('Connect Error (' . mysqli_connect_errno() . ') ' . mysqli_connect_error());","    }","","    // MySQL に utf8 で接続するための設定をする","    $charset = 'utf8';","    mysqli_set_charset($database, $charset);","","    // ここにMySQLを使ったなんらかの処理を書く","    $sql = 'SELECT * FROM books ORDER BY created_at DESC';","    $result = mysqli_query($database, $sql);","","    // MySQLを使った処理が終わると、接続は不要なので切断する","    mysqli_close($database);","?>","<!DOCTYPE html>","<html lang=\"ja\">","    <head>","        <meta charset=\"utf-8\">","        <title>Bookshelf | カンタン！あなたのオンライン本棚</title>","        <link rel=\"stylesheet\" href=\"bookshelf.css\">","    </head>","    <body>","<?php","    // フォームデータ送受信確認用コード","    print '<div style=\"background-color: skyblue;\">';","    print '<p>動作確認用:</p>';","    var_dump($_POST['book_title']);","    print '</div>';","?>","        <a href=\"bookshelf_mini.php\"><h1>Bookshelf</h1></a>","        <h2>書籍の登録フォーム</h2>","        <form action=\"bookshelf_mini.php\" method=\"post\">","            <input type=\"text\" name=\"book_title\" placeholder=\"書籍タイトルを入力\" required>","            <input type=\"submit\" name=\"submit_add_book\" value=\"登録\">","        </form>","        <h2>登録された書籍一覧</h2>","        <ul>","<?php","            if ($result) {","                while ($record = mysqli_fetch_assoc($result)) {","                    $book_title = $record['book_title'];","?>","                    <li><?php print $book_title; ?></li>","<?php","                }","                mysqli_free_result($result);","            }","?>","        </ul>","    </body>","</html>"]}],[{"start":{"row":0,"column":0},"end":{"row":62,"column":7},"action":"remove","lines":["<?php","    // MySQLサーバ接続に必要な値を変数に代入","    $host = 'localhost';","    $username = 'root';","    $password = '';","    $db_name = 'bookshelf_mini';","","    // 変数を設定して、MySQLサーバに接続","    $database = mysqli_connect($host, $username, $password, $db_name);","","    // 接続を確認し、接続できていない場合にはエラーを出力して終了する","    if ($database == false) {","        die('Connect Error (' . mysqli_connect_errno() . ') ' . mysqli_connect_error());","    }","","    // MySQL に utf8 で接続するための設定をする","    $charset = 'utf8';","    mysqli_set_charset($database, $charset);","","    // ここにMySQLを使ったなんらかの処理を書く","    $sql = 'SELECT * FROM books ORDER BY created_at DESC';","    $result = mysqli_query($database, $sql);","","    // MySQLを使った処理が終わると、接続は不要なので切断する","    mysqli_close($database);","?>","<!DOCTYPE html>","<html lang=\"ja\">","    <head>","        <meta charset=\"utf-8\">","        <title>Bookshelf | カンタン！あなたのオンライン本棚</title>","        <link rel=\"stylesheet\" href=\"bookshelf.css\">","    </head>","    <body>","<?php","    // フォームデータ送受信確認用コード","    print '<div style=\"background-color: skyblue;\">';","    print '<p>動作確認用:</p>';","    var_dump($_POST['book_title']);","    print '</div>';","?>","        <a href=\"bookshelf_mini.php\"><h1>Bookshelf</h1></a>","        <h2>書籍の登録フォーム</h2>","        <form action=\"bookshelf_mini.php\" method=\"post\">","            <input type=\"text\" name=\"book_title\" placeholder=\"書籍タイトルを入力\" required>","            <input type=\"submit\" name=\"submit_add_book\" value=\"登録\">","        </form>","        <h2>登録された書籍一覧</h2>","        <ul>","<?php","            if ($result) {","                while ($record = mysqli_fetch_assoc($result)) {","                    $book_title = $record['book_title'];","?>","                    <li><?php print $book_title; ?></li>","<?php","                }","                mysqli_free_result($result);","            }","?>","        </ul>","    </body>","</html>"],"id":10},{"start":{"row":0,"column":0},"end":{"row":76,"column":7},"action":"insert","lines":["<?php","    // MySQLサーバ接続に必要な値を変数に代入","    $host = 'localhost';","    $username = 'root';","    $password = '';","    $db_name = 'bookshelf_mini';","","    // 変数を設定して、MySQLサーバに接続","    $database = mysqli_connect($host, $username, $password, $db_name);","","    // 接続を確認し、接続できていない場合にはエラーを出力して終了する","    if ($database == false) {","        die('Connect Error (' . mysqli_connect_errno() . ') ' . mysqli_connect_error());","    }","","    // MySQL に utf8 で接続するための設定をする","    $charset = 'utf8';","    mysqli_set_charset($database, $charset);","","    // フォームから書籍タイトルが送信されていればデータベースに保存する","    if ($_POST['book_title']) {","        // 実行するSQLを作成","        $sql = 'INSERT INTO books (book_title) VALUES(?)';","        // ユーザ入力に依存するSQLを実行するので、セキュリティ対策をする","        $statement = mysqli_prepare($database, $sql);","        // ユーザ入力データ($_POST['book_title'])をVALUES(?)の?の部分に代入する","        mysqli_stmt_bind_param($statement, 's', $_POST['book_title']);","        // SQL文を実行する","        mysqli_stmt_execute($statement);","        // SQL文を破棄する","        mysqli_stmt_close($statement);","    }","","    $sql = 'SELECT * FROM books ORDER BY created_at DESC';","    $result = mysqli_query($database, $sql);","","    // MySQLを使った処理が終わると、接続は不要なので切断する","    mysqli_close($database);","?>","<!DOCTYPE html>","<html lang=\"ja\">","    <head>","        <meta charset=\"utf-8\">","        <title>Bookshelf | カンタン！あなたのオンライン本棚</title>","        <link rel=\"stylesheet\" href=\"bookshelf.css\">","    </head>","    <body>","<?php","    // フォームデータ送受信確認用コード（コメントアウトで表示されない）","    // print '<div style=\"background-color: skyblue;\">';","    // print '<p>動作確認用:</p>';","    // var_dump($_POST['book_title']);","    // print '</div>';","?>","        <a href=\"bookshelf_mini.php\"><h1>Bookshelf</h1></a>","        <h2>書籍の登録フォーム</h2>","        <form action=\"bookshelf_mini.php\" method=\"post\">","            <input type=\"text\" name=\"book_title\" placeholder=\"書籍タイトルを入力\" required>","            <input type=\"submit\" name=\"submit_add_book\" value=\"登録\">","        </form>","        <h2>登録された書籍一覧</h2>","        <ul>","<?php","            if ($result) {","                while ($record = mysqli_fetch_assoc($result)) {","                    $book_title = $record['book_title'];","?>","                    <li><?php print htmlspecialchars($book_title, ENT_QUOTES, 'UTF-8'); ?></li>","","<?php","                }","                mysqli_free_result($result);","            }","?>","        </ul>","    </body>","</html>"]}]]},"ace":{"folds":[],"scrolltop":526,"scrollleft":0,"selection":{"start":{"row":67,"column":38},"end":{"row":67,"column":38},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":51,"state":"php-start","mode":"ace/mode/php"}},"timestamp":1526015537405,"hash":"0f5cc1ec36162fc0d5c475a9ba563674cc787a60"}