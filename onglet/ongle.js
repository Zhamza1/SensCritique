(function(){
    
    /* ALGO

        LORSQUE l'on clique sur un onglet 
        ON retire la classe active de l'onglet actif
        on rajoute la classe active à l'onglet actuel 

        ON retire la classe active du contenu actif
        on rajoute la classe active du contenu actuel

      */

var afficherOnglet = function(a){

    var li = a.parentNode
            var div = a.parentNode.parentNode.parentNode

            if(li.classList.contains("active")){
                return false
            }

            //On retire la classe active de l'onglet active 
            div.querySelector(".tabs .active").classList.remove("active")

            //J'ajoute la classe active à l'onglet actuel 
            li.classList.add("active")

            //ON retire la class active sur le contenu actif
            div.querySelector(".tab-content.active").classList.remove("active")

            // j'ajoute la classe active sur le contenu de mon clic 
            div.querySelector(a.getAttribute("href")).classList.add("active")

}
    var tabs = document.querySelectorAll(".tabs a")
    for(var i=0;i < tabs.length;i++){
        tabs[i].addEventListener("click",function(e){
           afficherOnglet(this)
        })

    }

    /* ALGO hashage
    JE RECUPERE le hash
    AJOUTER LA CLASS active sur le lien href="hash"
    RETIRER LA CLASS active sur les autres onglets
    AFFICHER / Masquer les contenus 
    */

    var hash = window.location.hash
    var a = document.querySelector('a[href="' +hash+ '"]')
    if(a!=null && !a.classList.contains('active')){
            afficherOnglet(a)
        }
})()