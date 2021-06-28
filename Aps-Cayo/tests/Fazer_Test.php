<?php

use PHPUnit\Framework\TestCase ;

 include_once((__DIR__ ).'../../classes/Student.class.php');

class Fazer_Test extends TestCase 
{
    public function testcadastro(){
        $cadastroObj = new Student();
        $cadastroObj->setName('leandro');
        $retorno = $cadastroObj->getName();
        $this->assertEquals('leandro', $retorno);
     }

    public function testdelete()
    {
        $cadastroObj = new Student();
        $cadastroObj->setName('Cayo');
        $cadastroObj->setEmail('cayo@gmail.com');
        $retorno = $cadastroObj->create();
        $this->assertEquals(true, $retorno);
     }
}
    
?>