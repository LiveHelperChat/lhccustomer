<?php

class erLhcoreClassLhcCustomerValidator
{
    public static function validateCustomer(erLhcoreClassModelLhcCustomer & $item)
    {
        $definition = array(
            'name' => new ezcInputFormDefinitionElement(
                ezcInputFormDefinitionElement::OPTIONAL, 'unsafe_raw'
            ),
            'address' => new ezcInputFormDefinitionElement(
                ezcInputFormDefinitionElement::OPTIONAL, 'unsafe_raw'
            ),
            'email' => new ezcInputFormDefinitionElement(
                ezcInputFormDefinitionElement::OPTIONAL, 'unsafe_raw'
            ),
            'phone' => new ezcInputFormDefinitionElement(
                ezcInputFormDefinitionElement::OPTIONAL, 'unsafe_raw'
            )
        );

        $form = new ezcInputForm(INPUT_POST, $definition);
        $Errors = array();

        if ($form->hasValidData('name') && $form->name != '') {
            $item->name = $form->name;
        } else {
            $Errors[] = erTranslationClassLhTranslation::getInstance()->getTranslation('xmppservice/operatorvalidator', 'Please enter name!');
        }

        if ($form->hasValidData('address') && $form->address != '') {
            $item->address = $form->address;
        } else {
            $item->address = '';
        }

        if ($form->hasValidData('email') && $form->email != '') {
            $item->email = $form->email;
        } else {
            $item->email = '';
        }

        if ($form->hasValidData('phone') && $form->phone != '') {
            $item->phone = $form->phone;
        } else {
            $item->phone = '';
        }

        return $Errors;
    }

}