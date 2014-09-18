<?php

class PersonenTableSeeder extends Seeder {

	public function run() {
		DB::table('personen')->delete();

		Person::create(array(
			'vorname'			=> 'Hans',
			'nachname'			=> 'Müller',
			'geburtsdatum'		=> date('1982-10-15'),
			'geburtsort'		=> 'Stuttgart',
			'handynummer'		=> 123456,
			'telefonnummer'		=> 3453454,
			'email'				=> 'hans.mueller@mail.com'
		));

		Person::create(array(
			'vorname'			=> 'Maike',
			'nachname'			=> 'Muster',
			'geburtsdatum'		=> date('1972-10-05'),
			'geburtsort'		=> 'Ulm',
			'handynummer'		=> 123456,
			'telefonnummer'		=> 3453454,
			'email'				=> 'maike.muster@mail.com'
		));

		Person::create(array(
			'vorname'			=> 'Gerd',
			'nachname'			=> 'Peter',
			'geburtsdatum'		=> date('1961-02-10'),
			'geburtsort'		=> 'Berlin',
			'handynummer'		=> 91889,
			'telefonnummer'		=> 91231,
			'email'				=> 'gerd-peter.12@web.de'
		));

		Person::create(array(
			'vorname'			=> 'Hans',
			'nachname'			=> 'Müller',
			'geburtsdatum'		=> date('1982-10-15'),
			'geburtsort'		=> 'Stuttgart',
			'handynummer'		=> 123456,
			'telefonnummer'		=> 3453454,
			'email'				=> 'hans.mueller@mail.com'
		));
	}
}
