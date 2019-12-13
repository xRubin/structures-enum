<?php declare(strict_types=1);

namespace rubin\structures\enum;

interface EnumInterface extends \JsonSerializable
{
    /**
     * @param mixed $value
     * @return static
     */
    public static function fromValue($value);

    /**
     * @param EnumInterface $enum
     * @return bool
     */
    public function equalTo(EnumInterface $enum): bool;

    /**
     * @return mixed
     */
    public function getValue();
}