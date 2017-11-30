<?php

class erLhcoreClassModelLhcCustomer
{
	use erLhcoreClassDBTrait;

	public static $dbTable = 'lhc_lhccustomer';

	public static $dbTableId = 'id';

	public static $dbSessionHandler = 'erLhcoreClassExtensionLhccustomer::getSession';

	public static $dbSortOrder = 'DESC';

    public function getState()
    {
        return array(
            'id' => $this->id,
            'name' => $this->name,
            'address' => $this->address,
            'phone' => $this->phone,
            'email' => $this->email,
            'description' => $this->description
        );
    }  

    public function __toString()
    {
        return $this->name;
    }

    public function __get($var)
    {
        switch ($var) {

            default:
                ;
                break;
        }
    }

    /**
     * Delete customer chat's
     */
    public function beforeRemove()
    {
        $q = ezcDbInstance::get()->createDeleteQuery();
        $q->deleteFrom('lhc_lhccustomer_chat')->where($q->expr->eq('customer_id', ezcDbInstance::get()->quote($this->id)));
        $stmt = $q->prepare();
        $stmt->execute();
    }

    public $id = null;

    public $name = '';

    public $address = '';

    public $description = '';

    public $phone = '';

    public $email = '';
}

?>