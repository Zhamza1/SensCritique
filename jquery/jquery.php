<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jquery</title>
    <script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>
</head>
<body>

<div class="tab">
    <a href="#">le texte sera en rouge </a>
    <a href="#">le texte sera en rouge </a>
    <a href="#">le texte sera en rouge </a>
</div>

<script>
    $(".tab a").css("color","green")

    var first = $("li:first")
    var li = $("<li class ='active'></li>")
    var a = $("a href='#'>Salut </a>")

    li.append(a)
    first.before(li)

    a.html("<strong>Bonjoute</strong>")
</script>
    
</body>
</html>