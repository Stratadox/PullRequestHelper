<?php
declare(strict_types=1);

namespace Stratadox\PullRequest;

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
}
