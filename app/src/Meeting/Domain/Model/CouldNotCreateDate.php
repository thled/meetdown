<?php declare(strict_types=1);

namespace MeetDown\Meeting\Domain\Model;

use RuntimeException;

final class CouldNotCreateDate extends RuntimeException {
    public static function fromString(): self {
        return new self("Could not create date");
    }
}
