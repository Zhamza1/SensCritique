<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>scrollSpy</title>
</head>
<body>

<nav>
    <?php for($i=1;$i<=4;$i++): ?>
        <a href="#section><?= $i ?>">Section <?= $i ?></a>
        <?php endfor ?>
        <a href="contact.html">Contact</a>
</nav>

<main>
    <?php for($i=1;$i<=4;$i++): ?>
    
        <section id="section"></section>
</main>
    
</body>
</html>