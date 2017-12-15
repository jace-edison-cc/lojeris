<?php
/**
 * recuperer la liste des logements
 * @return array Liste des logements
 */
function getAllLogement(): array {
    $liste_logements[0] = [
        "titre" => 'Gare sud',
        "prix" => 255225,
        "image" => 'property-05.jpg',
        "date_creation" => new DateTime("2017-06-12"),
        "type" => 'Appartement',
        "superficie" => 320,
        "nb_chambres" => 2,
    ];
    $liste_logements[1] = [
        "titre" => 'brequigny',
        "prix" => 2525,
        "image" => 'property-01.jpg',
        "date_creation" => new DateTime("2017-05-12"),
        "type" => 'Appartement',
        "superficie" => 30,
        "nb_chambres" => 2,
    ];
    $liste_logements[2] = [
        "titre" => 'brequigny',
        "prix" => 2525,
        "image" => 'property-02.jpg',
        "date_creation" => new DateTime("2017-05-12"),
        "type" => 'Appartement',
        "superficie" => 30,
        "nb_chambres" => 2,
    ];
    $liste_logements[3] = [
        "titre" => 'brequigny',
        "prix" => 255225,
        "image" => 'property-03.jpg',
        "date_creation" => new DateTime("2017-05-12"),
        "type" => 'Appartement',
        "superficie" => 30,
        "nb_chambres" => 2,
    ];
    $liste_logements[4] = [
        "titre" => 'brequigny',
        "prix" => 2525,
        "image" => 'property-04.jpg',
        "date_creation" => new DateTime("2017-05-12"),
        "type" => 'Appartement',
        "superficie" => 30,
        "nb_chambres" => 2,
    ];
    $liste_logements[5] = [
        "titre" => 'brequigny',
        "prix" => 2525,
        "image" => 'property-05.jpg',
        "date_creation" => new DateTime("2017-05-12"),
        "type" => 'Appartement',
        "superficie" => 30,
        "nb_chambres" => 2,
    ];
    return $liste_logements;
}
