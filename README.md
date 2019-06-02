<h1>REST API Authentification php-jwt</h1>

Une api très simple basée sur Slim framework qui vous permet de connecter vos utilisateurs grace à PHP et JWT.

<b>Slim framework </b>: Slim est un micro-framework PHP qui vous permet d’écrire rapidement des applications Web et des API simples mais puissantes. Pour plus d'information, consultez la doccumentation de slim https://www.slimframework.com

<b>JWT </b>: JSON Web Token est un standard ouvert (RFC 7519) qui définit un moyen compact et autonome de transmettre des informations en toute sécurité entre les parties sous forme d'objet JSON. pour plus d'information, rendez vous sur le site officiel de JWT https://jwt.io 

Suivez les etapes suivantes pour installer et configurer cette api.

<h3>1). Etape 1 :  Téléchargement du projet </h3>
Créer un repertoire dans votre machine et telecharger ou cloner le projet. pour faire le clone, dans votre terminal ou invite de commande tapper git clone https://github.com/abdoulazi/rest-api-authentification-php-jwt.git .

<h3>2). Etape 2 : Installation des depensences</h3>
Une fois telecharger les fichier, rendez vous dans le repertoire de votre projet et installer toutes les depenadnces de l'api avec la commande suivante : conmposer install

<b>Composer</b> est un logiciel gestionnaire de dépendances libre écrit en PHP. Il permet à ses utilisateurs de déclarer et d'installer les bibliothèques dont le projet principal a besoin. Telecharger et installer composer si c'est pas déja fait https://getcomposer.org/ .

<h3>3). Etape 3 : Creation et configuration de la base de donnée</h3> 

Par defaut cette api utilise la base de donnée Mysql, le fichier de configuration se trouve dans le repertoire <b>/configs/settings.php</b> rendez vous et addapter cette configuration à votre environement de developpement.<br/>

<b>Schema de la base de donnée : </b> users(id INTEGER(11) PRIMARY KEY, name VARCHAR(255), lastname VARCHAR(255), email VARCHAR(255), password VARCHAR(255)).

<h3>4). Etape 4 : Démarrage du serveur et test des endpoints</h3>
Toutes les routes se trouvent dans le répertoire <b>routes/routes.php</b>. 
Dans votre projet, demmarer le serveur interne de php avec la commande suivante : php -S localhost:8000 -t public. (Si le port 8000 n'est pas disponible, choisissez un autre).
<h3>Routes</h3> 
-- https://localhost:8080/api/v2/auth/signin <br/>
-- https://localhost:8080/api/v2/auth/signup <br/><br/>
Pour tester ces routes, utilisez par exemple le logiciel postman que je trouve très sympa :). Télecharger ce logiciel sur le
site web officiel de postman https://www.getpostman.com/
<hr>
Si cette api vous a aidé n'hesittez pas à partager avec votre entourage, vous pouvez également contribuer à ce projet et s'il y'a des remarques ou des suggestions je suis à votre ecoute merci d'avance. <br/> <br/>
<center>Intégrez vous rapidement dans le monde du web avec moi  sur le site https://dewagon.com.</center>
