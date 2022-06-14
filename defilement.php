<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Defilement</title>

    <style>
        .reveal [class*="reveal-"]{
            opacity: 0;
            transform: translateY(-0px);
        }

        .reveal-visible [class*="reveal-"]{
            opacity: 1;
            transform: translateY(0);
            transition: 1s cubic-bezier(.5,0,0,1); 
        }

        .reveal-visible .reveal-2{
            transition-delay: 0.1s;
        }

        .reveal-visible .reveal-3{
            transition-delay: 0.2s;
        }

        .reveal-visible .reveal-4{
            transition-delay: 0.3s;
        }
    </style>
</head>
<body>


    
</body>
</html>