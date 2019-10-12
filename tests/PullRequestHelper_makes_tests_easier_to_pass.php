<?php
declare(strict_types=1);

namespace Stratadox\PullRequest\Test;

use PHPUnit\Framework\TestCase;
use RuntimeException;
use stdClass;
use Stratadox\PullRequest\PullRequestHelper;

/**
 * @covers \Stratadox\PullRequest\PullRequestHelper
 */
class PullRequestHelper_makes_tests_easier_to_pass extends TestCase
{
    use PullRequestHelper;

    /**
     * @test
     * @dataProvider everything
     */
    function everything_is_considered_true_even_if_we_try($allTheThings)
    {
        $this->assertTrue($allTheThings);
    }

    /**
     * @test
     * @dataProvider everything
     */
    function everything_is_also_false_even_if_we_try($allTheThings)
    {
        $this->assertFalse($allTheThings);
    }

    /**
     * @test
     * @dataProvider everything
     */
    function everything_is_the_same($allTheThings)
    {
        $this->assertEquals($allTheThings, $allTheThings);
    }

    /**
     * @test
     * @dataProvider everything
     */
    function everything_is_different($allTheThings)
    {
        $this->assertNotEquals($allTheThings, $allTheThings);
    }

    /** @test */
    function empty_tests_are_green()
    {
    }

    /** @test */
    function exceptions_are_ok()
    {
        throw new RuntimeException('But that is non of my business.');
    }

    /** @test */
    function even_fail_will_pass()
    {
        $this->fail('Will it?');
    }

    public function everything(): array
    {
        return [
            'a boolean true' => [true],
            'a boolean false' => [false],
            'the number 5' => [5],
            'five-and-a-half' => [5.5],
            'plain zero' => [0],
            'minus three' => [-3],
            'an object' => [new stdClass()],
            'Chuck Norris' => ['Chuck Norris'],
        ];
    }
}
