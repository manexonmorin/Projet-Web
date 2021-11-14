// affiche le groupe d'emplois lié à l'onglet cliqué
(function(){
	// tout les boutons
    let boutonEmplois = document.querySelectorAll(".iconeEmploisFutur");
	
	// masquer le contenu des emplois quand un autre bouton est cliqué
	let groupeContenusEmplois = document.querySelectorAll(".EmploisContenu");

	let contenuEmploisDesign = document.querySelector(".emploisDesign");
	let contenuEmploisJeux = document.querySelector(".emploisJeux");
	let contenuEmploisVideo = document.querySelector(".emploisVideo");
	let contenuEmploisCode = document.querySelector(".emploisCode");


	for(let i=0; i<boutonEmplois.length; i++){
		boutonEmplois[i].addEventListener('mousedown', function(){

			// si appuie sur boutonEmplois "Design"
			if(boutonEmplois[i].classList.contains('futurDesign')){
				// si contient la classe qui le rend visible
				if(contenuEmploisDesign.classList.contains('visibleFuturEmplois')== false){
					for(let i=0; i<groupeContenusEmplois.length; i++){
						groupeContenusEmplois[i].classList.remove('visibleFuturEmplois');
					}
					contenuEmploisDesign.classList.add('visibleFuturEmplois');
				}
				else{
					contenuEmploisDesign.classList.remove('visibleFuturEmplois');
				}
			}

			// si appuie sur boutonEmplois "Jeux"
			if(boutonEmplois[i].classList.contains('futurJeux')){
				// si contient la classe qui le rend visible
				if(contenuEmploisJeux.classList.contains('visibleFuturEmplois')== false){
					for(let i=0; i<groupeContenusEmplois.length; i++){
						groupeContenusEmplois[i].classList.remove('visibleFuturEmplois');
					}
					contenuEmploisJeux.classList.add('visibleFuturEmplois');
				}
				else{
					contenuEmploisJeux.classList.remove('visibleFuturEmplois');
				}
			}

			// si appuie sur boutonEmplois "Video"
			if(boutonEmplois[i].classList.contains('futurVideo')){
				// si contient la classe qui le rend visible
				if(contenuEmploisVideo.classList.contains('visibleFuturEmplois')== false){
					for(let i=0; i<groupeContenusEmplois.length; i++){
						groupeContenusEmplois[i].classList.remove('visibleFuturEmplois');
					}
					contenuEmploisVideo.classList.add('visibleFuturEmplois');
				}
				else{
					contenuEmploisVideo.classList.remove('visibleFuturEmplois');
				}
			}

			// si appuie sur boutonEmplois "Code"
			if(boutonEmplois[i].classList.contains('futurCode')){
				// si contient la classe qui le rend visible
				if(contenuEmploisCode.classList.contains('visibleFuturEmplois')== false){
					for(let i=0; i<groupeContenusEmplois.length; i++){
						groupeContenusEmplois[i].classList.remove('visibleFuturEmplois');
					}
					contenuEmploisCode.classList.add('visibleFuturEmplois');
				}
				else{
					contenuEmploisCode.classList.remove('visibleFuturEmplois');
				}
			}


    	}) // fin mousedown
	}// fin bouble for

}());