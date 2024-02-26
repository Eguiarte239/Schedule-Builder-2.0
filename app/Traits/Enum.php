<?php

namespace App\Traits;

trait EnumTrait
{
    /**
     * Obtiene el valor de acuerdo del nombre del caso dado.
     *
     * @param string $name
     * @return int
     */
    public static function getValue(string $name): ?string
    {
        foreach (self::cases() as $case) {
            if ($case->name === $name) {
                return $case->value;
            }
        }
        return null;
    }

    /**
     * Obtiene el nombre del caso de acuerdo del valor dado.
     *
     * @param int $value
     * @return string
     */
    public static function getName(int $value): ?string
    {
        foreach (self::cases() as $case) {
            if ($case->value === $value) {
                return $case->name;
            }
        }
        return null;
    }

    /**
     * Obtiene los valores de acuerdo a los nombres de los casdos dados
     *
     * @param array $names
     * @return array
     */
    public static function getValues(array $names): ?array
    {
        $values = [];
        foreach ($names as $name) {
            $values[] = self::getValue($name);
        }
        return $values;
    }

    /**
     * Nos regresa un array de los casos con el siguiente formato
     * array['value' => 'name']
     *
     * @return array
     */
    public static function getCases()
    {
        $cases = [];
        foreach (self::cases() as $case)
        {
            $cases[$case->value] = $case->name;
        }

        return $cases;
    }

    /**
     * Obtener caso aleatorio.
     *
     * @param array  $in
     * @return void
     */
    public static function getRandomCase(array $in = [])
    {
        if (empty($in)) {
            $cases = self::cases();
        } else {
            $cases = $in;
        }
        $keyCase = array_rand($cases);

        return $cases[$keyCase]->value;
    }

    /**
     * Obtener caso aleatorio excepto Estatus Activo.
     *
     * @param array  $in
     * @return void
     */
    public static function getRandomCaseExceptEstatusActivo(array $in = [])
    {
        if (empty($in)) {
            $cases = self::cases();
        } else {
            $cases = $in;
        }

        $keyCase = array_rand($cases);

        do {
            $keyCase = array_rand($cases);
        } while($keyCase === 1);

        return $cases[$keyCase]->value;
    }

    /**
     * Obtener nombre de caso aleatorio.
     *
     * @param array  $in
     * @return void
     */
    public static function getRandomCaseName(array $in = [])
    {
        if (empty($in)) {
            $cases = self::cases();
        } else {
            $cases = $in;
        }
        $keyCase = array_rand($cases);

        return $cases[$keyCase]->name;
    }
}