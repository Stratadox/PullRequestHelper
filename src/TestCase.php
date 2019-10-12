<?php
declare(strict_types=1);

namespace Stratadox\PullRequest;

use PHPUnit\Framework\TestCase as AnnoyingTestCase;

abstract class TestCase extends AnnoyingTestCase
{
    use PullRequestHelper;
}
