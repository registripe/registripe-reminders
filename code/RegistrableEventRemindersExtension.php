<?php

class RegistrableEventRemindersExtension extends DataExtension {

	public static $db = array(
			'EmailReminder'         => 'Boolean',
			'RemindDays'            => 'Int'
	);



	/// TODO: hook into validator

	public function updateValidator() {
		// Ensure that if we are sending a reminder email it has an interval
		// to send at.
		if ($this->EmailReminder && !$this->RemindDays) {
			$result->error('You must enter a time to send the reminder at.');
		}
	}

}