<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?> - Citations</title>
</head>
<body>
    <?php if(isset($msg)) :?>
        <div class="msg <?= $msg['css'] ?>">
            <?= $msg['text'] ?>
        </div>
    <?php endif ?>
    <header>
        <h1><?= $title ?></h1>
        <nav>
            <ul>
                <li><a href="index.php?p=lire">Fortune </a></li>
                <li><a href="index.php?p=ajouter">Ajouter </a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h2><?= $title ?></h2>
        <div class="content">
            <?= $content ?>
        </div>
    </main>
    
</body>
</html>