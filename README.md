<!-- c'est quoi les attributs action et method ? -->  
<!-- c'est quoi les attributs action et method ? -->  
	Permet de sp�cifier pour
		- action : traitement de la page indiquer
		- method : traitement des variables indiquer par $POST
			
<!-- qu'y a-t-il d'autre comme possiblit� que post pour l'attribut method ? -->  
		"GET"

<input type="email" name="email" id="email" autofocus required><br>  
<!-- ajouter � input l'attribut qui lui donne le focus automatiquement -->  OK
<!-- ajouter � input l'attribut qui dit que c'est un champs obligatoire -->  OK
<!-- quelle est la diff�rence entre les attributs name et id ? -->  
	Permet de sp�cifier pour
		- name : affiche le nom du contenu et l'affiche sur la page
		- id : permet d'identifier l'attribut afin de le r�utiliser (ne s'affiche pas sur la page par d�faut)
					
<!-- c'est lequel qui doit �tre �gal � l'attribut for du label ? -->
		"id"

<input type="text" name="prenom" id="prenom" placeholder="Saisissez votre pr�nom" required>  
<!-- ajouter � input l'attribut qui dit que c'est un champs obligatoire -->  OK
<!-- ajouter � input l'attribut qui donne une indication gris�e (placeholder) -->  OK

<input type="password" name="password" id="mdp1" pattern=".{6,8}" onkeyup="validateMdp2()" required title = "Le mot de passe doit contenir de 6 � 8 caract�res alphanum�riques."
placeholder ="Saisissez votre mot de passe" required>  
<!-- ajouter � input l'attribut qui dit que c'est un champs obligatoire -->  OK
<!-- ajouter � input l'attribut qui donne une indication gris�e (placeholder) -->  OK
<!-- sp�cifiez l'expression r�guli�re: le mot de passe doit �tre compos� de 6 � 8 caract�res alphanum�riques -->  OK
<!-- quels sont les deux sc�narios o� l'attribut title sera affich� ? -->  
		1 - Le mot de passe contient moins de 6 caract�res 
		2 - Le mot de passe contient plus de 8 caract�res
 <!-- encore une fois, quelle est la diff�rence entre name et id pour un input ? -->  
	Permet de sp�cifier pour
		- name : affiche le nom du contenu et l'affiche sur la page
		- id : permet d'identifier l'attribut afin de le r�utiliser (ne s'affiche pas sur la page par d�faut)

<input type="password" id="mdp2"  onkeyup="validateMdp2()" placeholder = "Confirmez mdp" required>  
<!-- ajouter � input l'attribut qui dit que c'est un champs obligatoire -->  OK
<!-- ajouter � input l'attribut qui donne une indication gris�e (placeholder) -->  OK

<!-- pourquoi est-ce qu'on a pas mis un attribut name ici ? -->  
	- On doit v�rifier une condition ils ne doivent donc pas avoir le m�me nom
<!-- quel sc�nario justifie qu'on ait ajout� l'�couter validateMdp2() � l'�v�nement onkeyup de l'input mdp1 ? -->  
	- �v�nement de l'appuie sur la touche d'entr�e 

<!-- � quoi sert l'attribut disabled ? -->  
	Emp�che d'�crire dans le champ (emp�che toute modification)