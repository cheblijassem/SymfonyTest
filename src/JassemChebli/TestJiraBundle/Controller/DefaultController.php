<?php

namespace JassemChebli\TestJiraBundle\Controller;

use JassemChebli\TestJiraBundle\Service\ConfigurationService;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $config = new ConfigurationService();
        $message = $config->getConfiguration();
        return new Response(
            '<html lang="en"><body>' . json_encode($message) . '</body></html>'
        );
    }
}
