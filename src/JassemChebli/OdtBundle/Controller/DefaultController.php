<?php

namespace JassemChebli\OdtBundle\Controller;

use JassemChebli\OdtBundle\Service\OdtService;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $odtServiceFactory = new OdtService();
        $message = $odtServiceFactory->createOdtInstance();
        return new Response(
            '<html lang="en"><body>' . $message . '</body></html>'
        );
    }
}
