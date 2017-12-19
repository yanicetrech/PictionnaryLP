<!DOCTYPE html>  
<html>  
<head>  
    <meta charset=UTF-8 />  
	<link rel="stylesheet" media="screen" href="../css/styles.css" > 
    <title>Pictionnary - Inscription</title>  
</head>  
<body>  
  
<h2>Inscrivez-vous</h2>  
<form class="inscription" action="req_inscription.php" method="post" name="inscription">  
		
    <span class="required_notification">Les champs obligatoires sont indiqués par *</span>  
    <ul>  
        </li>  
        <li>  
            <label for="email">E-mail :</label>  
            <input type="email" name="email" id="email" autofocus required><br>  
          
            <span class="form_hint">Format attendu "name@something.com"</span>  
        </li>  
        <li>  
            <label for="prenom">Prénom :</label>  
            <input type="text" name="prenom" id="prenom" placeholder="Saisissez votre prénom" required>  
           

        </li>  
        <li>  
            <input type="submit" value="Soumettre Formulaire">  
        </li>  
		
		<li>  
            <label for="mdp1">Mot de passe :</label>  
            <input type="password" name="password" id="mdp1" pattern=".{6,8}" onkeyup="validateMdp2()" required title = "Le mot de passe doit contenir de 6 à 8 caractères alphanumériques."
			placeholder ="Saisissez votre mot de passe" required>  
          
            <span class="form_hint">De 6 à 8 caractères alphanumériques.</span>  
        </li>  
        <li>  
            <label for="mdp2">Confirmez mot de passe :</label>  
            <input type="password" id="mdp2"  onkeyup="validateMdp2()" placeholder = "Confirmez mdp" required>  
           
				
            <span class="form_hint">Les mots de passes doivent être égaux.</span>  
            <script>  
                validateMdp2 = function(e) {  
                   /* var mdp1 = document.getElementById('mdp1');  
                    var mdp2 = document.getElementById('mdp2');  
					var pass= document.getElementByName('password'); */
					
					
					
                    if ((document.getElementById('mdp1').value !== '') && (document.getElementById('mdp1').value === document.getElementById('mdp2').value))
                         { 
							document.getElementById('mdp2').setCustomValidity('');
						 }
						 
                    else {  
                         
                        document.getElementById('mdp2').setCustomValidity('Les mots de passes doivent être égaux.');  
                    }  
                }  
            </script>  
			
			<li>  
            <label for="birthdate">Date de naissance:</label>  
            <input type="date" name="birthdate" id="birthdate" placeholder="JJ/MM/AAAA" required onchange="computeAge()"/>  
            <script>
                computeAge = function(e) {
                    try
					{
                        // j'affiche dans la console quelques objets javascript, ce qui devrait vous aider.
                        console.log(Date.now());
                        console.log(document.getElementById("birthdate"));
                        console.log(document.getElementById("birthdate").valueAsDate);
                        console.log(Date.parse(document.getElementById("birthdate").valueAsDate));
                        console.log(new Date(0).getYear());
                        console.log(new Date(65572346585).getYear());
						console.log(new Date(65572346585).getYear());
						
                        var date = Date.now() - Date.parse(document.getElementById("birthdate").value);
                        var intDate = parseInt(date);
                        var newDate = new Date(intDate).getYear() - 70;
						var age = document.getElementById("age");
                        age.value = newDate;
						
					
                        
                    } 
					catch(e) 
					{
                        age = undefined;
                    }
				}
            </script>  
            <span class="form_hint">Format attendu "JJ/MM/AAAA"</span>  
        </li>  
        <li>  
            <label for="age">Age:</label>  
            <input type="number" name="age" id="age" />  
            
        </li>  
		
		<li>  
            <label for="profilepicfile">Photo de profil:</label>  
            <input type="file" id="profilepicfile" onchange="readImage(this)"/>  
            <!-- l'input profilepic va contenir le chemin vers l'image sur l'ordinateur du client -->  
            <!-- on ne veut pas envoyer cette info avec le formulaire, donc il n'y a pas d'attribut name -->  
            <span class="form_hint">Choisissez une image.</span>  
            <input type="hidden" name="profilepic" id="profilepic"/>  
            <!-- l'input profilepic va contenir l'image redimensionnée sous forme d'une data url -->   
            <!-- c'est cet input qui sera envoyé avec le formulaire, sous le nom profilepic -->  
            <canvas id="preview" width="0" height="0"></canvas>  
            <!-- le canvas (nouveauté html5), c'est ici qu'on affichera une visualisation de l'image. -->  
            <!-- on pourrait afficher l'image dans un élément img, mais le canvas va nous permettre également   
            de la redimensionner, et de l'enregistrer sous forme d'une data url-->  
            <script> 
				var canvas  = document.getElementById("preview");
				var context = canvas.getContext("2d");
				var MAX_WIDTH = 96;
				var MAX_HEIGHT = 96;
					function readImage(img) {
						if (img.files && img.files[0]) {
							var width = img.width;
							var height = img.width;

							var fr= new FileReader();
							fr.onload = (e) => {
							var img = new Image();
							img.addEventListener("load", () => {

							var h = 0;
							var w = 0;

							if(img.width>img.height){
								w = MAX_WIDTH;
								h = MAX_HEIGHT / img.width * img.height;
							} else {
								w = MAX_WIDTH / img.height * img.width;
								h = MAX_HEIGHT;
							}
							preview.width = w;
							preview.height = h;
							context.drawImage(img, 0, 0, w, h);
						});
						img.src = e.target.result;
					};
					fr.readAsDataURL(img.files[0]);
				}
			}			
                
            </script>  
        </li>  
    </ul>  
	
</form>  
</body>  
</html>  