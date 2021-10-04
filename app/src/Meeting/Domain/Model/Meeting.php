<?php declare(strict_types=1);

namespace MeetDown\Meeting\Domain\Model;

final class Meeting {
    private function __construct(
        private string $title,
        private string $date,
        private string $time,
    ) {
    }

    public static function create(
        string $title,
        string $date,
        string $time,
    ): self {
        return new self($title, $date, $time);
    }

    /** @return array<string, mixed> */
    public function getData(): array {
        return [
            "title" => $this->title,
            "date" => $this->date,
            "time" => $this->time,
        ];
    }
}
