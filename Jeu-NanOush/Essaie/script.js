misedepart = 100;

		
	function start(){
	
		
		mise = prompt("Combien misez vous ?","");
		
			while ((mise=="") || (mise==0)){ // si aucune mise ou la mise vaut 0, relancer la demande
			mise = prompt("Combien misez vous ?","");
			}
			
			while (mise>misedepart){ // si la mise est superieur aux montant
			mise = prompt("Vous ne possedez que "+misedepart+" €","");
			}
		document.getElementById("description2").innerHTML = mise;

		img1 = Math.ceil(Math.random() * 4); // création du chiffre aléatoire pour les 3 slots
		img2 = Math.ceil(Math.random() * 4); // création du chiffre aléatoire pour les 3 slots
		img3 = Math.ceil(Math.random() * 4); // création du chiffre aléatoire pour les 3 slots
		 
		 
	cerise = ("<img src='images/cerise.jpg' width='100px' height='100px' />"); 	//cerise
	couronne = ("<img src='images/cloche.jpg' width='100px' height='100px' />"); 	//couronne
	etoile = ("<img src='images/roulette.jpg' width='100px' height='100px' />");		//etoile
	euro = ("<img src='images/argent.jpg' width='100px' height='100px' />");		//euro
				
			switch (img1) 
			{
			case 1:
			document.getElementById("slot1").innerHTML = cerise;
			break;
			case 2:
			document.getElementById("slot1").innerHTML = couronne;
			break;
			case 3:
			document.getElementById("slot1").innerHTML = etoile;
			break;
			case 4:
			document.getElementById("slot1").innerHTML = euro;
			break;
			}
			
			switch (img2) 
			{
			case 1:
			document.getElementById("slot2").innerHTML = cerise;
			break;
			case 2:
			document.getElementById("slot2").innerHTML = couronne;
			break;
			case 3:
			document.getElementById("slot2").innerHTML = etoile;
			break;
			case 4:
			document.getElementById("slot2").innerHTML = euro;
			break;
			}
			
			switch (img3) 
			{
			case 1:
			document.getElementById("slot3").innerHTML = cerise;
			break;
			case 2:
			document.getElementById("slot3").innerHTML = couronne;
			break;
			case 3:
			document.getElementById("slot3").innerHTML = etoile;
			break;
			case 4:
			document.getElementById("slot3").innerHTML = euro;
			break;
			}
		
		function somme() {
			if ((img1==4) && (img2==4) && (img3==4)) { // 3euros affiché
			document.getElementById("description").innerHTML = ((mise*20)+(misedepart))+" €";
			document.getElementById("absolute").innerHTML = "tu gagne 20 fois le montant" ;
			}
			
			else if ((img1==2) && (img2==2) && (img3==2)) { // 3 couronnes affiché
			document.getElementById("description").innerHTML = ((mise*15)+(misedepart))+" €";
			document.getElementById("absolute").innerHTML = "tu gagne 15 fois le montant" ;
			}
			
			else if ((img1==3) && (img2==3) && (img3==3)) { // 3 étoiles affiché
			document.getElementById("description").innerHTML = ((mise*10)+(misedepart))+" €";
			document.getElementById("absolute").innerHTML = "tu gagne 10 fois le montant" ;
			}

			else if ((img1==1) && (img2==1) && (img3==1)) { // 3 cerises affiché
			document.getElementById("description").innerHTML = ((mise*5)+(misedepart))+" €";
			document.getElementById("absolute").innerHTML = "tu gagne 5 fois le montant" ;
			}
			//dans le cas des 2 euros affiché :
			else if ((img1==4) && (img2==4) && (img3==2 || 3 || 1) || (img2==4) && (img3==4) && (img1==2 || 3 || 1) || (img3==4) && (img1==4) && (img2==2 || 3 || 1)){ 
			document.getElementById("description").innerHTML = ((mise*2)+(misedepart))+" €";
			document.getElementById("absolute").innerHTML = "tu gagne 2 fois le montant" ;
			}
			
			else {
			document.getElementById("description").innerHTML = ((misedepart)-mise)+" €";
			document.getElementById("absolute").innerHTML = "tu as PERDU !!!" ;
			
			}
	
		
		}
		somme();

	}