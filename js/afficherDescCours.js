// affiche le groupe de profs lié à l'onglet cliqué
(function(){

	// chaque onglet de cours
    let boutonTitreCours = document.querySelectorAll(".titreCours");
	
	// contenu cache
    let descriptionCours = document.querySelectorAll(".descriptionCours");


	for(let i=0; i<boutonTitreCours.length; i++){
		boutonTitreCours[i].addEventListener('mousedown', function(){
		// si appuie sur bouton "Web"
			if(boutonTitreCours[i].classList.contains('DescCoursVisible') == false){
				// si contient la classe qui le rend visible
				for(let i=0; i<descriptionCours.length; i++){
					descriptionCours[i].classList.add('DescCoursVisible');
				}
				console.log('ici')
			}
			else{
				console.log("ici")
				for(let i=0; i<descriptionCours.length; i++){
					descriptionCours[i].classList.remove('DescCoursVisible');
					descriptionCours[i].classList.add('DescCoursInvisible');
				}
			}


    	})
	}

}());