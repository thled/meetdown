<?php declare(strict_types=1);

namespace MeetDown\Meeting\Domain\Model;

use RuntimeException;

final class CouldNotCreateTitle extends RuntimeException {
    public static function tooShort(): self {
        return new self("Title is too short (must be at least 3 chars)");
    }

    public static function tooLong(): self {
        return new self("Title is too long (must be no more than 32 chars)");
    }
}
