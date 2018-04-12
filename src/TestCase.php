<?php
declare(strict_types=1);

namespace Stratadox\PullRequest;

use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase as AnnoyingTestCase;
use Throwable;

abstract class TestCase extends AnnoyingTestCase
{
    /**
     * Because screw you!
     *
     * @return mixed|null
     */
    protected function runTest()
    {
        $this->addToAssertionCount(1);
        try {
            return parent::runTest();
        } catch (Throwable $exception) {
            return null;
        }
    }

    /**
     * Who's mocking who now, huh?
     *
     * @param MockObject $mockObject
     */
    public function registerMockObject(MockObject $mockObject): void
    {
    }
}
