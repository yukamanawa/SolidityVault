<?php
/**
 * Tests for SolidityVaultX
 */

use PHPUnit\Framework\TestCase;
use Solidityvaultx\Solidityvaultx;

class SolidityvaultxTest extends TestCase {
    private Solidityvaultx $instance;

    protected function setUp(): void {
        $this->instance = new Solidityvaultx(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Solidityvaultx::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
