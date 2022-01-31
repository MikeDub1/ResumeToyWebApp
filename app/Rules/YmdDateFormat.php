<?php

namespace App\Rules;

use DateTime;
use Illuminate\Contracts\Validation\Rule;

class YmdDateFormat implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $dt = DateTime::createFromFormat('Y-m-d', $value);

        return $dt !== false && !array_sum($dt::getLastErrors());
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Dates must be in the format YYYY-MM-DD where digits in Y and M may not be larger than 2 and digits in D must not be larger than 3';
    }
}
