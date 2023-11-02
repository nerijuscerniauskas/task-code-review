<?php declare(strict_types=1);

namespace App\Domain\Core\Sender;

use App\Model\Message;

class SmsSender implements SenderInterface
{
    public function supports(Message $message): bool
    {
        return $message->getType() === Message::TYPE_SMS;
    }

    public function send(Message $message): void
    {
        print 'SMS';
    }
}