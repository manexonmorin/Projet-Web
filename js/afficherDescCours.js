// affiche le groupe de profs lié à l'onglet cliqué
(function(){

	// chaque onglet de cours
    let boutonTitreCours = document.querySelectorAll(".titreCours");
	
	// contenu cache
    let descriptionCours = document.querySelector(".descriptionCours");


	for(let i=0; i<boutonTitreCours.length; i++){
		boutonTitreCours[i].addEventListener('mousedown', function(){
		// si appuie sur bouton "Web"
			if(boutonTitreCours[i].classList.contains('DescCoursVisible') == false){
				// si contient la classe qui le rend visible
				descriptionCours.classList.add('DescCoursVisible');
			}
			else{
				descriptionCours.classList.remove('DescCoursVisible');
			}


    	})
	}

}());