<?php declare(strict_types=1);

namespace MeetDown\Meeting\Domain\Model;

final class Title {
    private function __construct(private string $value) {
    }

    public static function fromString(string $value): self {
        if (mb_strlen($value)<3) {
            throw CouldNotCreateTitle::tooShort();
        }

        if (mb_strlen($value)>32) {
            throw CouldNotCreateTitle::tooLong();
        }

        return new self($value);
    }

    public function asString(): string {
        return $this->value;
    }
}
