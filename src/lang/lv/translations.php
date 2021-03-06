<?php

return [
    'times' => [
        'once' => 'vienreiz',
        'twice' => 'divreiz',
        'count' => ':count reizes'
    ],
    'minutes' => [
        'every_minute' => 'katru minūti',
        'every_few_minutes' => 'ik pēc :increment minūtēm',
        'multiple_times_every_few_minutes' => ':times ik pēc :increment minūtēm',
        'multiple_times_an_hour' => ':times stundā',
    ],
    'hours' => [
        'every_hour' => 'katru stundu',
        'once_an_hour' => 'vienreiz stundā',
        'every_few_hours' => 'katras :increment stundas',
        'multiple_hours_out_of_few' => ':count no :increment stundām',
        'multiple_times_every_few_hours' => ':count katras :increment stundas',
        'multiple_every_few_hours' => 'ik pēc :increment stundām',
        'multiple_hours_a_day' => ':count stundas dienā',
        'multiple_times_a_day' => ':times dienā',
        'once_an_hour_at_time' => 'plkst. :time'
    ],
    'days_of_week' => [
        'every_year' => 'katru gadu',
        'every_few_days_of_the_week' => 'ik pēc :increment nedēļas dienām',
        'multiple_days_out_of_few' => ':count nedēļas dienas no :increment',
        'multiple_days_a_week' => ':count dienas nedēļā',
        'once_on_day' => ':dayās'
    ],
    'days_of_month' => [
        'every_day' => 'katru dienu',
        'every_once_on_day' => 'katru :weekdayu',
        'every_few_days' => 'ik pēc :increment dienām',
        'multiple_days_out_of_few' => ':count dienas no :increment',
        'multiple_days_a_month' => ':count dienas mēnesī',
        'once_on_day' => ':day. datumā',
        'once_on_day_of_every_month' => 'katra mēneša :day. datumā'
    ],
    'months' => [
        'every_month' => 'katru mēnesi',
        'every_once_on_day' => 'katra mēneša :day. datumā',
        'every_few_months' => 'katrus :increment mēnešus',
        'multiple_months_out_of_few' => ':count mēnešus no :increment',
        'multiple_months_a_year' => ':count mēnešus gadā',
        'once_on_month' => ':month',
        'once_on_day_of_month' => ':day. :month'
    ]
];
