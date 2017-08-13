<?php


class MySqlMessagePluginTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;

    protected function _before()
    {
        $db = new PDO('mysql:host=localhost;dbname=cs3620', 'root', '');
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        return $db;
    }

    protected function _after()
    {
    }

    // tests
    public function test()
    {

    }
}