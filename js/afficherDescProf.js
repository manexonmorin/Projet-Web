// affiche le groupe de profs lié à l'onglet cliqué
(function(){

    let bouton = document.querySelectorAll(".ongletProf");
	
    let ProfWeb = document.querySelector(".ProfWeb");
	let ProfJeux = document.querySelector(".ProfJeux");
	let Prof3D = document.querySelector(".Prof3D");
	let ProfVideo = document.querySelector(".ProfVideo");
	let ProfDesign = document.querySelector(".ProfDesign");

	let groupeTypesProfs = document.querySelectorAll(".profContenu");


	for(let i=0; i<bouton.length; i++){
		bouton[i].addEventListener('mousedown', function(){
		// si appuie sur bouton "Web"
			if(bouton[i].classList.contains('titreWeb')){
				// si contient la classe qui le rend visible
				if(ProfWeb.classList.contains('descProfVisible')== false){
					for(let i=0; i<groupeTypesProfs.length; i++){
						groupeTypesProfs[i].classList.remove('descProfVisible');
					}
					ProfWeb.classList.add('descProfVisible');
				}
				else{
					ProfWeb.classList.remove('descProfVisible');
				}
			}

			// si appuie sur bouton "Jeux"
			else if(bouton[i].classList.contains('titreJeux')){
				// si contient la classe qui le rend visible
				if(ProfJeux.classList.contains('descProfVisible')== false){
					for(let i=0; i<groupeTypesProfs.length; i++){
						groupeTypesProfs[i].classList.remove('descProfVisible');
					}
					ProfJeux.classList.add('descProfVisible');
				}
				else{
					ProfJeux.classList.remove('descProfVisible');
				}
			}

			// si appuie sur bouton "3D"
			else if(bouton[i].classList.contains('titre3D')){
				// si contient la classe qui le rend visible
				if(Prof3D.classList.contains('descProfVisible')== false){
					for(let i=0; i<groupeTypesProfs.length; i++){
						groupeTypesProfs[i].classList.remove('descProfVisible');
					}
					Prof3D.classList.add('descProfVisible');
				}
				else{
					Prof3D.classList.remove('descProfVisible');
				}
			}

			// si appuie sur bouton "Video"
			else if(bouton[i].classList.contains('titreVideo')){
				// si contient la classe qui le rend visible
				if(ProfVideo.classList.contains('descProfVisible')== false){
					for(let i=0; i<groupeTypesProfs.length; i++){
						groupeTypesProfs[i].classList.remove('descProfVisible');
					}
					ProfVideo.classList.add('descProfVisible');
				}
				else{
					ProfVideo.classList.remove('descProfVisible');
				}
			}

			// si appuie sur bouton "Design"
			else if(bouton[i].classList.contains('titreDesign')){
				// si contient la classe qui le rend visible
				if(ProfDesign.classList.contains('descProfVisible')== false){
					for(let i=0; i<groupeTypesProfs.length; i++){
						groupeTypesProfs[i].classList.remove('descProfVisible');
					}
					ProfDesign.classList.add('descProfVisible');
				}
				else{
					ProfDesign.classList.remove('descProfVisible');
				}
			}
    	})
	}

}());