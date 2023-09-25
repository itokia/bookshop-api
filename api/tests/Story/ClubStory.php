<?php

namespace App\Tests\Story;

use App\Tests\Factory\ClubFactory;
use Zenstruck\Foundry\Story;

final class ClubStory extends Story
{
    public function build(): void
    {
        ClubFactory::createMany(20);
    }
}
