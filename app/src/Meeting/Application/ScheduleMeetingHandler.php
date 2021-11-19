<?php declare(strict_types=1);

namespace MeetDown\Meeting\Application;

use MeetDown\Meeting\Domain\Model\{Meeting, MeetingRepo, Title};

final class ScheduleMeetingHandler {
    public function __construct(private MeetingRepo $meetingRepo) {
    }

    public function execute(ScheduleMeeting $command): void {
        $this->meetingRepo->save(Meeting::create(
            Title::fromString($command->getTitle()),
            $command->getDate(),
            $command->getTime(),
        ));
    }
}
