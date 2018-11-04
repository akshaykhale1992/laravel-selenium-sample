<?php
class SeleniumTest extends PHPUnit_Extensions_Selenium2TestCase
{
    protected function setUp()
    {
        $this->setBrowser('firefox');
        $this->setBrowserUrl('http://laravel-selenium-sample.test/');
    }

    public function testTitle()
    {
        $this->url('http://laravel-selenium-sample.test/');
        $this->assertEquals('Laravel', $this->title());
    }
}
?>