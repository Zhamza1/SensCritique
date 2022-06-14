<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
            .fixed{
                position: fixed;
                top: 0;
            }
            .content{
                margin-top: 20px;
            }
            .main{
                padding: 0 20px;
                float: left;
                width: 65%;
                background-color: white;
                box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);  
            }

            .menu a:hover{
                background-color: red;
            }

            .sidebar{
                float: right;
                width: 25%;
                padding: 20px;
            }

            .bloc{
                background-color: white;
                padding: 10px;
                box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);  
            }


    </style>

</head>
<body>
    <div class="topbar">
        LOGO
    </div>

    <div class="menu" data-sticky>
        <a href="#">ITEM 1</a>
        <a href="#">ITEM 2</a>
        <a href="#">ITEM 3</a>
        <a href="#">ITEM 4</a>
        <a href="#">ITEM 5</a>
    </div>

    <div class="content">
        <div class="main">
            <h1>je suis un titre</h1>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nisi sequi ea, magnam iusto consequuntur exercitationem, architecto harum, quis repellat voluptas laudantium obcaecati non? Ipsam tempore ab voluptatum, nostrum ea minus.</p>
            <div style="background-color: grey; height: 4000px"></div>
        </div>
    
        <div class="sidebar">
            <div class="bloc" data-sticky data-offset="68">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iure commodi neque fugiat natus at dignissimos perferendis dolores inventore fuga atque? Ipsa odio molestiae atque aut, quidem cumque quas ullam quae?
            </div>
        </div>
    </div>


<script>
(function(){


    var scrollY = function () {
        var supportPageOffset = window.pageXOffset !== undefined;
        var isCSS1Compat = ((document.compatMode || "") === "CSS1Compat");
        return supportPageOffset ? window.pageYOffset : isCSS1Compat ? document.documentElement.scrollTop : document.body.scrollTop;
    }
   
    /*LORSQUE l'on scroll
        SI le menu sors de l'écran 
        ALORS il deviendra fixe 
     
    */ 

    var elements = document.querySelectorAll('[data-sticky]')
    for(var i=0; i<elements.length;i++){
        (function(element){
        
    var rect = element.getBoundingClientRect()
    var top = rect.top + scrollY()
    var fake = document.createElement("div")
    fake.style.width = rect.width + "px"
    fake.style.height = rect.height + "px"

    var onScroll = function () {
        var hasScrollClass = element.classList.contains("fixed")
        if(scrollY() > top && !hasScrollClass){
            element.classList.add("fixed")
            element.style.width = rect.width + "px"
            element.parentNode.insertBefore(fake, element)
        } else if (scrollY() < top && hasScrollClass){
            element.classList.remove("fixed")
            element.parentNode.removeChild(fake)
        }
    }
    var onResize = function () {
        element.style.width = "auto"
        element.classList.remove("fixed")
        fake.style.display = "none"
        rect = element.getBoundingClientRect()
        top = rect.top + scrollY()
        fake.style.width = rect.width + "px"
        fake.style.height = rect.height + "px"
        fake.style.display = "block"
        onScroll()
    }

    window.addEventListener("scroll", onScroll)
    window.addEventListener("resize", onResize)

        })(elements[i])
    }



})()


</script>

</body>
</html>