<?php 
    $title = 'Raspberry Pi serveur NAS';
    require 'include/header.php'; 
?>
<h1 class="text-center">Raspberry Pi serveur NAS</h1>
<div class="container">
    <h2 class="titre" id="menu">Menu</h2>
    <ul>
        <li>
            <a href="#introduction">1 - introduction</a>
        </li>
        <li>
            <a href="#prerequis">2 - Pré-requis</a>
        </li>
        <li>
            <a href="#conf">3 - Configuration du Raspberry Pi</a>
        </li>
        <li>
            <a href="#creation">4 - Création du serveur NAS avec SAMBA</a>
        </li>
        <li>
            <a href="#connexion">5 - Connexion au serveur NAS</a>
        </li>
    </ul>
    <div class="border border-success" id='introduction'>
        <h2 class='titre'>1 - Introduction</h2>
        <p>
            Qu'est ce qu'un serveur NAS ?   
        </p>
        <p>
            Un serveur NAS est un système informatique qui permet d'effectuer des sauvegardes de vos données et de pouvoir les partager. C'est un <strong>cloud</strong> personnel.
        </p>
        <p>
            Pas exemple vous pouvez stocker des vidéos et connecter votre télévision pour y accéder.
        </p>
        <p>
            Cette page à pour objectif de vous montrer comment monter ce serveur en installant le logiciel SAMBA sur votre Raspberry Pi.
        </p>
        <img src="images/retour.png" alt="retour">    <a href='#menu'>menu</a>
    </div>
    <br>
    <div class="border border-success" id='prerequis'>
        <h2 class="titre">2 - Pré-requis</h2>
        <p>Matériel nécessaire :</p>
        <ul>
            <li>Un Raspberry Pi</li>
            <li>Une alimentation</li>
            <li>Le nécessaire pour une connexion réseau</li>
            <li>Une carte SD avec Raspbian installé</li>
            <li>Un disque dur externe</li>
        </ul>
        <img src="images/retour.png" alt="retour">    <a href='#menu'>menu</a>
    </div>
    <br>
    <div class="border border-success" id='conf'>
        <h2 class="titre">3 - Configuration du Raspberry Pi</h2>
        <p>Mise à jour du Raspberry Pi :</p>
        <div class="info">
            sudo apt update <br>
            sudo apt upgrade    
        </div>
        <br>
        <p>
            Création du dossier de partage "public" :
        </p>
        <p>
            <img src="images/attention.png" alt="attention"> 
            Respecter scrupuleusement les majuscules et les minuscules
        </p>
        <div class="info">
            sudo mkdir /home/shares <br>
            sudo mkdir /home/shares/public <br>
            sudo chown -R root:users /home/shares/public <br>
            sudo chmod -R ug=rwx,o=rx /home/shares/public
        </div>
        <br>
        <p>
            <strong>mkdir</strong> : création d'un dossier <br>
            <strong>chown</strong> : modifie le propriétaire d'un fichier ou d'un répertoire <br>
            <strong>chmod</strong> : modifie les droits sur un fichier ou un dossier <br>
        </p>
        <p>
            <a href="https://www.leshirondellesdunet.com/chmod-et-chown" target="_blank">Plus d'informations sur ces commandes</a>
        </p>
        <img src="images/retour.png" alt="retour">    <a href='#menu'>menu</a>
    </div>
    <br>
    <div class="border border-success" id='creation'>
        <h2 class="titre">4 - Création du serveur NAS avec SAMBA</h2>
        <p>
            Nous allons procéder à l'installation du logiciel SAMBA qui permet de gérer la mise en réseau d'un disque dur.
        </p>
        <p>
            Installation de Samba :
            <div class="info">
                sudo apt install samba samba-common-bin
            </div>
        </p>
        <br>
        <p>
            Lors de l'affichage de cette fenêtre valider <strong>Oui</strong>
            <img src="images/confsamba.png" alt="Configuration Samba">
        </p>
        <p>
            Modification du fichier de configuration :
        
            <div class="info">
                sudo nano /etc/samba/smb.conf
            </div>
        </p>
        <p>
            Pour limiter les connexions en demandant une authentification, rendez-vous à la ligne :
            <div class="info">
                ##### Authentification ##### 
            </div>
        </p>
        <p>
            Et rajouter juste en dessous :
            <div class="info">
                security = user
            </div>
        </p>
        
        <p>
            Afin de gérer les espaces de stockage privés, rendez vous maintenant dans la partie <mark>[homes]</mark>. Si vous souhaitez pouvoir écrire (envoyer des fichiers) sur votre NAS, 
            vérifiez bien que le fichier contient la ligne suivante :
            <div class="info">
                read only = no    
            </div>
        </p>
        <p>
            Enfin, tout en bas du fichier, nous allons rajouter des paramètres concernant l’accès au NAS :
            <div class="info">
                [public] <br>
                comment= Public Storage<br>
                path = /home/shares/public<br>
                valid users = @users<br>
                force group = users<br>
                create mask = 0660<br>
                directory mask = 0771<br>
                read only = no
            </div>
        </p>
        <p>
            Sauvegarde le fichier et redémarrez samba :
            <div class="info">
                sudo /etc/init.d/smbd restart    
            </div>
        </p>
        <p>
            Ajout d'un utilisateur à samba. <br>
            Dans notre cas ce sera l'utilisateur <strong>pi</strong> avec le mot de passe <strong>pi</strong> :
            <div class="info">
                sudo smbpasswd -a pi 
            </div>
            Capture d'écran :
            <img src="images/usersamba.png" alt="Utilisateur Samba">
        </p>
        <img src="images/retour.png" alt="retour">    <a href='#menu'>menu</a>
    </div>
    <div class="border border-success" id='connexion'>
        <h2 class="titre">5 - Connexion au serveur NAS</h2>
        <p>
            Notre NAS est maintenant configuré. Pour les smartphones, vous pouvez vous y connecter avec une appli comme File Expert pour Android ou File Explorer sur IOS.
        </p>
        <p>
            Pour vous connecter depuis Windows, rendez vous sur la fenêtre <strong>Ce PC</strong> cliquez sur l’onglet <strong>Ordinateur</strong> puis cliquez sur <strong> Connectez un lecteur réseau</strong>.
        </p>
        <p>
            La lettre du lecteur importe peu mais vous devez renseigner où se trouve la Raspberry Pi sur le réseau. 
            soit par son nom, soit par son adresse ip. 
            Si vous n’avez jamais changé le nom de votre Raspberry Pi vous devriez pouvoir vous connecter au répertoire public en renseignant <mark> \\raspberrypi\public </mark> 
            et au répertoire privé avec le nom d’utilisateur (dans notre exemple pi) en renseignant <mark> \\raspberrypi\pi </mark>.
            <br>
            <img src="images/attention.png" alt="attention">
            Vous pouvez remplacer <strong>\\raspberry</strong> par <strong>\\IP du raspberry</strong>.
        </p>     
        <img src="images/retour.png" alt="retour">    <a href='#menu'>menu</a>
    </div>
</div>

<?php require 'include/footer.php'; ?>

