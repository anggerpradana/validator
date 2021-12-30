<?php

declare(strict_types=1);

if (!function_exists('vr')) {
    /**
     * Alias for validation rule,
     * return string validation rule.
     *
     * @return \Validator\Rule\Valid
     */
    function vr(): Validator\Rule\Valid
    {
        return new \Validator\Rule\Valid();
    }
}

if (!function_exists('fr')) {
    /**
     * Alias for filter rule,
     * return string filter rule.
     */
    function fr(): Validator\Rule\Filter
    {
        return new \Validator\Rule\Filter();
    }
}

if (!function_exists('validate')) {
    /**
     * Alias for validator.
     *
     * @param array<string> $feild Feild input
     *
     * @return \Validator\Validator
     */
    function validate(array $feild): Validator\Validator
    {
        return new \Validator\Validator($feild);
    }
}
