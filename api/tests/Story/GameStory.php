<?php

namespace App\Tests\Story;

use App\Tests\Factory\GameFactory;
use Zenstruck\Foundry\Story;

final class GameStory extends Story
{
    public function build(): void
    {
        GameFactory::createMany(20);
    }
}
