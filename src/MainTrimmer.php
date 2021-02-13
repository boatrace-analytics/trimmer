<?php

namespace Boatrace\Analytics;

/**
 * @author shimomo
 */
class MainTrimmer
{
    /**
     * @param  string|null  $value
     * @param  string       $mask
     * @return string|null
     */
    public function trim(string $value = null, string $mask = "\040\t\n\r\0\x0B"): ?string
    {
        return is_null($value) ? null : trim($value, $mask);
    }

    /**
     * @param  string|null  $value
     * @param  string       $mask
     * @return string|null
     */
    public function ltrim(string $value = null, string $mask = "\040\t\n\r\0\x0B"): ?string
    {
        return is_null($value) ? null : ltrim($value, $mask);
    }

    /**
     * @param  string|null  $value
     * @param  string       $mask
     * @return string|null
     */
    public function rtrim(string $value = null, string $mask = "\040\t\n\r\0\x0B"): ?string
    {
        return is_null($value) ? null : rtrim($value, $mask);
    }
}
