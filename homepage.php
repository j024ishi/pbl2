<?php
// ユーザーIDを取得
$userID = $_GET['userID'] ?? '';

// ページ内容を表示
echo "<h1>ようこそ ユーザーID: $userID さん</h1>";
echo "<p>あなた専用のページです。</p>";
?>
