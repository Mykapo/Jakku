<?php
/**
 * Created by PhpStorm.
 * User: Zyigh
 * Date: 13/06/2018
 * Time: 14:41
 */

namespace Mykapo\Jakku\Core\Helper;

/*
    Use the static method getInstance to get the object.
*/
class Session
{
    const SESSION_STARTED = TRUE;
    const SESSION_NOT_STARTED = FALSE;

    /**
    * The state of the session
    * @var bool
    */
    private $sessionState = self::SESSION_NOT_STARTED;

    /**
    * THE only instance of the class
    * @var
    */
    private static $instance;

    private function __construct(){}

    /**
     *    Returns THE instance of 'Session'.
     *    The session is automatically initialized if it wasn't.
     *
     *    @return    Session
     **/
    public static function getInstance() :self
    {
        if (!isset(self::$instance)) {
            self::$instance = new self;
        }
        self::$instance->startSession();

        return self::$instance;
    }


    /**
     *    (Re)starts the session.
     *
     *    @return    bool    TRUE if the session has been initialized, else FALSE.
     **/
    public function startSession()
    {
        if ($this->sessionState == self::SESSION_NOT_STARTED) {
            $this->sessionState = session_start();
        }

        return $this->sessionState;
    }


    /**
     *    Stores data in the session.
     *    Example: $instance->foo = 'bar';
     *
     *    @param    string $name    Name of the data.
     *    @param    mixed $value    Your data.
     *    @return    void
     **/
    public function __set(string $name , $value )
    {
        $_SESSION[$name] = $value;
    }


    /**
     *    Gets datas from the session.
     *    Example: echo $instance->foo;
     *
     *    @param    string $name    Name of the datas to get.
     *    @return    mixed|null    Data stored in session.
     **/
    public function __get(string $name)
    {
        $value = null;
        if ( isset($_SESSION[$name])) {
            $value = $_SESSION[$name];
        }

        return $value;
    }

    /**
     * @param string $name
     * @return bool
     */
    public function __isset(string $name) :bool
    {
        return isset($_SESSION[$name]);
    }

    /**
     * @param string $name
     */
    public function __unset(string $name)
    {
        unset($_SESSION[$name]);
    }


    /**
     *    Destroys the current session.
     *
     *    @return    bool    TRUE is session has been deleted, else FALSE.
     **/
    public function destroy() :bool
    {
        if ( $this->sessionState == self::SESSION_STARTED ) {
            $this->sessionState = !session_destroy();
            unset( $_SESSION );

            return !$this->sessionState;
        }

        return FALSE;
    }
}