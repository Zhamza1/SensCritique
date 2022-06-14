/*
LORSQUE JE clique sur le bouton dans .spoiler
ALORS 
    j'ajoute la classe .visible au texte  




var button = document.querySelector(".spoiler button")
button.addEventListener("click",function() {
    this.nextElementSibling.classlist.add("visible")
    this.parentNode.removeChild(this)
})

*/


var elements = document.querySelectorAll(".spoiler")

var createSpoilerButton = function(element){
    
    //on crée la span
    var span = document.createElement('span')
    span.className="spoiler-content"
    span.innerHTML = element.innerHTML

    //on crée le bouton
    var button = document.createElement('button')
    button.textContent='Afficher le spoiler'

    //on ajoute les éléments du dom 
    element.innerHTML=''
    element.appendChild(button)
    element.appendChild(span)

    //on met l'ecouteur click 
    button.addEventListener('click',function(){
        button.parentNode.removeChild(button)
        span.parentNode.classList.add('visible')
    })
}

for(var i=0;i<elements.length;i++){
    createSpoilerButton(elements[i])
}