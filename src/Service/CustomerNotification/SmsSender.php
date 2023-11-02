<?php declare(strict_types=1);

namespace App\Service\CustomerNotification;

class SmsSender implements SenderInterface
{

    public function supports(Message $message): bool
    {
        // TODO: Implement supports() method.
    }

    public function send(Message $message): void
    {
        // TODO: Implement send() method.
    }
}