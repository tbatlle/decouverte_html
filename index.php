<?php 
    $title = 'Accueil';
    require 'include/header.php'; 
?>
<div class="container">
    <h2 class='titre' id='menu'>Menu</h2>    
    <ul>
        <li>
            <a href="#definition">1 - Définition du HTML</a>
        </li>
        <li>
            <a href="#envdev">2 - Utilisation d'un environnement de développement</a>
        </li>
        <li>
            <a href="#create">3 - Création d'une page web</a>
            <ul>
                <li>
                    <a href="#decryptage">3.1 - Décryptage d'un page web</a>
                </li>
                <li>
                    <a href="#balises">3.2 - Quelques balises</a>
                    <ul>
                        <li>
                            <a href="#paragraphes">3.2.1 - Les paragraphes</a> 
                        </li>
                        <li>
                            <a href="#titres">3.2.2 - Les titres</a> 
                        </li>
                        <li>
                            <a href="#listes">3.2.3 - Les listes</a> 
                        </li>
                        <li>
                            <a href="#liens">3.2.4 - Les liens</a> 
                        </li>
                        <li>
                            <a href="#images">3.2.5 - Les images</a> 
                        </li>
                        <li>
                            <a href="#tables">3.2.6 - Les tableaux</a> 
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
    </ul>
    <div class="border border-success" id='definition'>
        <h2 class='titre'>1 - Définition du HTML</h2>
        <p><strong>HTML</strong> est l’abréviation du « HyperText Markup Language » ou « langage de balisage hypertexte » en français.</p>
        <p>Le langage HTML est un langage de balisage et non de langage de programmation, car le but du HTML est d’encadrer les différents éléments présents dans une page 
        (images, titres, paragraphes...) par des balises pour leur permettre d’être mis en forme secondairement (via une feuille de style CSS) et pour leur donner du sens.</p>
        <p>Les pages web sont composées de texte brut, parfaitement lisible avec le moindre éditeur de texte, dans lequel sont donc les balises.</p>
        <p>Ces balises fonctionnent le plus souvent par paire car elles servent à encadrer un élément. Il existe donc une <strong>balise ouvrante </strong> pour signifier le début d’un élément et 
        une <strong> balise fermante </strong> pour en signifier la fin.</p>

        <div class="info">
            <u>Exemple d'un paragraphe</u><br>
            <strong>&lt;p&gt;Mon titre&lt;p&gt;</strong>
        </div>
        <p>
            La composition d’une page HTML sépare le contenu et le style (CSS). Pour rendre une page HTML plus interactive, 
            c’est généralement le langage de programmation <strong>JavaScript</strong> qui est utilisé.
        </p>
        <p>
            Dans une page web beaucoup d’éléments servent à <strong>structurer</strong> la page et d’autres permettent d’<strong>interagir </strong>
            avec les utilisateurs (liens hypertextes, zones de texte, boutons…)
        </p>
        <img src="/images/retour.png" alt="retour">    <a href='#menu'>menu</a>
    </div>
    <br>
    <div class="border border-success" id='envdev'>
        <h2 class='titre'>2 - Utilisation d'un environnement de développement</h2>
        <p>
            Pour la conception de pages HTML, il existe de nombreux éditeurs de texte comme <strong>Notepad++, Sublime Text…</strong>
        </p>
        <p>
            Pour la mise en pratique de ce cours, nous utiliserons <strong>Visual Studio Code (VSC)</strong> car il présente de nombreux avantages dont un qui permet de voir en direct 
            sur son navigateur la page web se modifier au fur et à mesure du codage. Il permet également de créer les feuilles de styles (CSS) et de coder en JavaScript.
        </p>
        <p>
            Vous trouverez les informations pour récuperer Visual Studio code dans la page <a href='download.php'>téléchargement</a> et pour l'utilisation dans la page de <a href='tutorielVSC'>prise en main de VSC</a>.
        </p>
        <img src="/images/retour.png" alt="retour">    <a href='#menu'>menu</a>
    </div>
    <br>
    <div class="border border-success" id='create'>
        <h2 class='titre'>3 - Création d'une page web</h2>
        <h6 id='decryptage'>3.1 - Décryptage d'une page web</h6>
        <div>
            <p class="codepen" data-height="265" data-theme-id="dark" data-default-tab="html,result" data-user="tbatlle" data-slug-hash="VwPRPvX" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="exemple1">
                <span>See the Pen <a href="https://codepen.io/tbatlle/pen/VwPRPvX"> 
                    exemple1</a> by BATLLE (<a href="https://codepen.io/tbatlle">@tbatlle</a>) on <a href="https://codepen.io">CodePen</a>.
                </span>
            </p>
            <script async src="https://cpwebassets.codepen.io/assets/embed/ei.js"></script>
            <p>
                <u>Ligne 1 :</u> le <code>doctype</code> est indispensable car il indique que c’est un page HTML en version 5.
            </p>
            <p>
                <u>Ligne 2 :</u>  <code>html</code> est la balise principale du code. Elle englobe tout le contenu de votre page. Cette balise est fermée à la ligne 13
            </p>
            
                Une page web est constituée de 2 parties :
                <ul>
                    <li>
                        <p>
                        	L'en-tête <code>&lt;head&gt;</code> <u>ligne 4 :</u> cette section donne quelques informations générales sur la page comme son titre, l'encodage (pour la gestion des caractères spéciaux), etc. 
                            Cette section est généralement assez courte. 
                        </p>
                        <p>
                            Les informations que contient l'en-tête ne sont pas affichées sur la page, ce sont simplement des informations générales à destination de l'ordinateur.  
                        </p>
                        <p>
                           <img src="images/attention.png" alt="attention"> 
                           Elles sont cependant très importantes.
                        </p>
                    </li>
                    <li>
                        <p>
                            Le corps <code>&lt;body&gt;</code> <u>ligne 9 :</u> c'est là que se trouve la partie principale de la page. 
                            Tout ce que nous écrirons ici sera affiché à l'écran.
                        </p>
                        <p>
                            C'est à l'intérieur du corps que nous écrirons la majeure partie de notre code.
                        </p>
                    </li>
                </ul>
                <p>
                    <u>Ligne 5 :</u> <code>charset</code> cette balise indique l’encodage utilisé dans votre fichier « .html ». Permet l’affichage de caractères spéciaux, 
                    la gestion de certaines langues comme le russe, le chinois…
                </p>
                <p>
                    <u>Ligne 6 :</u> <code>title</code> c'est le titre de votre page, probablement l'élément le plus important ! Toute page doit avoir un titre qui décrit ce qu'elle contient. 
                    Il est conseillé de garder le titre assez court (moins de 100 caractères en général).
                </p>
                <p>
                    <img src="images/attention.png" alt="attention"> 
                    Ceci est un exemple de page web minimale dans la balise « head » il existe d’autres options possibles.
                </p>
                <img src="/images/retour.png" alt="retour">    <a href='#menu'>menu</a>
                <!------------------------------------------------------------------------------------------------------------------------>
                <h6 id='balises' class='titre'>3.2 - Quelques balises</h6>
                <!------------------------------------------------------------------------------------------------------------------------>
                <h6 id='paragraphes' class='titre'>3.2.1 - Les paragraphes</h6>
                <p>
                    L'élément HTML <code>&lt;p&gt;</code> représente un paragraphe de texte. Les paragraphes 
                    sont généralement représentés comme des blocs et séparés par un espace vertical, leur première ligne est également parfois indentée.
                </p>
                <div>
                    <iframe class="interactive tabbed-standard" width="100%" height="250" src="https://interactive-examples.mdn.mozilla.net/pages/tabbed/p.html" title="MDN Web Docs Interactive Example" loading="lazy"></iframe>
                </div>
                <img src="/images/retour.png" alt="retour">    <a href='#menu'>menu</a>
                <!------------------------------------------------------------------------------------------------------------------------>
                <h6 id='titres' class='titre'>3.2.2 - Les titres</h6>
                <p>Les éléments <code>&lt;h1&gt;</code> à <code>&lt;h6&gt;</code> représentent six niveaux de titres dans un document, <code>&lt;h1&gt;</code> est le plus important et <code>&lt;h6&gt;</code> est le moins important. Un élément de titre décrit brièvement le sujet de la section qu'il introduit.</p>
                <div><iframe class="interactive tabbed-standard" width="100%" height="250" src="https://interactive-examples.mdn.mozilla.net/pages/tabbed/h1-h6.html" title="MDN Web Docs Interactive Example" loading="lazy"></iframe></div>
                <img src="/images/retour.png" alt="retour">    <a href='#menu'>menu</a>
                <!------------------------------------------------------------------------------------------------------------------------>
                <h6 id='listes' class='titre'>3.2.3 - Les listes</h6>
                <p>Les listes permettent de structurer du texte et d’ordonner des informations.</p>
                <p>2 types de listes : </p>
                <ul>
                    <li>
                        Les listes non ordonnées ou listes à puces
                    </li>
                    <li>
                    	Les listes ordonnées ou listes numérotées
                    </li>
                </ul>
                <u>Les listes non ordonnées</u>
                <div>
                <iframe class="interactive tabbed-shorter" width="100%" height="250" src="https://interactive-examples.mdn.mozilla.net/pages/tabbed/li.html" title="MDN Web Docs Interactive Example" loading="lazy"></iframe>
                </div>
                <u>Les listes ordonnées</u>
                <div>
                <iframe class="interactive tabbed-shorter" width="100%" height="250" src="https://interactive-examples.mdn.mozilla.net/pages/tabbed/ol.html" title="MDN Web Docs Interactive Example" loading="lazy"></iframe>
                </div>
                <img src="/images/retour.png" alt="retour">    <a href='#menu'>menu</a>
                <!------------------------------------------------------------------------------------------------------------------------>
                <h6 id='liens' class='titre'>3.2.4 - Les liens</h6>
                <p>L'élément <code>&lt;a&gt;</code> (pour ancre ou <em>anchor</em> en anglais) définit un hyperlien vers un autre endroit de la même page ou vers une autre page sur le Web.</p>
                <p>
                Pour les créer nous utilisons la balise <code>&lt;a&gt;</code> et la balise <code>&lt;href&gt;</code> pour indiquer la cible de la balise.
                </p>
                <div><iframe class="interactive" width="100%" height="250" src="https://interactive-examples.mdn.mozilla.net/pages/tabbed/a.html" title="MDN Web Docs Interactive Example" loading="lazy"></iframe></div>
                <img src="/images/retour.png" alt="retour">    <a href='#menu'>menu</a>
                <!------------------------------------------------------------------------------------------------------------------------>
                <h6 id='images' class='titre'>3.2.5 - Les images</h6>
                <p>L'élément HTML <code>&lt;img&gt;</code> permet de représenter une image dans un document.</p>
                <div><iframe class="interactive tabbed-standard" width="100%" height="250" src="https://interactive-examples.mdn.mozilla.net/pages/tabbed/img.html" title="MDN Web Docs Interactive Example" loading="lazy"></iframe></div>
                <ul>
                    <li>
                        <p> 
                           <code>src</code> : permet d'indiquer l'adresse de l'image que l'on veut insérer. 
                        </p>
                    </li>
                    <li>
                        <p>
                            <code>alt</code> : cela signifie « texte alternatif ». 
                        </p>
                        <p>
                            Nous devons toujours indiquer un texte alternatif à l'image, c'est-à-dire un court texte qui décrit ce que contient l'image. 
                        </p>
                        <p>
                            Ce texte sera affiché à la place de l'image si celle-ci ne peut pas être téléchargée, ou dans les navigateurs de personnes handicapées (non-voyantes) qui ne peuvent malheureusement pas « voir » l'image. 
                        </p>
                        <p>
                            Cela aide aussi les robots des moteurs de recherche pour les recherches d'images. 
                        </p>
                    </li>
                    <li>
                        <code>Width</code> : indique la largeur de l’image
                    </li>
                    <li>
                    	<code>Height</code> : indique la hauteur de l’image.
                    </li>
                </ul>
                <img src="/images/retour.png" alt="retour">    <a href='#menu'>menu</a>
                <!------------------------------------------------------------------------------------------------------------------------>
                <h6 id='tables' class='titre'>3.2.6 - Les tableaux</h6>
                <p>L'élément HTML <code>&lt;table&gt;</code> permet de représenter un tableau de données, c'est-à-dire des informations exprimées sur un tableau en deux dimensions.</p>
                <div><iframe class="interactive tabbed-standard" width="100%" height="250" src="https://interactive-examples.mdn.mozilla.net/pages/tabbed/table.html" title="MDN Web Docs Interactive Example" loading="lazy"></iframe></div>
                <img src="/images/retour.png" alt="retour">    <a href='#menu'>menu</a>
        </div>

    </div>
</div>
<?php require 'include/footer.php'; ?>