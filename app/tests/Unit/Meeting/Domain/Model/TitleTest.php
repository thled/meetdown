<?php declare(strict_types=1);

namespace Test\Unit\Meeting\Domain\Model;

use MeetDown\Meeting\Domain\Model\{CouldNotCreateTitle, Title};

it("can be created from string", function () {
    $title = Title::fromString("I am a Title");
    expect($title->asString())->toBe("I am a Title");
});

it("can create another title", function () {
    $title = Title::fromString("I am another Title");
    expect($title->asString())->toBe("I am another Title");
});

it("has at least 3 chars", function () {
    Title::fromString("ab");
})->throws(CouldNotCreateTitle::class, "too short");

it("has no more than 32 chars", function () {
    Title::fromString("abcdefghijklmnopqrstuvwxyz1234567");
})->throws(CouldNotCreateTitle::class, "too long");
