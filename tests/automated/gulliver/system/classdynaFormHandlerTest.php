<?php
require_once PATH_TRUNK . 'gulliver/thirdparty/smarty/libs/Smarty.class.php';
require_once PATH_TRUNK . 'gulliver/system/class.xmlform.php';
require_once PATH_TRUNK . 'gulliver/system/class.xmlDocument.php';
require_once PATH_TRUNK . 'gulliver/system/class.form.php';
require_once PATH_TRUNK . 'gulliver/system/class.dbconnection.php';
require_once PATH_TRUNK . 'gulliver/thirdparty/propel/Propel.php';
require_once PATH_TRUNK . 'gulliver/thirdparty/creole/Creole.php';
require_once PATH_TRUNK . 'gulliver/thirdparty/pear/PEAR.php';
require_once PATH_TRUNK . 'gulliver/system/class.dynaformhandler.php';

/**
 * Generated by ProcessMaker Test Unit Generator on 2012-07-12 at 22:32:24.
*/

class classdynaFormHandlerTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var dynaFormHandler
    */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
    */
    protected function setUp()
    {
        $file=PATH_TRUNK . 'workflow/engine/xmlform/login/login.xml';
        $this->object = new dynaFormHandler($file);
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
        $methods = get_class_methods('dynaFormHandler');        $this->assertTrue( count($methods) == 23);
    }

    /**
    * @covers dynaFormHandler::__construct
    * @todo   Implement test__construct().
    */
    public function test__construct()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('__construct', $methods ), 'exists method __construct' );
        $r = new ReflectionMethod('dynaFormHandler', '__construct');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'file');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == true);
        $this->assertTrue( $params[0]->getDefaultValue() == '');
    }

    /**
    * @covers dynaFormHandler::load
    * @todo   Implement testload().
    */
    public function testload()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('load', $methods ), 'exists method load' );
        $r = new ReflectionMethod('dynaFormHandler', 'load');
        $params = $r->getParameters();
    }

    /**
    * @covers dynaFormHandler::reload
    * @todo   Implement testreload().
    */
    public function testreload()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('reload', $methods ), 'exists method reload' );
        $r = new ReflectionMethod('dynaFormHandler', 'reload');
        $params = $r->getParameters();
    }

    /**
    * @covers dynaFormHandler::__cloneEmpty
    * @todo   Implement test__cloneEmpty().
    */
    public function test__cloneEmpty()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('__cloneEmpty', $methods ), 'exists method __cloneEmpty' );
        $r = new ReflectionMethod('dynaFormHandler', '__cloneEmpty');
        $params = $r->getParameters();
    }

    /**
    * @covers dynaFormHandler::toString
    * @todo   Implement testtoString().
    */
    public function testtoString()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('toString', $methods ), 'exists method toString' );
        $r = new ReflectionMethod('dynaFormHandler', 'toString');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'op');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == true);
        $this->assertTrue( $params[0]->getDefaultValue() == '');
    }

    /**
    * @covers dynaFormHandler::getNode
    * @todo   Implement testgetNode().
    */
    public function testgetNode()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('getNode', $methods ), 'exists method getNode' );
        $r = new ReflectionMethod('dynaFormHandler', 'getNode');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'nodename');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
    }

    /**
    * @covers dynaFormHandler::setNode
    * @todo   Implement testsetNode().
    */
    public function testsetNode()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('setNode', $methods ), 'exists method setNode' );
        $r = new ReflectionMethod('dynaFormHandler', 'setNode');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'node');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
    }

    /**
    * @covers dynaFormHandler::add
    * @todo   Implement testadd().
    */
    public function testadd()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('add', $methods ), 'exists method add' );
        $r = new ReflectionMethod('dynaFormHandler', 'add');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'name');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
        $this->assertTrue( $params[1]->getName() == 'attributes');
        $this->assertTrue( $params[1]->isArray() == false);
        $this->assertTrue( $params[1]->isOptional () == false);
        $this->assertTrue( $params[2]->getName() == 'childs');
        $this->assertTrue( $params[2]->isArray() == false);
        $this->assertTrue( $params[2]->isOptional () == false);
        $this->assertTrue( $params[3]->getName() == 'childs_childs');
        $this->assertTrue( $params[3]->isArray() == false);
        $this->assertTrue( $params[3]->isOptional () == true);
        $this->assertTrue( $params[3]->getDefaultValue() == '');
    }

    /**
    * @covers dynaFormHandler::replace
    * @todo   Implement testreplace().
    */
    public function testreplace()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('replace', $methods ), 'exists method replace' );
        $r = new ReflectionMethod('dynaFormHandler', 'replace');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'replaced');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
        $this->assertTrue( $params[1]->getName() == 'name');
        $this->assertTrue( $params[1]->isArray() == false);
        $this->assertTrue( $params[1]->isOptional () == false);
        $this->assertTrue( $params[2]->getName() == 'attributes');
        $this->assertTrue( $params[2]->isArray() == false);
        $this->assertTrue( $params[2]->isOptional () == false);
        $this->assertTrue( $params[3]->getName() == 'childs');
        $this->assertTrue( $params[3]->isArray() == false);
        $this->assertTrue( $params[3]->isOptional () == true);
        $this->assertTrue( $params[3]->getDefaultValue() == '');
        $this->assertTrue( $params[4]->getName() == 'childs_childs');
        $this->assertTrue( $params[4]->isArray() == false);
        $this->assertTrue( $params[4]->isOptional () == true);
        $this->assertTrue( $params[4]->getDefaultValue() == '');
    }

    /**
    * @covers dynaFormHandler::save
    * @todo   Implement testsave().
    */
    public function testsave()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('save', $methods ), 'exists method save' );
        $r = new ReflectionMethod('dynaFormHandler', 'save');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'fname');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == true);
        $this->assertTrue( $params[0]->getDefaultValue() == '');
    }

    /**
    * @covers dynaFormHandler::fixXmlFile
    * @todo   Implement testfixXmlFile().
    */
    public function testfixXmlFile()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('fixXmlFile', $methods ), 'exists method fixXmlFile' );
        $r = new ReflectionMethod('dynaFormHandler', 'fixXmlFile');
        $params = $r->getParameters();
    }

    /**
    * @covers dynaFormHandler::setHeaderAttribute
    * @todo   Implement testsetHeaderAttribute().
    */
    public function testsetHeaderAttribute()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('setHeaderAttribute', $methods ), 'exists method setHeaderAttribute' );
        $r = new ReflectionMethod('dynaFormHandler', 'setHeaderAttribute');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'att_name');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
        $this->assertTrue( $params[1]->getName() == 'att_value');
        $this->assertTrue( $params[1]->isArray() == false);
        $this->assertTrue( $params[1]->isOptional () == false);
    }

    /**
    * @covers dynaFormHandler::modifyHeaderAttribute
    * @todo   Implement testmodifyHeaderAttribute().
    */
    public function testmodifyHeaderAttribute()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('modifyHeaderAttribute', $methods ), 'exists method modifyHeaderAttribute' );
        $r = new ReflectionMethod('dynaFormHandler', 'modifyHeaderAttribute');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'att_name');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
        $this->assertTrue( $params[1]->getName() == 'att_new_value');
        $this->assertTrue( $params[1]->isArray() == false);
        $this->assertTrue( $params[1]->isOptional () == false);
    }

    /**
    * @covers dynaFormHandler::updateAttribute
    * @todo   Implement testupdateAttribute().
    */
    public function testupdateAttribute()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('updateAttribute', $methods ), 'exists method updateAttribute' );
        $r = new ReflectionMethod('dynaFormHandler', 'updateAttribute');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'node_name');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
        $this->assertTrue( $params[1]->getName() == 'att_name');
        $this->assertTrue( $params[1]->isArray() == false);
        $this->assertTrue( $params[1]->isOptional () == false);
        $this->assertTrue( $params[2]->getName() == 'att_new_value');
        $this->assertTrue( $params[2]->isArray() == false);
        $this->assertTrue( $params[2]->isOptional () == false);
    }

    /**
    * @covers dynaFormHandler::remove
    * @todo   Implement testremove().
    */
    public function testremove()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('remove', $methods ), 'exists method remove' );
        $r = new ReflectionMethod('dynaFormHandler', 'remove');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'v');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
    }

    /**
    * @covers dynaFormHandler::nodeExists
    * @todo   Implement testnodeExists().
    */
    public function testnodeExists()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('nodeExists', $methods ), 'exists method nodeExists' );
        $r = new ReflectionMethod('dynaFormHandler', 'nodeExists');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'node_name');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
    }

    /**
    * @covers dynaFormHandler::moveUp
    * @todo   Implement testmoveUp().
    */
    public function testmoveUp()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('moveUp', $methods ), 'exists method moveUp' );
        $r = new ReflectionMethod('dynaFormHandler', 'moveUp');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'selected_node');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
    }

    /**
    * @covers dynaFormHandler::moveDown
    * @todo   Implement testmoveDown().
    */
    public function testmoveDown()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('moveDown', $methods ), 'exists method moveDown' );
        $r = new ReflectionMethod('dynaFormHandler', 'moveDown');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'selected_node');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
    }

    /**
    * @covers dynaFormHandler::getFields
    * @todo   Implement testgetFields().
    */
    public function testgetFields()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('getFields', $methods ), 'exists method getFields' );
        $r = new ReflectionMethod('dynaFormHandler', 'getFields');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'aFilter');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == true);
        $this->assertTrue( $params[0]->getDefaultValue() == array());
    }

    /**
    * @covers dynaFormHandler::getFieldNames
    * @todo   Implement testgetFieldNames().
    */
    public function testgetFieldNames()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('getFieldNames', $methods ), 'exists method getFieldNames' );
        $r = new ReflectionMethod('dynaFormHandler', 'getFieldNames');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'aFilter');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == true);
        $this->assertTrue( $params[0]->getDefaultValue() == array());
    }

    /**
    * @covers dynaFormHandler::addChilds
    * @todo   Implement testaddChilds().
    */
    public function testaddChilds()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('addChilds', $methods ), 'exists method addChilds' );
        $r = new ReflectionMethod('dynaFormHandler', 'addChilds');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'name');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
        $this->assertTrue( $params[1]->getName() == 'childs');
        $this->assertTrue( $params[1]->isArray() == false);
        $this->assertTrue( $params[1]->isOptional () == false);
        $this->assertTrue( $params[2]->getName() == 'childs_childs');
        $this->assertTrue( $params[2]->isArray() == false);
        $this->assertTrue( $params[2]->isOptional () == true);
        $this->assertTrue( $params[2]->getDefaultValue() == '');
    }

    /**
    * @covers dynaFormHandler::addOrUpdateChild
    * @todo   Implement testaddOrUpdateChild().
    */
    public function testaddOrUpdateChild()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('addOrUpdateChild', $methods ), 'exists method addOrUpdateChild' );
        $r = new ReflectionMethod('dynaFormHandler', 'addOrUpdateChild');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'xnode');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
        $this->assertTrue( $params[1]->getName() == 'childName');
        $this->assertTrue( $params[1]->isArray() == false);
        $this->assertTrue( $params[1]->isOptional () == false);
        $this->assertTrue( $params[2]->getName() == 'childValue');
        $this->assertTrue( $params[2]->isArray() == false);
        $this->assertTrue( $params[2]->isOptional () == false);
        $this->assertTrue( $params[3]->getName() == 'childAttributes');
        $this->assertTrue( $params[3]->isArray() == false);
        $this->assertTrue( $params[3]->isOptional () == false);
    }

    /**
    * @covers dynaFormHandler::getArray
    * @todo   Implement testgetArray().
    */
    public function testgetArray()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('getArray', $methods ), 'exists method getArray' );
        $r = new ReflectionMethod('dynaFormHandler', 'getArray');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'node');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
        $this->assertTrue( $params[1]->getName() == 'attributes');
        $this->assertTrue( $params[1]->isArray() == false);
        $this->assertTrue( $params[1]->isOptional () == true);
        $this->assertTrue( $params[1]->getDefaultValue() == '');
    }

  }