function populate () {
    var obj=document.getElementById("tt" ),
    link=document.getElementById("link" ),
    aleatoire=Math.floor(Math.random()*3);
    switch(aleatoire){
    case 0:obj.value="Ciseaux";link.setAttribute("Ciseaux" );break;
    case 1:obj.value="Feuille";link.setAttribute("Feuille" );break;
    case 2:obj.value="Pierre";link.setAttribute("Pierre" );break;
   ;
    }
}