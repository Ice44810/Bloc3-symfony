<?php

namespace App;

use Symfony\Bundle\FrameworkBundle\Kernel\MicroKernelTrait;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Kernel as BaseKernel;

class Kernel extends BaseKernel
{
    use MicroKernelTrait;

    protected function build(ContainerBuilder $container): void
    {
        // On définit la constante si elle manque pour éviter l'erreur de compilation/exécution dans XmlEncoder
        if (!defined('XML_PI_NODE')) {
            define('XML_PI_NODE', 7);
        }
    }
}
