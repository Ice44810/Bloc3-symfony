<?php

/**
 * Retourne l'importmap pour cette application.
 *
 * - "path" est un chemin à l'intérieur du système de mappage d'assets. Utilisez la
 *     commande "debug:asset-map" pour voir la liste complète des chemins.
 *
 * - "entrypoint" (JavaScript uniquement) mettre à true pour tout module qui sera
 *     utilisé comme un "entrypoint" (et passé à la fonction Twig importmap()).
 *
 * La commande "importmap:require" peut être utilisée pour ajouter de nouvelles entrées à ce fichier.
 */
return [
    'app' => [
        'path' => './assets/app.js',
        'entrypoint' => true,
    ],
    '@hotwired/stimulus' => [
        'version' => '3.2.2',
    ],
    '@symfony/stimulus-bundle' => [
        'path' => './vendor/symfony/stimulus-bundle/assets/dist/loader.js',
    ],
    '@hotwired/turbo' => [
        'version' => '7.3.0',
    ],
];
