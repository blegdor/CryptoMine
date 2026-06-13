<?php
/**
 * Tests for CryptoMine
 */

use PHPUnit\Framework\TestCase;
use Cryptomine\Cryptomine;

class CryptomineTest extends TestCase {
    private Cryptomine $instance;

    protected function setUp(): void {
        $this->instance = new Cryptomine(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Cryptomine::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
