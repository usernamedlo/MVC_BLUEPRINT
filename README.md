# Template du modèle MVC.

Il faut au préalable :
* Avoir git installé sur votre machine. ([Installer git](https://git-scm.com/downloads))
-----------------
Une fois que git est installé sur votre machine, il faudra aller sur VSCode pour cloner le projet. <br> 
Pour faire ceci, il suffit d'appuyer sur (```CTRL + SHIFT + P```). <br> 
Un terminal de commande va s'ouvrir. Tapez "git clone" + coller l'URL du projet. Lancez la commande en appuyant sur (```ENTER```). <br> 
Et voilà, le projet est cloné.

(Commande à taper dans le terminal de commande de VSCode)
```shell
git clone https://github.com/0xdlo/MVC_BLUEPRINT.git
```
([Pour plus d'info sur le clonage d'un projet](https://docs.github.com/fr/repositories/creating-and-managing-repositories/cloning-a-repository))

# Modèle MVC en détail

1. LE DISPATCHER: /public/index.php
	1. Chargement du router
	2. Chargement du template
-----------------
2. LE ROUTER: /routers/index.php
	1. Chargement d'un CTRL
	2. Lancement d'une des fcts du CTRL (indexAction, showAction, ...)
-----------------
3. LE CTRL: /app/controllers/postController.php  [Ensemble de fonctions: indexAction, showAction] Chaque action
	1. Charge les data du Model dans une variable ($posts)
	2. Charge la vue (qui affiche les data) dans $content
-----------------
4. LE MODEL: /app/models/postsModel.php [Ensemble de fonctions]
   Chaque fonction
	1. Execute une requête SQL
	2. Return le résultat (tableau indexé ou tableau associatif)
-----------------
5. LA VUE: /app/views/posts/index.php
	1. Affiche les data dans le code HTML
-----------------
6. LE TEMPLATE: /app/views/template/index.php
	1. Le code HTML complet + affichage des zones dynamiques (```$content```)

@0xdlo