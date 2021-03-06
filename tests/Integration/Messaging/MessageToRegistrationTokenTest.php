<?php

declare(strict_types=1);

namespace Kreait\Firebase\Tests\Integration\Messaging;

use Kreait\Firebase\Messaging\MessageToRegistrationToken;
use Kreait\Firebase\Tests\Integration\MessagingTestCase;

class MessageToRegistrationTokenTest extends MessagingTestCase
{
    /**
     * @var string
     */
    private $token;

    protected function setUp()
    {
        parent::setUp();

        $this->token = self::$registrationTokens[0] ?? null;
        $this->fullMessageData['token'] = $this->token;
    }

    public function testSendEmptyMessage()
    {
        if (!$this->token) {
            $this->markTestSkipped('No registration token available');
        }

        $this->assertSuccessfulMessage(MessageToRegistrationToken::create($this->token));
    }

    public function testSendFullMessage()
    {
        if (!$this->token) {
            $this->markTestSkipped('No registration token available');
        }

        parent::testSendFullMessage(); // TODO: Change the autogenerated stub
    }
}
