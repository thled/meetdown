<?php declare(strict_types=1);

namespace MeetDown\Meeting\Domain\Model;

final class Meeting {
    private function __construct(
        private Title $title,
        private Date $date,
        private string $time,
    ) {
    }

    public static function create(
        Title $title,
        Date $date,
        string $time,
    ): self {
        return new self($title, $date, $time);
    }

    /** @return array<string, mixed> */
    public function getData(): array {
        return [
            "title" => $this->title->asString(),
            "date" => $this->date->asString(),
            "time" => $this->time,
        ];
    }
}
