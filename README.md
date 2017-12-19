<!-- c'est quoi les attributs action et method ? -->  
<!-- c'est quoi les attributs action et method ? -->  
	Permet de spécifier pour
		- action : traitement de la page indiquer
		- method : traitement des variables indiquer par $POST
			
<!-- qu'y a-t-il d'autre comme possiblité que post pour l'attribut method ? -->  
		"GET"

<input type="email" name="email" id="email" autofocus required><br>  
<!-- ajouter à input l'attribut qui lui donne le focus automatiquement -->  OK
<!-- ajouter à input l'attribut qui dit que c'est un champs obligatoire -->  OK
<!-- quelle est la différence entre les attributs name et id ? -->  
	Permet de spécifier pour
		- name : affiche le nom du contenu et l'affiche sur la page
		- id : permet d'identifier l'attribut afin de le réutiliser (ne s'affiche pas sur la page par défaut)
					
<!-- c'est lequel qui doit être égal à l'attribut for du label ? -->
		"id"

<input type="text" name="prenom" id="prenom" placeholder="Saisissez votre prénom" required>  
<!-- ajouter à input l'attribut qui dit que c'est un champs obligatoire -->  OK
<!-- ajouter à input l'attribut qui donne une indication grisée (placeholder) -->  OK

<input type="password" name="password" id="mdp1" pattern=".{6,8}" onkeyup="validateMdp2()" required title = "Le mot de passe doit contenir de 6 à 8 caractères alphanumériques."
placeholder ="Saisissez votre mot de passe" required>  
<!-- ajouter à input l'attribut qui dit que c'est un champs obligatoire -->  OK
<!-- ajouter à input l'attribut qui donne une indication grisée (placeholder) -->  OK
<!-- spécifiez l'expression régulière: le mot de passe doit être composé de 6 à 8 caractères alphanumériques -->  OK
<!-- quels sont les deux scénarios où l'attribut title sera affiché ? -->  
		1 - Le mot de passe contient moins de 6 caractères 
		2 - Le mot de passe contient plus de 8 caractères
 <!-- encore une fois, quelle est la différence entre name et id pour un input ? -->  
	Permet de spécifier pour
		- name : affiche le nom du contenu et l'affiche sur la page
		- id : permet d'identifier l'attribut afin de le réutiliser (ne s'affiche pas sur la page par défaut)

<input type="password" id="mdp2"  onkeyup="validateMdp2()" placeholder = "Confirmez mdp" required>  
<!-- ajouter à input l'attribut qui dit que c'est un champs obligatoire -->  OK
<!-- ajouter à input l'attribut qui donne une indication grisée (placeholder) -->  OK

<!-- pourquoi est-ce qu'on a pas mis un attribut name ici ? -->  
	- On doit vérifier une condition ils ne doivent donc pas avoir le même nom
<!-- quel scénario justifie qu'on ait ajouté l'écouter validateMdp2() à l'évènement onkeyup de l'input mdp1 ? -->  
	- événement de l'appuie sur la touche d'entrée 

<!-- à quoi sert l'attribut disabled ? -->  
	Empêche d'écrire dans le champ (empêche toute modification)