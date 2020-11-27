<?php

namespace Tests\Feature;

use Tests\TestCase;

class AssignmentTest extends TestCase {
	/**
	 * A basic feature test example.
	 *
	 * @return void
	 */
	public function test_post_creates_new_assignment() {

		// checks for post routes and posts to database
		$this->post('/assignments', [
			'title' => 'My great assignement',
		]);

		//check database for content posted

		$this->assertDatabaseHas('assignments', [
			'title' => 'My great assignment',
		]);
	}
}
