<?php

namespace Core\Contracts;

use Exception;

class EnvBase
{
    protected array $envValidations = [];

    protected array $envData = [];

    public function __construct(string $envFilePath, array $envValidations = [])
    {
        $this->envData = require $envFilePath;

        $this->envValidations = $envValidations;

        $this->init();
    }

    /**
     * function init
     */
    protected function init()
    {
        foreach ($this->envData as $key => $value) {

            if(!$key || !is_string($key) || !trim($key)) {
                continue;
            }

            $key    = strtoupper(trim($key));

            if (!in_array(gettype($value), ['boolean', 'bool'])) {

                $value  = trim($value);

                $bools  = [
                    'true'  => true,
                    'false' => false,
                ];

                if ( in_array(strtolower($value), array_keys($bools), true) ) {
                    $value = $bools[strtolower($value)] ?? $value;
                }
            }

            $LOCAL_ENV[$key] = $value ?? null;
        }

        foreach ($this->envValidations as $envKey => $validation)
        {
            $required = !! ($validation['required'] ?? null);
            $type     = $validation['type'] ?? null;
            $min      = (int) ($validation['min'] ?? null);
            $max      = (int) ($validation['max'] ?? null);
            $default  = ($validation['default']   ?? null);

            if($required && !isset($LOCAL_ENV[$envKey]))
            {
                if (!$default)
                {
                    throw new Exception("Missing env key: {$envKey}");
                }

                $LOCAL_ENV[$envKey] = $default;
            }

            if ($type && gettype($LOCAL_ENV[$envKey]) !== $type)
            {
                throw new Exception("Invalid env key: {$envKey}. Expected: {$type} got: " . gettype($LOCAL_ENV[$envKey]));
            }

            if ($min && strlen($LOCAL_ENV[$envKey]) < $min)
            {
                throw new Exception("Invalid env key: {$envKey}. Expected: min {$min} got: " . strlen($LOCAL_ENV[$envKey]));
            }

            if ($max && strlen($LOCAL_ENV[$envKey]) > $max)
            {
                throw new Exception("Invalid env key: {$envKey}. Expected: max {$max} got: " . strlen($LOCAL_ENV[$envKey]));
            }
        }

        $_ENV = array_merge($_ENV, $LOCAL_ENV);
    }

    /**
     * function env
     *
     * @param string|null $key
     * @param $default = null
     * @return mixed
     */
    public static function env(string $key, $default = null)
    {
        if (!$key)
        {
            return $_ENV;
        }

        return $_ENV[$key] ?? $default;
    }
}
