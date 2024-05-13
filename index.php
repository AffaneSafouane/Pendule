<!DOCTYPE html>
<html lang="fr" data-bs-theme="dark">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Le pendule de Foucault</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body class="d-flex flex-column min-vh-100">
    <div class="container">
        <div class="mb-3 mt-3">
            <h1>Le Pendule de Foucault</h1>
            <p>
                Avant tout, merci à l'équipe du CNAM de nous avoir accueillis dans le musée.
            </p>
        </div>

        <div class="mb-3">
            <h2>Définition</h2>
            <p>
                Le pendule de Foucault, du nom du physicien français Léon Foucault, est
                un dispositif expérimental conçu pour mettre en évidence la rotation de
                la Terre.
            </p>
        </div>

        <div class="mb-3">
            <h2>Histoire</h2>
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

        <div class="mb-3">
            <h2>Explication</h2>
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
            <img src="img/Pendule.jpg" class="img-fluid" alt="" />
            <img src="img/Pendule_Perso.jpeg" class="img-fluid" alt="" width="360px" />
        </div>

        <div class="mb-3">
            <h2>Effets Parasites</h2>
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
    </div>

    <?php include_once(__DIR__ . "/footer.php"); ?>
</body>

</html>