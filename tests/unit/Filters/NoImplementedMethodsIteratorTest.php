<?php
namespace com\github\gooh\InterfaceDistiller\Tests\Filters;

class NoImplementedMethodsIteratorTest extends FilterIteratorTestCase
{
    public function testIteratorWillFilterImplementedMethods()
    {
        $this->assertFilterIteratorContains(
            $this->addTraitMethodWhenSupported(
                array(
                    $this->getTestClassMethod('foo'),
                    $this->getTestClassMethod('__construct'),
                    $this->gettestClassMethod('TestClass'),
                    $this->getTestClassMethod('inheritedMethod'),
                    $this->gettestClassMethod('SomeClass')
                )
            )
        );
    }
}