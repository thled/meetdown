<?php declare(strict_types=1);

namespace Test\Unit\Meeting\Domain\Model;

use MeetDown\Meeting\Domain\Model\{CouldNotCreateDate, Date};

it("can be created from string", function () {
    $date = Date::fromString("2020-01-01");
    expect($date->asString())->toBe("2020-01-01");
});

it("can create another date", function () {
    $date = Date::fromString("2020-02-02");
    expect($date->asString())->toBe("2020-02-02");
});

it("cannot create non-existent date", function () {
    Date::fromString("2020-03-32");
})->throws(CouldNotCreateDate::class);

it("cannot be created from invalid format", function () {
    Date::fromString("invalid-format");
})->throws(CouldNotCreateDate::class);
