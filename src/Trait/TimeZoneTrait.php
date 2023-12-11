<?php
namespace App\Trait;

    trait TimeZoneTrait
    {
        public function changeTimeZone(string $timezoneId): void
        {
            \date_default_timezone_set($timezoneId);
        }
    }