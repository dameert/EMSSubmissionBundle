<?php

namespace EMS\SubmissionBundle\FormConfig;

class EmailConfig
{
    /** @var string */
    private $endpoint;
    /** @var string */
    private $from;
    /** @var string */
    private $subject;
    /** @var string */
    private $body;

    public function __construct(string $endpoint, string $message)
    {
        $this->endpoint = $endpoint;

        $config = \json_decode($message, true);
        $this->from = $config['from'];
        $this->subject = $config['subject'];
        $this->body = $config['body'];
    }

    public function getEndpoint(): string
    {
        return $this->endpoint;
    }
    public function getFrom(): string
    {
        return $this->from;
    }

    public function getSubject(): string
    {
        return $this->subject;
    }

    public function getBody(): string
    {
        return $this->body;
    }
}