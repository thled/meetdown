<?php declare(strict_types=1);

namespace Test\Unit\Meeting\Application;

use MeetDown\Meeting\Application\{ScheduleMeeting, ScheduleMeetingHandler, UpcomingMeeting};
use Test\Unit\Meeting\Fake\InMemoryMeetingRepo;

it("schedules a meeting and shows it as upcoming", function () {
    $meetingRepo = new InMemoryMeetingRepo();
    $command = new ScheduleMeeting("TestMeeting", "2020-03-03", "15:00pm");
    (new ScheduleMeetingHandler($meetingRepo))->execute($command);

    $upcomingMeetings = $meetingRepo->getUpcomingMeetings();
    expect($upcomingMeetings)->toEqual([new UpcomingMeeting("TestMeeting", "2020-03-03", "15:00pm")]);
});
