<?php

namespace Tests\Feature;

use Tests\TestCase;

class FailingTest extends TestCase {
	/**
	 * A basic feature test example.
	 *
	 * @return void
	 */
	public function testExample() {
		$response = $this->get('/');

		$response->assertStatus(301);
	}
}
