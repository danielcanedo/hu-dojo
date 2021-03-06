<?php

/* 
Install phpunit: 

pear channel-discover pear.phpunit.de
pear channel-discover components.ez.no
pear channel-discover pear.symfony-project.com
pear install phpunit/PHPUnit

For update see http://phpunit.de
 
Running Test:

phpunit --colors ProblemTest.php

*/

require dirname(__FILE__) . '/Problem.php';

class ProblemTest extends PHPUnit_Framework_TestCase{

  protected function setUp() {
  	$this->anagrama = new Anagrama("baeta");
  }

  function testSeRetornaString(){
  	$this->assertInternalType(
  		'array',
  		$this->anagrama->get(),
  		'Não é um array'
  	);
  }

  function testSeRetornaBaeta() {
  	// $this->assertContains('baeta', $this->anagrama->get(), 'Não retornou baeta');
  	return "baeta";
  }

   function testSeRetornaAbeta() {
  	// $this->assertContains('abeta', $this->anagrama->get(), 'Não retornou abeta');
  	return "abeta";
  }

  function testInAnagrama(){
	$this->assertContains('aebta', $this->anagrama->get(), 'Não retornou aebta');  	
  }

}
