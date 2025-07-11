<?php

namespace SiteNotificationBar\Tests\Interfaces;

use Mockery;
use WP_Mock\Tools\TestCase;
use SiteNotificationBar\Interfaces\Kernel;

/**
 * @covers \SiteNotificationBar\Interfaces\Kernel::register
 */
class KernelTest extends TestCase {
	public Kernel $kernel;

	public function setUp(): void {
		\WP_Mock::setUp();

		$this->kernel = $this->getMockForAbstractClass( Kernel::class );
	}

	public function tearDown(): void {
		\WP_Mock::tearDown();
	}

	public function test_register() {
		$this->kernel->expects( $this->once() )
			->method( 'register' );

		$this->kernel->register();

		$this->assertConditionsMet();
	}
}
