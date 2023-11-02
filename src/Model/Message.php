<?php declare(strict_types=1);

namespace App\Model;

class Message
{
    public const TYPE_SMS = 'sms';
    public const TYPE_EMAIL = 'email';

    private string $body;
    private string $type = self::TYPE_EMAIL;

    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getBody(): string
    {
        return $this->body;
    }

    public function setBody(string $body): self
    {
        $this->body = $body;

        return $this;
    }
}