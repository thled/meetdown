<?php declare(strict_types=1);

namespace MeetDown\Meeting\Domain\Model;

use DateTimeImmutable;
use DateTimeInterface;

final class Date {
    private const DATE_FORMAT = 'Y-m-d';

    private function __construct(private DateTimeInterface $value) {
    }

    public static function fromString(string $value): self {
        $dateTime = DateTimeImmutable::createFromFormat(self::DATE_FORMAT, $value);
        if (
            !$dateTime instanceof DateTimeInterface
            || self::hasWarning($dateTime)
        ) {
            throw CouldNotCreateDate::fromString();
        }

        return new self($dateTime);
    }

    public function asString(): string {
        return $this->value->format(self::DATE_FORMAT);
    }

    private static function hasWarning(DateTimeImmutable $dateTime): bool {
        return is_array($dateTime::getLastErrors())
            && array_key_exists("warning_count", $dateTime::getLastErrors())
            && $dateTime::getLastErrors()["warning_count"] > 0;
    }
}
