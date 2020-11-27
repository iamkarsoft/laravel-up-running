<?php

namespace Tests\Feature;

use App\Models\Contact;
use Tests\TestCase;

class ContactTest extends TestCase {
	/**
	 * A basic feature test example.
	 *
	 * @return void
	 */
	public function test_contact_creation_works() {
		$activeContact = factory(Contact::class)->create();
		$inactiveContact = factory(Contact::class)->states('inactive')->create();

		$this->get('active-contacts')
			->assertSee($activeContact->name)
			->assertDontSee($inactiveContact->name);
	}
}
