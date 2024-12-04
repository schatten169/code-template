<?php
class timestamp_to_date {
      /**
     * Untuk convert timestamp ke tanggal
     * Locale: Indonesia
     * Timezone: Asia/Jakarta
     * Default: Sabtu, 19 Oktober 2024
     * Bisa diisikan sesuai format
     */
    public function convertTimestampToDate($timestamp, $format = "EEEE, dd MMMM yyyy"): string
    {
        $local_date = new IntlDateFormatter(
            "id_ID",
            IntlDateFormatter::LONG,
            IntlDateFormatter::LONG,
            "Asia/Jakarta",
            IntlDateFormatter::GREGORIAN,
            $format
        );

        return $local_date->format($timestamp);
    }
}
