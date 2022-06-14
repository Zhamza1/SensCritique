<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<script>

     var classe ={
     eleves:["jean","marc","philipe"],
     nom:'cm2',
     afficheEleves:function(){
        this.eleves.forEach((v)=>{
            console.log(this.nom)
        })
     }
 }



   //es6
 var classe ={
     eleves:["jean","marc","philipe"],
     nom:'cm2',
     function(){
        this.eleves.forEach((v)=>{
            console.log(this.nom)
        })
     }
 }


 
// déclarer une classe 

class Book {
    constructor(title, author, pages) {
    this.title = title;
    this.author = author;
    this.pages = pages;
    }
    }

// créer une instance à partir d'une classe

let myBook = new Book("L'Histoire de Tao", "Will Alexander", 250);

Cette ligne crée l'objet suivant :
{
title: "L'Histoire de Tao",
author: "Will Alexander",
pages: 250
}


let tab1=["dairu","voli"]
let tab2=["teemo","iereop",...tab1]




 classe.afficheEleves()
</script>
    
</body>
</html>