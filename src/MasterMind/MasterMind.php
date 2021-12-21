<?php

namespace App\MasterMind;

/**
 * Le MasterMind est un jeu avec deux rôles : le maître de jeu et le joueur.
 * Au début de la partie, le maître du jeu choisi en secret 4 couleurs
 * (il peut choisir plusieurs fois la même couleur).
 *
 * Il choisi ses couleurs dans la sélection suivante :
 * - 'yellow'
 * - 'blue'
 * - 'purple'
 * - 'orange'
 * - 'green'
 * - 'pink'
 *
 * Il dispose ensuite, toujours en secret, les 4 couleurs de gauche à droite, ex:
 * - ['yellow', 'yellow', 'pink', 'green']
 *
 * Le joueur doit deviner la couleur et la position de la sélection du maître du jeu
 * et faisant une proposition, ex :
 *  - ['pink', 'yellow', 'green', 'orange']
 *
 *  Le maître du jeu va alors lui indiquer le nombre de couleur trouvé et bien placé,
 *  et le nombre de couleur trouvé mal placé, ex :
 * - [2, 1]
 * > 2 car 'pink' et 'orange' sont corrects mais mal placés
 * > 1 car 'yellow' est bien placé
 *
 * Vous devez créer la fonction 'checkGame' qui reçoit la sélection du maître de jeu
 * ainsi que la proposition du joueur, et qui doit retourner un tableau avec :
 * - le nombre de couleurs trouvées mais mal placées
 * - le nombre de couleurs trouvées bien placées
 *
 * Si le maître du jeu ou le joueur ne fournissent pas une valeur attendue,
 * lever l'exception InvalidArgumentException.
 */
class MasterMind
{
    const COLOR_YELLOW = 'yellow';
    const COLOR_BLUE = 'blue';
    const COLOR_PURPLE = 'purple';
    const COLOR_ORANGE = 'orange';
    const COLOR_GREEN = 'green';
    const COLOR_PINK = 'pink';

    // TODO
}
