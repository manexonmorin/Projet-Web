// affiche le groupe de profs lié à l'onglet cliqué
(function(){

	// chaque onglet de cours
    let boutonTitreCours = document.querySelectorAll(".titreCours");
	
	// contenu cache
    let descriptionCours = document.querySelector(".descriptionCours");



	for(let i=0; i<boutonTitreCours.length; i++){
		boutonTitreCours[i].addEventListener('mousedown', function(){
		// si appuie sur bouton "Web"
			if(boutonTitreCours[i].classList.contains('TitreVideo')){
				// ajoute un style qui les highlight des autre cours

			}
			if(boutonTitreCours[i].classList.contains('TitreJeux')){
				// ajoute un style qui les highlight des autre cours

			}
			if(boutonTitreCours[i].classList.contains('TitreDesign')){
				// ajoute un style qui les highlight des autre cours

			}
			if(boutonTitreCours[i].classList.contains('TitreWeb')){
				// ajoute un style qui les highlight des autre cours

			}
			if(boutonTitreCours[i].classList.contains('Titre3D')){
				// ajoute un style qui les highlight des autre cours

			}

    	})
	}

}());