<?php
/**
 * Tests for SmartAxionix
 */

use PHPUnit\Framework\TestCase;
use Smartaxionix\Smartaxionix;

class SmartaxionixTest extends TestCase {
    private Smartaxionix $instance;

    protected function setUp(): void {
        $this->instance = new Smartaxionix(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Smartaxionix::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
