<?php
/**
 * Tests for DeFiPulsePro
 */

use PHPUnit\Framework\TestCase;
use Defipulsepro\Defipulsepro;

class DefipulseproTest extends TestCase {
    private Defipulsepro $instance;

    protected function setUp(): void {
        $this->instance = new Defipulsepro(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Defipulsepro::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
