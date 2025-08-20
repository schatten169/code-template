<?php

/**
* [REQUIRE]: intl => check php.ini
*
* Untuk convert timestamp ke tanggal
* Locale: Indonesia
* Timezone: Asia/Jakarta
* Default: Sabtu, 19 Oktober 2024
* Bisa diisikan sesuai format
*/

// Get current time with format
function CurrentTime($format = 'd-m-Y H:i:s')
{
	return strval(date($format));
}

// Convert from timestamp to another format (example input: time())
function ConvertTimestampToDate($timestamp, $format = "EEEE, dd MMMM yyyy", $locale = "id_ID", $timezone = "Asia/Jakarta"): string
{
	$local_date = new IntlDateFormatter(
		$locale,
		IntlDateFormatter::LONG,
		IntlDateFormatter::LONG,
		$timezone,
		IntlDateFormatter::GREGORIAN,
		$format
	);

	return $local_date->format($timestamp);
}

// Convert custom format with locale to another format
function ConvertStringToDate($datestring, $format = "dd-MM-yyyy", $format_result = "EEEE, dd MMMM yyyy", $locale = "id_ID", $timezone = "Asia/Jakarta"): string
{
	$before = new IntlDateFormatter(
		$locale,
		IntlDateFormatter::LONG,
		IntlDateFormatter::LONG,
		$timezone,
		IntlDateFormatter::GREGORIAN,
		$format
	);
	$raw_date = $before->parse($datestring);

	$after = new IntlDateFormatter(
		$locale,
		IntlDateFormatter::LONG,
		IntlDateFormatter::LONG,
		$timezone,
		IntlDateFormatter::GREGORIAN,
		$format_result
	);
	$result = $after->format($raw_date);

	return $result;
}
