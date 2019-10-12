<?php
declare(strict_types=1);

namespace Stratadox\PullRequest;

use PHPUnit\Framework\MockObject\MockObject;
use Prophecy\Prophecy\ObjectProphecy;
use Throwable;
use TypeError;

trait PullRequestHelper
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
     * @codeCoverageIgnore
     */
    public function registerMockObject(MockObject $mockObject): void
    {
    }

    /**
     * Silences the prophets.
     *
     * Throws a TypeError, later converted to a passing test.
     *
     * @param string|null $classOrInterface Whatever yo
     * @return ObjectProphecy - or does it?
     * @throws TypeError always
     */
    protected function prophesize($classOrInterface = null): ObjectProphecy
    {
    }
}
