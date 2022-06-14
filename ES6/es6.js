 var classe ={
     eleves:["jean","marc","philipe"],
     nom:'cm2',
     afficheEleves:function(){
        this.eleves.forEach((v)=>{
            console.log(this.nom)
        })
     }
 }

 classe.afficheEleves()

