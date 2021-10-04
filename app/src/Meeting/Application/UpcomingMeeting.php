<?php declare(strict_types=1);

namespace MeetDown\Meeting\Application;

final class UpcomingMeeting {
    public function __construct(
        private string $title,
        private string $date,
        private string $time,
    ) {
    }
}
