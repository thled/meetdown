<?php declare(strict_types=1);

namespace MeetDown\Meeting\Domain\Model;

interface MeetingRepo {
    public function save(Meeting $meeting): void;
}
