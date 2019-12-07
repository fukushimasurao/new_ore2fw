<!DOCTYPE html>
<title>test</title>
<p>現在は <?= h(date('Y年m月d日H時i分s秒')); ?> です </p>
<p><?= h($name) ?></p>
<p><?= h($route) ?></p>
<ul><li><a href='/phpinfo'><code>phpinfo()</code></a></ul>