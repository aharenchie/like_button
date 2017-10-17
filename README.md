# like_button

PHPとHTMLとCSSとherokuで作った。

HTMLのフォームのPOSTをphpで受け取って、カウントを外部ファイルに書き込むだけ。
とっても簡単。でもとっても重い。
ファイル書き込み終了までロックしてるからなんだろうけど、ロックの仕方に問題があるのか？
それとも、ファイル書き込みによるデータ保存が良くないのか？

下記のURLから閲覧可能。
( https://ielt2017-like-button.herokuapp.com/ )
仕様： いいね！を押すと、heartの大きさが変わる。ある程度大きくなったら、cheapな「ちょーいいね！heart」が表示される。
resetしたいときはこちらのページでresetしてね。( https://ielt2017-like-button.herokuapp.com/admin.php )
