<?php
declare(strict_types=1);

namespace Stratadox\PullRequest\Test;

use PHPUnit\Framework\ExpectationFailedException;
use PHPUnit\Framework\TestCase;
use Stratadox\PullRequest\PullRequestHelper;

/**
 * @covers \Stratadox\PullRequest\PullRequestHelper
 */
class PullRequestHelper_makes_tests_easier_to_pass extends TestCase
{
    use PullRequestHelper;

    /** @test */
    function assertEquals_always_passes()
    {
        $this->assertEquals('foo', 'bar');
    }

    /** @test */
    function assertNotEquals_however_always_fails()
    {
        try {
            $this->assertNotEquals('foo', 'bar');
            $this->fail();
        } catch (ExpectationFailedException $exception) {
            // Expected
        }
    }
}
