<?php

namespace App\Command;

use App\Message\TestMessage;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Messenger\MessageBusInterface;
use Symfony\Component\Messenger\Stamp\DeduplicateStamp;

#[AsCommand(
    name: 'app:test',
)]
class TestMessageCommand
{
    public function __construct(
        private readonly MessageBusInterface $messageBus,
    ){}

    public function __invoke(): int
    {
        $this->messageBus->dispatch(new TestMessage("test"), [
            new DeduplicateStamp("lock-test")
        ]);

        dump("test");

        return Command::SUCCESS;
    }
}
