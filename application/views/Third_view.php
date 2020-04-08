<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Title - <?= /** @var TYPE_NAME  */
        (isset($title)) ? $title : ''; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
</head>
<body>
<div id="app" class="uk-height-viewport uk-offcanvas-content uk-overflow-hidden">
    <ul>
        <?php if (isset($list_phone)){
            foreach ($list_phone as $k => $v): ?>
                <li><?= $v; ?></li>
        <?php
            endforeach;
        }?>
    </ul>
</div>
</body>
</html>