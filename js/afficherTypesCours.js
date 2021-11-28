// affiche le groupe de profs lié à l'onglet cliqué
(function(){

	// chaque onglet de cours
    let boutonTitreCours = document.querySelectorAll(".titreCours");

	// boutons flottants
	let BoutonTypeCours = document.querySelectorAll(".BoutonTypeCours");

	let courJeux = document.querySelectorAll(".TitreJeux");
	let courWeb = document.querySelectorAll(".TitreWeb");
	let courDesign = document.querySelectorAll(".TitreDesign");
	let courVideo = document.querySelectorAll(".TitreVideo");
	let cour3D = document.querySelectorAll(".Titre3D");

	for(let i=0; i<BoutonTypeCours.length; i++){
		BoutonTypeCours[i].addEventListener('mousedown', function(){

			 // si appuie sur bouton "Jeux"
			if(BoutonTypeCours[i].classList.contains('typeJeux')){
				for(let i=0; i<boutonTitreCours.length; i++){
					if(boutonTitreCours[i].classList.contains('TitreJeux')){
						// ajoute un style qui les highlight des autre cours
						for(let i=0; i<courJeux.length; i++){
							courJeux[i].classList.add('courSelectioner');
						}
					}
				}
			}

		 	// si appuie sur bouton "Web"			
			if(BoutonTypeCours[i].classList.contains('typeWeb')){
				for(let i=0; i<boutonTitreCours.length; i++){
					if(boutonTitreCours[i].classList.contains('TitreWeb')){
						// ajoute un style qui les highlight des autre cours
						// verifie si contient deja la classe qui rend visible
						for(let i=0; i<courWeb.length; i++){
							if(courWeb[i].classList.contains('courSelectioner')== false){
								courWeb[i].classList.add('courSelectioner');
							}
							else{
								courWeb[i].classList.remove('courSelectioner');
								courWeb[i].classList.add('courDeselectioner');
							}
						}// fin for
					}
				}// fin for globale
			}
			
		 	// si appuie sur bouton "Design"			
			if(BoutonTypeCours[i].classList.contains('typeDesign')){
				
			}

		 	// si appuie sur bouton "Video"			
			if(boutonTitreCours[i].classList.contains('TitreVideo')){


			}

		 	// si appuie sur bouton "3D"			
			if(boutonTitreCours[i].classList.contains('Titre3D')){


			}
			

    	})
	}

}());