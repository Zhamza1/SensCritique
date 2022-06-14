<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="ongle.js" defer></script>
    <title>Document</title>

    <style>
        .tabs .active a{
            color: red;
        }

        .tab-content{
            display: none;
            color: black;
        }

        .tab-content.active{
            display: block;
            color: blue;
        }
    </style>
</head>
<body>
<div>
    <ul class="tabs">
        <li class="active"><a href="#home">Accueil</a></li>
        <li><a href="#mentions">Mentions</a></li>
        <li><a href="#about">A propos</a></li>
    </ul>
    <div class="tabs-content">
        <div class="tab-content active" id="home">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequuntur dolores sint culpa! Facere doloremque fugiat, quia ducimus voluptatibus, placeat minus reiciendis ratione excepturi porro quibusdam nulla cumque? Culpa, consequuntur ipsa.</div>
        <div class="tab-content" id="mentions">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugit vel, iusto earum eius fuga qui ea at quae nihil magni incidunt sed commodi id. Magni eveniet sit reprehenderit id tempore.</div>    
        <div class="tab-content" id="about">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Soluta praesentium reprehenderit maiores dolores delectus obcaecati nobis quo asperiores cupiditate numquam. Mollitia dolore enim quae, neque similique reprehenderit et ut in.</div>
    </div>
</div>

</body>
</html>