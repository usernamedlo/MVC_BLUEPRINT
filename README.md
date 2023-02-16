#titre Template du modèle MVC.

Il faut au préalable :
* Avoir git installé sur votre machine. [lien](https://git-scm.com/downloads)

```shell
git clone https://github.com/0xdlo/MVC_BLUEPRINT.git
```

#Modèle MVC en détail

#1. LE DISPATCHER: /public/index.php
	a. Chargement du router
	b. Chargement du template

#2. LE ROUTER: /routers/index.php
	a. Chargement d'un CTRL
	b. Lancement d'une des fcts du CTRL (indexAction, showAction, ...)

#3. LE CTRL: /app/controllers/postController.php  [Ensemble de fonctions: indexAction, showAction] Chaque action
	a. Charge les data du Model dans une variable ($posts)
	b. Charge la vue (qui affiche les data) dans $content

#4. LE MODEL: /app/models/postsModel.php [Ensemble de fonctions]
   Chaque fonction
	a. Execute une requête SQL
	b. Return le résultat (tableau indexé ou tableau associatif)

#5. LA VUE: /app/views/posts/index.php
	a. Affiche les data dans le code HTML

#6. LE TEMPLATE: /app/views/template/index.php
	a. Le code HTML complet + affichage des zones dynamiques ($content)