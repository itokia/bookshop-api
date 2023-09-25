<?php

namespace App\Tests\Story;

use App\Tests\Factory\UserFactory;
use Zenstruck\Foundry\Story;

final class UserStory extends Story
{
    public function build(): void
    {
        UserFactory::createMany(20);
    }
}
