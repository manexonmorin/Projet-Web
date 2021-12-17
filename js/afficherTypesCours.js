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
				console.log("ici")
				for(let i=0; i<boutonTitreCours.length; i++){
					if(boutonTitreCours[i].classList.contains('TitreJeux')){
						// ajoute un style qui les highlight des autre cours
						// verifie si contient deja la classe qui rend visible
						for(let i=0; i<courJeux.length; i++){
							if(courJeux[i].classList.contains('courSelectioner')== false){
								courJeux[i].classList.remove('courDeselectioner');
								courJeux[i].classList.add('courSelectioner');
							}
						}// fin for principale

						for(let i=0; i<courWeb.length; i++){
							courWeb[i].classList.remove('courSelectioner');
							courWeb[i].classList.add('courDeselectioner');
						}
						for(let i=0; i<courVideo.length; i++){
							courVideo[i].classList.remove('courSelectioner');
							courVideo[i].classList.add('courDeselectioner');
						}
						for(let i=0; i<courDesign.length; i++){
							courDesign[i].classList.remove('courSelectioner');
							courDesign[i].classList.add('courDeselectioner');
						}
						for(let i=0; i<cour3D.length; i++){
							cour3D[i].classList.remove('courSelectioner');
							cour3D[i].classList.add('courDeselectioner');
						}
					}
				}
			}// fin type jeux

		 	// si appuie sur bouton "Web"			
			if(BoutonTypeCours[i].classList.contains('typeWeb')){
				for(let i=0; i<boutonTitreCours.length; i++){
					if(boutonTitreCours[i].classList.contains('TitreWeb')){
						// ajoute un style qui les highlight des autre cours
						// verifie si contient deja la classe qui rend visible
						for(let i=0; i<courWeb.length; i++){
							if(courWeb[i].classList.contains('courSelectioner')== false){
								courWeb[i].classList.remove('courDeselectioner');
								courWeb[i].classList.add('courSelectioner');
							}
						}// fin for principale

						for(let i=0; i<courJeux.length; i++){
							courJeux[i].classList.remove('courSelectioner');
							courJeux[i].classList.add('courDeselectioner');
						}
						for(let i=0; i<courVideo.length; i++){
							courVideo[i].classList.remove('courSelectioner');
							courVideo[i].classList.add('courDeselectioner');
						}
						for(let i=0; i<courDesign.length; i++){
							courDesign[i].classList.remove('courSelectioner');
							courDesign[i].classList.add('courDeselectioner');
						}
						for(let i=0; i<cour3D.length; i++){
							cour3D[i].classList.remove('courSelectioner');
							cour3D[i].classList.add('courDeselectioner');
						}
					}// fin if
				}// fin for globale
			} // fin type web
			
		 	// si appuie sur bouton "Design"			
			if(BoutonTypeCours[i].classList.contains('typeDesign')){
				// ajoute un style qui les highlight des autre cours
				// verifie si contient deja la classe qui rend visible
				for(let i=0; i<courDesign.length; i++){
					if(courDesign[i].classList.contains('courSelectioner')== false){
						courDesign[i].classList.remove('courDeselectioner');
						courDesign[i].classList.add('courSelectioner');
					}
				}// fin for principale

				for(let i=0; i<courJeux.length; i++){
					courJeux[i].classList.remove('courSelectioner');
					courJeux[i].classList.add('courDeselectioner');
				}
				for(let i=0; i<courVideo.length; i++){
					courVideo[i].classList.remove('courSelectioner');
					courVideo[i].classList.add('courDeselectioner');
				}
				for(let i=0; i<courWeb.length; i++){
					courWeb[i].classList.remove('courSelectioner');
					courWeb[i].classList.add('courDeselectioner');
				}
				for(let i=0; i<cour3D.length; i++){
					cour3D[i].classList.remove('courSelectioner');
					cour3D[i].classList.add('courDeselectioner');
				}
			} // fin type design

		 	// si appuie sur bouton "Video"			
			if(BoutonTypeCours[i].classList.contains('typeVideo')){
				// ajoute un style qui les highlight des autre cours
				// verifie si contient deja la classe qui rend visible
				for(let i=0; i<courVideo.length; i++){
					if(courVideo[i].classList.contains('courSelectioner')== false){
						courVideo[i].classList.remove('courDeselectioner');
						courVideo[i].classList.add('courSelectioner');
					}
				}// fin for principale

				for(let i=0; i<courJeux.length; i++){
					courJeux[i].classList.remove('courSelectioner');
					courJeux[i].classList.add('courDeselectioner');
				}
				for(let i=0; i<courWeb.length; i++){
					courWeb[i].classList.remove('courSelectioner');
					courWeb[i].classList.add('courDeselectioner');
				}
				for(let i=0; i<courDesign.length; i++){
					courDesign[i].classList.remove('courSelectioner');
					courDesign[i].classList.add('courDeselectioner');
				}
				for(let i=0; i<cour3D.length; i++){
					cour3D[i].classList.remove('courSelectioner');
					cour3D[i].classList.add('courDeselectioner');
				}
			} // fin type video

		 	// si appuie sur bouton "3D"			
			if(BoutonTypeCours[i].classList.contains('type3D')){
				// ajoute un style qui les highlight des autre cours
				// verifie si contient deja la classe qui rend visible
				for(let i=0; i<cour3D.length; i++){
					if(cour3D[i].classList.contains('courSelectioner')== false){
						cour3D[i].classList.remove('courDeselectioner');
						cour3D[i].classList.add('courSelectioner');
					}
				}// fin for principale

				for(let i=0; i<courJeux.length; i++){
					courJeux[i].classList.remove('courSelectioner');
					courJeux[i].classList.add('courDeselectioner');
				}
				for(let i=0; i<courVideo.length; i++){
					courVideo[i].classList.remove('courSelectioner');
					courVideo[i].classList.add('courDeselectioner');
				}
				for(let i=0; i<courDesign.length; i++){
					courDesign[i].classList.remove('courSelectioner');
					courDesign[i].classList.add('courDeselectioner');
				}
				for(let i=0; i<courWeb.length; i++){
					courWeb[i].classList.remove('courSelectioner');
					courWeb[i].classList.add('courDeselectioner');
				}
			} // fin type 3D
			

    	})
	}

}());