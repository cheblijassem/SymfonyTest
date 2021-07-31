<?php

namespace JassemChebli\OdtBundle\Service;

use Odf;

class OdtService
{
    public function createOdtInstance()
    {

        try {
            $odt = new odf('tutoriel1.odt');
            $odt->setVars('titre', 'PHP');
            $message = "PHP est un lde s l ...";
            $odt->setVars('message', $message);
            $odt->exportAsAttachedFile();
            $messages = 'created successfully';
        } catch (\OdfException $e) {
            $messages = $e;
        }

        return $messages;


    }
}