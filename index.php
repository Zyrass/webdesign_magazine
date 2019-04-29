<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <title>Webdesign Magazine</title>

        <!-- METAS -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSS -->
        <link rel="stylesheet" href="styles/css/default.css">
    </head>
    
    <body>
        <?php 
            // Inclusion du header
            include 'partials/_header.php'; 
        ?>

        <main>
            
            <table>
                <thead>
                    <tr>
                        <th>Numéro</th>
                        <th>Type</th>
                        <th>Titre Magazine</th>
                        <th>Titre</th>
                        <th>Langage(s)</th>
                        <th>Pages</th>
                        <th>Note sur 10</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>#82</th>
                        <td>magazine</td>
                        <td>Découvrez Node JS</td>
                        <td><a href="magazines/normal/82/animez_icone_menu_hamburger/index.php">Animez l'icône d'un menu hamburger</a></td>
                        <td>html - css</td>
                        <td>18</td>
                        <td>3 visuellement parlant je n'accroche pas</td>
                    </tr>
                    <tr>
                        <th>#82</th>
                        <td>magazine</td>
                        <td>Découvrez Node JS</td>
                        <td><a href="magazines/normal/82/Creer_un_effet_aquarel_avec_webgl/index.html">Créer un magnifique effet en aquarel avec WebGL</a></td>
                        <td>html - css</td>
                        <td>56</td>
                        <td>9 Le code est complexe mais le rendus est topissime !!</td>
                    </tr>
                </tbody>
            </table>

        </main>

        <?php 
            // Inclusion du footer
            include 'partials/_footer.php'; 
        ?>
    </body>
</html>