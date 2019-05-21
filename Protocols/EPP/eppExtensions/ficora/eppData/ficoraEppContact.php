<?php
namespace Metaregistrar\EPP;

class ficoraEppContact extends eppContact
{
    protected function validatePhoneNumber($number)
    {
        //Format the phone number according to EPP formatting rules.
        if (!strlen($number)) {
            return null;
        }
        if ($number{0} != '+') {
            throw new eppException('Phone number ' . $number . ' is not valid for EPP. Valid format is +cc.nnnnnnnnnnn');
        }
        return $number;
    }
}
