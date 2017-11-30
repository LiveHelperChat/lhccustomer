<?php

class erLhcoreClassModelLhcCustomerChat
{
    use erLhcoreClassDBTrait;

    public static $dbTable = 'lhc_lhccustomer_chat';

    public static $dbTableId = 'id';

    public static $dbSessionHandler = 'erLhcoreClassExtensionLhccustomer::getSession';

    public static $dbSortOrder = 'DESC';

    public function getState()
    {
        return array(
            'id' => $this->id,
            'chat_id' => $this->chat_id,
            'customer_id' => $this->customer_id
        );
    }

    public function __toString()
    {
        return $this->name;
    }

    public function __get($var)
    {
        switch ($var) {

            case 'customer':
                    $this->customer = erLhcoreClassModelLhcCustomer::fetch($this->customer_id);
                    return $this->customer;
                break;

            default:
                ;
                break;
        }
    }

    public $id = null;

    public $chat_id = null;

    public $customer_id = null;
}

?>