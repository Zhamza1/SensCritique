<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="spoiler.js" defer></script>
    <style>
        body{
            color: blue;
        }
        .spoiler-content{
            display: inline-block;
            width: 0;
            height: 0;
            opacity: 0;
            overflow: hidden;
            transition: opacity 0,5s;
        }

        .visible .spoiler-content{
            display: inline;
            width: auto;
            height: auto;
            opacity: 1;
            color: red;
        }
    </style>
</head>
<body>
    

<script>

</script>

<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorum labore, deleniti, beatae maiores corrupti harum quod nobis recusandae corporis voluptas non dolores consectetur amet laborum quia? Quis libero dolores debitis!</p>

<p class="spoiler">

            <span>Ici sera affiché un spoiler</span> univers glauque et la fin de l'innocence
            
</p>

<p>
    <span class="spoiler">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque atque corrupti architecto ea accusamus error! Minima harum repellat adipisci suscipit explicabo delectus nihil mollitia blanditiis, aliquid, cumque, nisi deleniti veritatis.</span>
    <span>Lorem ipsum dolor sit amet consectetur <span class="spoiler">fjkfj"klf"éjflé"jf</span> elit. Eaque atque corrupti architecto ea accusamus error! Minima harum repellat adipisci suscipit explicabo delectus nihil mollitia blanditiis, aliquid, cumque, nisi deleniti veritatis.</span>
    <span>Lorem ipsum dolor sit amet consectetur<span class="spoiler">adipisicing elit. Eaque atque corrupti architecto ea accusamus error! Minima harum repellat adipisci suscipit explicabo delectus nihil mollitia blanditiis, aliquid, cumque, nisi deleniti veritatis.</span>
    </span> </p>
</body>
</html>