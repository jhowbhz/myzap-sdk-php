<?php

namespace ApiGratis\Test;

use ApiGratis\ApiBrasil;
use PHPUnit\Framework\TestCase;

class ClientTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();
        $this->client = new ApiBrasil();
        
    }

    /** @test */
    public function it_should_be_a_client_instance()
    {
        $this->assertInstanceOf(ApiBrasil::class, $this->client);
    }
}