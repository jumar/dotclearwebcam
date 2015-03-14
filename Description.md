Dans le screenshot suivant le widget apparait tout en haut à droite. Si on clic sur On, l'image va se raffraichir régulièrement, on clique ensuite sur Off pour arreter le rafraichissement:


![http://www.voirailleurs.info/blog/public/Divers/dc-webcam.png](http://www.voirailleurs.info/blog/public/Divers/dc-webcam.png)

Le lien "Agrandir" a été configuré pour ouvrir une page affichant l'image de la webcam en grand format avec un delai de rafraichissement donné. Le code de la page est le suivant : (remplacez "http://www.example.com/webcamImage", par l'URL de la camera)



```
///html
<div id="cam">
	<img id="camImage" src="http://www.example.com/webcamImage" alt="Message descriptif" width="640" height="480"/>
	</div>

	<script type="text/javascript">
		setInterval ( "getPic();", 500 ); // 500 pour un raffraichissement toutes les 500ms
		function getPic()
		{
			document.getElementById("camImage").src = "http://www.example.com/webcamImage?" + Math.random();
		}
	</script>
///
```

![http://www.voirailleurs.info/blog/public/Divers/dc-webcam3.png](http://www.voirailleurs.info/blog/public/Divers/dc-webcam3.png)


Ce qui donne le resultat suivant:


![http://www.voirailleurs.info/blog/public/Divers/dc-webcam2.png](http://www.voirailleurs.info/blog/public/Divers/dc-webcam2.png)


Dans la vue d'admin, on peut configurer l'url de la camera, la frequence de rafraichissement ansi que le lien à ouvrir lorsque l'on clique sur "Agrandir".

![http://www.voirailleurs.info/blog/public/Divers/dc-webcam4.png](http://www.voirailleurs.info/blog/public/Divers/dc-webcam4.png)