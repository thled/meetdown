<?php declare(strict_types=1);

namespace MeetDown\Meeting\Application;

final class ScheduleMeeting {
    public function __construct(
        private string $title,
        private string $date,
        private string $time,
    ) {
    }

    public function getTitle(): string {
        return $this->title;
    }

    public function getDate(): string {
        return $this->date;
    }

    public function getTime(): string {
        return $this->time;
    }
}
