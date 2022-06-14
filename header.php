<link rel="icon" type="image/png" href="asset/logo.svg" /> 
<link rel="stylesheet" href="heade.css">
<link rel="stylesheet" href="font.css">  
<script src="https://kit.fontawesome.com/513391870c.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="inscriptio.css">
<link rel="icon" type="image/png" href="asset/logo.svg" /> 
<script src="inscriptio.js" defer></script>
<script src="menu.js" defer></script>
<header>

<nav>
            <div class="logo">
                <a href="Index.php"><img src="asset/logo.svg" alt="logo du site"></a>
            </div>
            <div class="toggle">
                <i class="fas fa-bars ouvrir"></i>
                <i class="fas fa-times" id="fermer"></i>
            </div>
            <ul class="menu">
                <li><a href="Index.php">HOME</a></li>
                <li><a href="affiche.php">FILM A L'AFFICHE</a></li>
                <li><a href="top.php">TOP</a></li>
                <li class="search-icon"><input type="search" placeholder="Rechercher des films...">
                    <label for="search" class="icon">
                    <i class="fa-solid fa-magnifying-glass"></i>
                    </label>
                </li>
                <li><button id="show-login" class="btn">CONNEXION</button></li>
                <li><a href="seconnecter.php"><button class="btn btn-secondary">INSCRIPTION</button></a></li>
            </ul>
        </nav>
      

    
 </header>

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

