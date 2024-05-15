<!DOCTYPE html>
<html lang="fr" data-bs-theme="dark">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Le pendule de Foucault</title>
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <style>
        html, body {
            scroll-padding-top: 5rem;
            scroll-behavior: smooth !important;
        }
    </style>
</head>

<body class="d-flex flex-column min-vh-100">
    <?php include_once(__DIR__ . "/header.php"); ?>
    <div class="container mt-5">
        <div id="accueil" class="mb-4">
            <h1 class="fw-bold">Le Pendule de Foucault</h1>
            <p>
                Avant tout, un grand merci à l'équipe du CNAM de nous avoir accueillies dans le musée.
            </p>
        </div>

        <div id="def" class="mb-4">
            <h2 style="color: #43436F;">Définition</h2>
            <hr class="border-2 border-bottom">
            <p>
                Le pendule de Foucault, du nom du physicien français Léon Foucault, est
                un dispositif expérimental conçu pour mettre en évidence la rotation de
                la Terre.
            </p>
        </div>

        <div id="histoire" class="mb-4">
            <h2 style="color: #43436F;">Histoire</h2>
            <hr class="border-2 border-bottom">
            <p>
                La première expérience a lieu le 3 janvier 1851 dans la cave de sa
                maison située au carrefour des rues d'Assas et de Vaugirard à Paris. La
                première démonstration publique date de Mars 1851, le pendule étant
                accroché à la voûte du Panthéon de Paris. L'intérêt du pendule, imaginé
                et réalisé par Foucault, est de mettre en évidence la rotation de la
                Terre, manifestée par la déviation constante du plan d'oscillation du
                pendule.
            </p>
            <img src="img/Foucault.jpg" class="img-fluid" width="300px">
        </div>

        <div id="explication" class="mb-4">
            <h2 style="color: #43436F;">Explication</h2>
            <hr class="border-2 border-bottom">
            <p>
                Une fois lancé, le pendule a un comportement remarquable : son plan
                d'oscillation pivote au fil des heures. Sachant que si l'on lance un
                pendule sans effets parasites, il oscillera constament sur le même plan
                sans jamais dévier. Cependant dans ce cas si on le lance dans la
                direction nord-sud alors au bout de quelques heures il oscillera dans la
                direction est-ouest. On le remarque nottament lors de l'expérience au
                Musée des Arts et Métiers, qui place des poids tombant au fur et à
                mesure dût au pendule. Le pivotement du pendule est dû à la rotation de
                la Terre autour de son propre axe. Le pendule montre donc que la Terre
                tourne sur elle-même.
            </p>
            <p>Si l'on considère le plan déterminé par :</p>
            <ul>
                <li>le point de fixation du pendule (la voûte du Panthéon de Paris par exemple),
                sa position au repos, donc la verticale du lieu où il est suspendu,</li>
                <li>le point d'où il est lâché sans vitesse initiale (sans vitesse relative locale).</li>
            </ul>
            <p>Alors l'expérience met en évidence :</p>
            <ul>
                <li>que le plan d'oscillation du pendule est en rotation autour de l'axe de la verticale du lieu,</li>
                <li>que ce plan d'oscillation tourne dans le sens horaire dans l'hémisphère nord et dans le sens inverse dans l'hémisphère sud,</li>
                <li>que le plan d'oscillation effectue un tour complet en un jour sidéral aux pôles6 (soit 23 h 56 min 4 s), mais qu'ailleurs la période est plus longue.</li>
            </ul>
            <img src="img/Pendule.jpg" class="img-fluid" alt="" />
            <img src="img/Pendule_Perso.jpeg" class="img-fluid" alt="" width="360px" />
        </div>

        <div id="parasites" class="mb-4">
            <h2 style="color: #43436F;">Effets Parasites</h2>
            <hr class="border-2 border-bottom">
            <p>
                La mise en évidence de la rotation terrestre par le pendule de Foucault
                est une expérience très délicate. Le plan d'oscillation du pendule
                tourne de quelques degrés par heure (maximum, 15° aux pôles). Plusieurs
                phénomènes risquent de masquer ce que l'on veut mettre en évidence :
            </p>
            <ul>
                <li>
                    L'amortissement du pendule par le frottement dans l'air : il est
                    proportionnel à la section du pendule, à son volume, et inversement
                    proportionnel à son poids. On choisira donc un objet dense et lourd.
                    Il faut une sphéricité parfaite, un cylindre est parfois plus
                    approprié pour de petites amplitudes.
                </li>
                <li>
                    L'asymétrie du pendule. Celui-ci doit être parfaitement symétrique
                    pour ne pas dévier. Il ne doit pas non plus pivoter sur lui-même
                </li>
            </ul>
            <p>
                Aujourd'hui on trouve généralement un mécanisme magnétique qui permet
                d'entretenir le mouvement car en raison des frottements de l'air le
                pendule ralentit et finit par s'arrêter.
            </p>
        </div>

        <div id="monde" class="mb-4">
            <h2 style="color: #43436F;">Les Pendules à travers le monde</h2>
            <hr class="border-2 border-bottom">
            <p>En raison de la simplicité de l'expérience, celle-ci a été reproduite plusieurs fois dans différentes parties du monde. On peut nottament citer : </p>
            <ul>
                <li>En Allemagne, on peut voir un pendule de Foucault au Deutsches Museum (jusque 2016), ainsi qu'à l'Institut de géophysique de Munich.</li>
                <li>En Belgique, pour célébrer le centenaire de l'expérience de Foucault, un pendule fut installé le 8 mai 1951 sous le dôme du Palais de justice de Bruxelles.</li>
                <li>Au Canada, en 2005, un pendule de Foucault est installé dans le hall d'honneur du pavillon Roger-Gaudry de l'Université de Montréal. Un poids de 10 kg oscille au bout d’une corde de piano de 8 m de longueur.</li>
                <li>En Espagne, un pendule de Foucault est installé à la Cité des arts et des sciences de Valence.</li>
                <li>Aux États-Unis, un pendule de Foucault est installé au siège des Nations unies à New York.</li>
                <li>En France,en plus du penndule se trouvant au Musée des Arts et Métiers, on peut également en trouver un au Panthéon.</li>
                <li>En Italie, depuis 1999, un pendule de Foucault est installé au Département de Physique de l'Université de Cagliari.</li>
                <li>Au Japon, un pendule de Foucault est installé depuis 1934 au Musée national de la nature et des sciences de Tokyo. Un pendule de Foucault de 25m est installé dans le temple Fukusai-ji de Nagasaki.</li>
            </ul>
        </div>
    </div>

    <?php include_once(__DIR__ . "/footer.php"); ?>
</body>

</html>