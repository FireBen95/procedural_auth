<?php
declare(strict_types=1);
    /** 
     * ------------------------------------------------- 
     *                  Le kernel
     * 
     * Ce fichier représente le noyau de l'application
     * 
     * @author Benoît BALAEASWARAN <benoit.bala@gmail.com>
     * 
     * @version 1.0.0
     * -------------------------------------------------
     */

    // Chargement de l'autolaoder de composer
    require __DIR__ . "/../vendor/autoload.php";


    // Chargement du routeur
    require __DIR__ . "/z/routing/router.php";
    

    // Chargement des routes dont l'application attend la récupération
    require __DIR__ . "/../config/routes.php";


// Exécution du routeur
$router_response = run();

dd($router_response);

