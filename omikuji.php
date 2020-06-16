<?php
// phpタグの中身はサーバで実行される

// 乱数の生成
$num = rand(1, 5);
if ($num == 1) {
    $result = '大吉';
} elseif ($num == 2) {
    $result = '中吉';
} elseif ($num == 3) {
    $result = '小吉';
} elseif ($num == 4) {
    $result = '凶';
} elseif ($num == 5) {
    $result = '大凶';
}
// echo $result;

// 条件分岐

// 動作確認

// PHPのあとにhtmlを追加しよう
// !->tabでフォーマット作成が可能（通常のhtmlファイルと同様）

// 動作確認
// サーバでPHPが実行->生成されたhtmlがブラウザに送られて表示される

// htmlと組み合わせるときはPHPタグを省略しないこと（PHPとhtmlの区別がつかなくなるため）

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>omikuji</title>
</head>

<body>
    <h1>今日の運勢は<?=$result?>です!</h1>
</body>

</html>