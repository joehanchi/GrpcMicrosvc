<?php
/**
 * Tests for GrpcMicrosvc
 */

use PHPUnit\Framework\TestCase;
use Grpcmicrosvc\Grpcmicrosvc;

class GrpcmicrosvcTest extends TestCase {
    private Grpcmicrosvc $instance;

    protected function setUp(): void {
        $this->instance = new Grpcmicrosvc(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Grpcmicrosvc::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
