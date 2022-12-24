<? include(__DIR__.'/include/init.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <? foreach ($parsers as $parser): ?>
        <div>Hosting: <?=$parser->getHosting();?></div>
        <div><?=$parser->getIframe();?></div>
    <? endforeach; ?>
</body>
</html>