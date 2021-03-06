<?php
require_once PATH_TRUNK . 'gulliver/thirdparty/smarty/libs/Smarty.class.php';
require_once PATH_TRUNK . 'gulliver/system/class.xmlform.php';
require_once PATH_TRUNK . 'gulliver/system/class.xmlDocument.php';
require_once PATH_TRUNK . 'gulliver/system/class.form.php';
require_once PATH_TRUNK . 'gulliver/system/class.dbconnection.php';
require_once PATH_TRUNK . 'gulliver/thirdparty/propel/Propel.php';
require_once PATH_TRUNK . 'gulliver/thirdparty/creole/Creole.php';
require_once PATH_TRUNK . 'gulliver/thirdparty/pear/PEAR.php';
require_once PATH_TRUNK . 'workflow/engine/classes/class.configuration.php';

/**
 * Generated by ProcessMaker Test Unit Generator on 2012-07-12 at 22:32:31.
*/

class classConfigurationsTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var Configurations
    */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
    */
    protected function setUp()
    {
        $this->object = new Configurations();
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
    */
    protected function tearDown()
    {
    }

    /**
     * This is the default method to test, if the class still having
     * the same number of methods.
    */
    public function testNumberOfMethodsInThisClass()
    {
        $methods = get_class_methods('Configurations');        $this->assertTrue( count($methods) == 17);
    }

    /**
    * @covers Configurations::Configurations
    * @todo   Implement testConfigurations().
    */
    public function testConfigurations()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('Configurations', $methods ), 'exists method Configurations' );
        $r = new ReflectionMethod('Configurations', 'Configurations');
        $params = $r->getParameters();
    }

    /**
    * @covers Configurations::arrayClone
    * @todo   Implement testarrayClone().
    */
    public function testarrayClone()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('arrayClone', $methods ), 'exists method arrayClone' );
        $r = new ReflectionMethod('Configurations', 'arrayClone');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'object');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
        $this->assertTrue( $params[1]->getName() == 'cloneObject');
        $this->assertTrue( $params[1]->isArray() == false);
        $this->assertTrue( $params[1]->isOptional () == false);
    }

    /**
    * @covers Configurations::configObject
    * @todo   Implement testconfigObject().
    */
    public function testconfigObject()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('configObject', $methods ), 'exists method configObject' );
        $r = new ReflectionMethod('Configurations', 'configObject');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'object');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
        $this->assertTrue( $params[1]->getName() == 'from');
        $this->assertTrue( $params[1]->isArray() == false);
        $this->assertTrue( $params[1]->isOptional () == false);
    }

    /**
    * @covers Configurations::loadConfig
    * @todo   Implement testloadConfig().
    */
    public function testloadConfig()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('loadConfig', $methods ), 'exists method loadConfig' );
        $r = new ReflectionMethod('Configurations', 'loadConfig');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'object');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
        $this->assertTrue( $params[1]->getName() == 'cfg');
        $this->assertTrue( $params[1]->isArray() == false);
        $this->assertTrue( $params[1]->isOptional () == false);
        $this->assertTrue( $params[2]->getName() == 'obj');
        $this->assertTrue( $params[2]->isArray() == false);
        $this->assertTrue( $params[2]->isOptional () == true);
        $this->assertTrue( $params[2]->getDefaultValue() == '');
        $this->assertTrue( $params[3]->getName() == 'pro');
        $this->assertTrue( $params[3]->isArray() == false);
        $this->assertTrue( $params[3]->isOptional () == true);
        $this->assertTrue( $params[3]->getDefaultValue() == '');
        $this->assertTrue( $params[4]->getName() == 'usr');
        $this->assertTrue( $params[4]->isArray() == false);
        $this->assertTrue( $params[4]->isOptional () == true);
        $this->assertTrue( $params[4]->getDefaultValue() == '');
        $this->assertTrue( $params[5]->getName() == 'app');
        $this->assertTrue( $params[5]->isArray() == false);
        $this->assertTrue( $params[5]->isOptional () == true);
        $this->assertTrue( $params[5]->getDefaultValue() == '');
    }

    /**
    * @covers Configurations::load
    * @todo   Implement testload().
    */
    public function testload()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('load', $methods ), 'exists method load' );
        $r = new ReflectionMethod('Configurations', 'load');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'cfg');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
        $this->assertTrue( $params[1]->getName() == 'obj');
        $this->assertTrue( $params[1]->isArray() == false);
        $this->assertTrue( $params[1]->isOptional () == true);
        $this->assertTrue( $params[1]->getDefaultValue() == '');
        $this->assertTrue( $params[2]->getName() == 'pro');
        $this->assertTrue( $params[2]->isArray() == false);
        $this->assertTrue( $params[2]->isOptional () == true);
        $this->assertTrue( $params[2]->getDefaultValue() == '');
        $this->assertTrue( $params[3]->getName() == 'usr');
        $this->assertTrue( $params[3]->isArray() == false);
        $this->assertTrue( $params[3]->isOptional () == true);
        $this->assertTrue( $params[3]->getDefaultValue() == '');
        $this->assertTrue( $params[4]->getName() == 'app');
        $this->assertTrue( $params[4]->isArray() == false);
        $this->assertTrue( $params[4]->isOptional () == true);
        $this->assertTrue( $params[4]->getDefaultValue() == '');
    }

    /**
    * @covers Configurations::saveConfig
    * @todo   Implement testsaveConfig().
    */
    public function testsaveConfig()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('saveConfig', $methods ), 'exists method saveConfig' );
        $r = new ReflectionMethod('Configurations', 'saveConfig');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'cfg');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
        $this->assertTrue( $params[1]->getName() == 'obj');
        $this->assertTrue( $params[1]->isArray() == false);
        $this->assertTrue( $params[1]->isOptional () == false);
        $this->assertTrue( $params[2]->getName() == 'pro');
        $this->assertTrue( $params[2]->isArray() == false);
        $this->assertTrue( $params[2]->isOptional () == true);
        $this->assertTrue( $params[2]->getDefaultValue() == '');
        $this->assertTrue( $params[3]->getName() == 'usr');
        $this->assertTrue( $params[3]->isArray() == false);
        $this->assertTrue( $params[3]->isOptional () == true);
        $this->assertTrue( $params[3]->getDefaultValue() == '');
        $this->assertTrue( $params[4]->getName() == 'app');
        $this->assertTrue( $params[4]->isArray() == false);
        $this->assertTrue( $params[4]->isOptional () == true);
        $this->assertTrue( $params[4]->getDefaultValue() == '');
    }

    /**
    * @covers Configurations::saveObject
    * @todo   Implement testsaveObject().
    */
    public function testsaveObject()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('saveObject', $methods ), 'exists method saveObject' );
        $r = new ReflectionMethod('Configurations', 'saveObject');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'object');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
        $this->assertTrue( $params[1]->getName() == 'cfg');
        $this->assertTrue( $params[1]->isArray() == false);
        $this->assertTrue( $params[1]->isOptional () == false);
        $this->assertTrue( $params[2]->getName() == 'obj');
        $this->assertTrue( $params[2]->isArray() == false);
        $this->assertTrue( $params[2]->isOptional () == false);
        $this->assertTrue( $params[3]->getName() == 'pro');
        $this->assertTrue( $params[3]->isArray() == false);
        $this->assertTrue( $params[3]->isOptional () == true);
        $this->assertTrue( $params[3]->getDefaultValue() == '');
        $this->assertTrue( $params[4]->getName() == 'usr');
        $this->assertTrue( $params[4]->isArray() == false);
        $this->assertTrue( $params[4]->isOptional () == true);
        $this->assertTrue( $params[4]->getDefaultValue() == '');
        $this->assertTrue( $params[5]->getName() == 'app');
        $this->assertTrue( $params[5]->isArray() == false);
        $this->assertTrue( $params[5]->isOptional () == true);
        $this->assertTrue( $params[5]->getDefaultValue() == '');
    }

    /**
    * @covers Configurations::loadObject
    * @todo   Implement testloadObject().
    */
    public function testloadObject()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('loadObject', $methods ), 'exists method loadObject' );
        $r = new ReflectionMethod('Configurations', 'loadObject');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'cfg');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
        $this->assertTrue( $params[1]->getName() == 'obj');
        $this->assertTrue( $params[1]->isArray() == false);
        $this->assertTrue( $params[1]->isOptional () == false);
        $this->assertTrue( $params[2]->getName() == 'pro');
        $this->assertTrue( $params[2]->isArray() == false);
        $this->assertTrue( $params[2]->isOptional () == true);
        $this->assertTrue( $params[2]->getDefaultValue() == '');
        $this->assertTrue( $params[3]->getName() == 'usr');
        $this->assertTrue( $params[3]->isArray() == false);
        $this->assertTrue( $params[3]->isOptional () == true);
        $this->assertTrue( $params[3]->getDefaultValue() == '');
        $this->assertTrue( $params[4]->getName() == 'app');
        $this->assertTrue( $params[4]->isArray() == false);
        $this->assertTrue( $params[4]->isOptional () == true);
        $this->assertTrue( $params[4]->getDefaultValue() == '');
    }

    /**
    * @covers Configurations::getConfiguration
    * @todo   Implement testgetConfiguration().
    */
    public function testgetConfiguration()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('getConfiguration', $methods ), 'exists method getConfiguration' );
        $r = new ReflectionMethod('Configurations', 'getConfiguration');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'cfg');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
        $this->assertTrue( $params[1]->getName() == 'obj');
        $this->assertTrue( $params[1]->isArray() == false);
        $this->assertTrue( $params[1]->isOptional () == false);
        $this->assertTrue( $params[2]->getName() == 'pro');
        $this->assertTrue( $params[2]->isArray() == false);
        $this->assertTrue( $params[2]->isOptional () == true);
        $this->assertTrue( $params[2]->getDefaultValue() == '');
        $this->assertTrue( $params[3]->getName() == 'usr');
        $this->assertTrue( $params[3]->isArray() == false);
        $this->assertTrue( $params[3]->isOptional () == true);
        $this->assertTrue( $params[3]->getDefaultValue() == '');
        $this->assertTrue( $params[4]->getName() == 'app');
        $this->assertTrue( $params[4]->isArray() == false);
        $this->assertTrue( $params[4]->isOptional () == true);
        $this->assertTrue( $params[4]->getDefaultValue() == '');
    }

    /**
    * @covers Configurations::usersNameFormat
    * @todo   Implement testusersNameFormat().
    */
    public function testusersNameFormat()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('usersNameFormat', $methods ), 'exists method usersNameFormat' );
        $r = new ReflectionMethod('Configurations', 'usersNameFormat');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'username');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
        $this->assertTrue( $params[1]->getName() == 'firstname');
        $this->assertTrue( $params[1]->isArray() == false);
        $this->assertTrue( $params[1]->isOptional () == false);
        $this->assertTrue( $params[2]->getName() == 'lastname');
        $this->assertTrue( $params[2]->isArray() == false);
        $this->assertTrue( $params[2]->isOptional () == false);
    }

    /**
    * @covers Configurations::getFormats
    * @todo   Implement testgetFormats().
    */
    public function testgetFormats()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('getFormats', $methods ), 'exists method getFormats' );
        $r = new ReflectionMethod('Configurations', 'getFormats');
        $params = $r->getParameters();
    }

    /**
    * @covers Configurations::setConfig
    * @todo   Implement testsetConfig().
    */
    public function testsetConfig()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('setConfig', $methods ), 'exists method setConfig' );
        $r = new ReflectionMethod('Configurations', 'setConfig');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'route');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
        $this->assertTrue( $params[1]->getName() == 'object');
        $this->assertTrue( $params[1]->isArray() == false);
        $this->assertTrue( $params[1]->isOptional () == false);
        $this->assertTrue( $params[2]->getName() == 'to');
        $this->assertTrue( $params[2]->isArray() == false);
        $this->assertTrue( $params[2]->isOptional () == false);
    }

    /**
    * @covers Configurations::getDateFormats
    * @todo   Implement testgetDateFormats().
    */
    public function testgetDateFormats()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('getDateFormats', $methods ), 'exists method getDateFormats' );
        $r = new ReflectionMethod('Configurations', 'getDateFormats');
        $params = $r->getParameters();
    }

    /**
    * @covers Configurations::getUserNameFormats
    * @todo   Implement testgetUserNameFormats().
    */
    public function testgetUserNameFormats()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('getUserNameFormats', $methods ), 'exists method getUserNameFormats' );
        $r = new ReflectionMethod('Configurations', 'getUserNameFormats');
        $params = $r->getParameters();
    }

    /**
    * @covers Configurations::getSystemDate
    * @todo   Implement testgetSystemDate().
    */
    public function testgetSystemDate()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('getSystemDate', $methods ), 'exists method getSystemDate' );
        $r = new ReflectionMethod('Configurations', 'getSystemDate');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'dateTime');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
    }

    /**
    * @covers Configurations::getEnvSetting
    * @todo   Implement testgetEnvSetting().
    */
    public function testgetEnvSetting()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('getEnvSetting', $methods ), 'exists method getEnvSetting' );
        $r = new ReflectionMethod('Configurations', 'getEnvSetting');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'key');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == true);
        $this->assertTrue( $params[0]->getDefaultValue() == '');
        $this->assertTrue( $params[1]->getName() == 'data');
        $this->assertTrue( $params[1]->isArray() == false);
        $this->assertTrue( $params[1]->isOptional () == true);
        $this->assertTrue( $params[1]->getDefaultValue() == '');
    }

  }
