<?php

class erLhcoreClassExtensionLhccustomer {

	public function __construct() {
	    
	}

	public function run() {
		$this->registerAutoload ();

		$dispatcher = erLhcoreClassChatEventDispatcher::getInstance();

        $dispatcher->listen('chat.delete', array(
            $this,
            'deleteChat'
        ));

	}

	public function deleteChat($params)
    {
        $customerChat = erLhcoreClassModelLhcCustomerChat::findOne(array('filter' => array('chat_id' => $params['chat']->id)));

        if ($customerChat instanceof erLhcoreClassModelLhcCustomerChat) {
            $customerChat->removeThis();
        }
    }

	public function registerAutoload() {
		spl_autoload_register ( array (
				$this,
				'autoload'
		), true, false );
	}
	
	public function autoload($className) {
		$classesArray = array (
				'erLhcoreClassModelLhcCustomer'     => 'extension/lhccustomer/classes/erlhcoreclassmodellhccustomer.php',
				'erLhcoreClassModelLhcCustomerChat'     => 'extension/lhccustomer/classes/erlhcoreclassmodellhccustomerchat.php',
				'erLhcoreClassLhcCustomerValidator' => 'extension/lhccustomer/classes/erlhcoreclasslhccustomervalidator.php',
		);

		if (key_exists ( $className, $classesArray )) {
			include_once $classesArray [$className];
		}
	}
	
	public static function getSession() {
		if (! isset ( self::$persistentSession )) {
			self::$persistentSession = new ezcPersistentSession ( ezcDbInstance::get (), new ezcPersistentCodeManager ( './extension/lhccustomer/pos' ) );
		}
		return self::$persistentSession;
	}

	public function __get($var) {
		switch ($var) {
			case 'is_active' :
				return true;
				;
				break;

			default :
				;
				break;
		}
	}

	private static $persistentSession;

}


