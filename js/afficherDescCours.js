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
				// ajoute une classe qui elle affecte ~ la classe de description en visible (voir scss "cour-session")
				boutonTitreCours[i].classList.remove('DescCoursInvisible');
				boutonTitreCours[i].classList.add('DescCoursVisible');
			}
			else{
				// retire la classe et affecte une qui cache la description (voir scss "cour-session")
				boutonTitreCours[i].classList.remove('DescCoursVisible');
				boutonTitreCours[i].classList.add('DescCoursInvisible');
			}

    	})
	}

}());