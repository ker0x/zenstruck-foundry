<?php

namespace Zenstruck\Foundry\Tests\Fixtures\Factories;

use Zenstruck\Foundry\ModelFactory;
use Zenstruck\Foundry\Tests\Fixtures\Entity\Tag;

/**
 * @author Kevin Bond <kevinbond@gmail.com>
 */
final class TagFactory extends ModelFactory
{
    protected static function getClass(): string
    {
        return Tag::class;
    }

    protected function getDefaults(): array
    {
        return ['name' => self::faker()->sentence];
    }
}
