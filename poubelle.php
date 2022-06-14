<link rel="icon" type="image/png" href="asset/logo.svg" /> 
<link rel="stylesheet" href="head.css">
<link rel="stylesheet" href="font.css">  
<script src="https://kit.fontawesome.com/513391870c.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="inscription.css">
<link rel="icon" type="image/png" href="asset/logo.svg" /> 
<script src="inscription.js" defer></script>


<header>
    <nav class="menu">
        <div class="inner">
            <div class="left">
                <div class="log"> 
                    <a href="index.php"><img class="logo" src="asset/logo.svg" alt="logo" ></a>
                </div>
            </div>
            <div class="right">
                      
                <a href="index.php" class="link"> HOME</a>
                <a href="affiche.php" class="link">FILM A L'AFFICHE</a> 
                <a href="top.php" class="link">TOP </a>    

                
                <input class="searchtxt" type="text" name="searchbar" placeholder="Rechercher des films  ...">
                <a class="searchBtn" href="#">
                    <i class="fa-solid fa-magnifying-glass" id="icone"></i>
                </a>
                
                <button class="connexion link" id="show-login" >Connexion</button>
                <a class="inscription link" href="seconnecter.php" >Inscription</a>                
            </div>
        </div>
        
    </nav>


    <div class="popup">
        <div class="close-btn">&times;</div>
        <form action="" method="post">
            <div class="form">
                <h2>Se connecter</h2>
                <div class="form-element">
                        <label for="mail">Mail</label>
                        <input type="text" id="email" placeholder="Email">
                </div>
                <div class="form-element">
                    <label for="password">Mot de passe</label>
                    <input type="password" id="password" placeholder="Mot de passe">
                </div>
                <div class="form-element">
                    <input type="checkbox" id="remember-me">
                    <label for="remember-me">Se souvenir de moi</label>
                </div>
                <div class="form-element">
                    <button>Connexion</button>
                </div>
                <div class="form-element">
                    <a href="#">Mot de passe oublié ?</a>
                </div>
            </div>
        </form>
    </div>
</header>





  <!-- <a href="index.php">
        <img class="logo" src="asset/logo.svg" alt="logo" >
        </a>    
                
                    <ul class="entete">          
                        <li><a href="index.php"> HOME</a></li>
                        <li><a href="affiche.php">FILM A L'AFFICHE</a></li>    
                        <li><a href="top.php">TOP FILM </a></li>     
                    </ul>
                    <div class="searchbar">
                        <input class="searchtxt" type="text" name="searchbar" placeholder="Rechercher des films  ...">
                        <a class="searchBtn" href="#">
                            <i class="fa-solid fa-magnifying-glass" id="icone">

                            </i>
                        
                        </a>
                    </div>
                    <div class="connexion">
                        <ul>
                            <li class="inscription"><button id="show-login">Connexion</button></li>
                            <li class="seconnecter"><a href="seconnecter.php">Inscription</a></li>
                        </ul>                   
                    </div>
 -->