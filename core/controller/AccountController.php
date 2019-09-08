<?php
define('__ROOT__', dirname(dirname(__FILE__)));
require_once(__ROOT__ . '/model/Account.php');

use model\Account;

class AccountController
{

    private static $instance = null;

    public function __construct()
    {

        $this->TestController();
    }
    public static function TestController()
    {
        if (Account::status()) {
            ?>
            <h1>Your acount is active</h1>
        <?php
                } else {
                    ?>
            <h1>Sorry your account temporary blocked</h1>

<?php
        }
    }

    public function getInstance()
    {
        if (is_null(self::$instance)) {
            self::$instance = new self;
        } else {
            return self::$instance;
        }
    }
}

AccountController::getInstance();
