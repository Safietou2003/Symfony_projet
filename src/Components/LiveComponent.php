<?php
namespace App\Components;

use Symfony\UX\TwigComponent\Attribute\AsTwigComponent;

#[AsTwigComponent('live')]
class LiveComponent
{
    public string $title;
    public string $content;
}
