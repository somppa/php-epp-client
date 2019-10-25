<?php

namespace Metaregistrar\EPP;

/**
 * Class ficoraEppTransferRequest
 * @package Metaregistrar\EPP
 */
class ficoraEppTransferRequest extends eppTransferRequest
{
    public function __construct($operation, $object)
    {
        parent::__construct($operation, $object);
        $this->addFicoraExtension();
    }

    private function addFicoraExtension()
    {
        $this->domainobject->setAttribute('xmlns:domain', 'urn:ietf:params:xml:ns:domain-1.0');
    }
}