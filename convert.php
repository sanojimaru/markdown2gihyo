<?php
require 'vendor/autoload.php';
use \Michelf\MarkdownExtra;
/*

# 記事タイトル

## 見出し2

### 見出し3

![お弁当](http://farm6.staticflickr.com/5550/9284219118_bfa43d8eb3_z.jpg)

* 箇条書き
    * さらに箇条書き
    * さらに箇条書き
    * さらに箇条書き
* 箇条書き
* 箇条書き

```javascript
console.debug("test");
```

アスタリスク2つで囲むと文字が**強調**されます。
アンダーバー2つで囲むと文字が__強調__されます。

[googleへリンクを張ります。](http://google.com/)

*/
if (!empty($_POST['mode'])) {
    if ($_POST['mode'] == "preview") {
        echo MarkdownExtra::defaultTransform($_POST['markdown']);
    } else {
        $conditions = array(
            "/^#{3}\s/m" => "■",
            "/^#{2}\s/m" => "■■",
            "/^#\s/m" => "■■■■",
            "/!\[(.+)\]\((.+)\)/" => "▽画像入る：$2\n＜キャプション＞\n$1\n",
            "/([\s\t]*)\*\s/" => "$1・",
            "/^```(.*)\n([^`]+)```/m" => "▽コード入る（$1）\n$2\n",
            "/[\*_]{2}([^\*]+)[\*_]{2}/" => "★ここから★$1★ここまで強調処理★",
            "/\[(.+)\]\((.+)\)/" => "[[$1|$2]]"
        );

        $patterns = array_keys($conditions);
        $replacements = array_values($conditions);

        echo preg_replace($patterns, $replacements, $_POST['markdown']);
    }
}
