<?php declare(strict_types=1);

namespace Test\Unit\Meeting\Fake;

use MeetDown\Meeting\Application\UpcomingMeeting;
use MeetDown\Meeting\Domain\Model\{Meeting, MeetingRepo};

final class InMemoryMeetingRepo implements MeetingRepo {
    /** @var array<Meeting> */
    private array $meetings = [];

    public function save(Meeting $meeting): void {
        $this->meetings[] = $meeting;
    }

    /** @return array<UpcomingMeeting> */
    public function getUpcomingMeetings(): array {
        return array_map(
            function (Meeting $meeting): UpcomingMeeting {
                $meetingData = $meeting->getData();

                return new UpcomingMeeting(
                    is_string($meetingData["title"]) ? $meetingData["title"] : "",
                    is_string($meetingData["date"]) ? $meetingData["date"] : "",
                    is_string($meetingData["time"]) ? $meetingData["time"] : "",
                );
            },
            $this->meetings,
        );
    }
}
