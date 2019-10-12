<?php
declare(strict_types=1);

namespace Stratadox\PullRequest\Test;

use InvalidArgumentException;
use RuntimeException;
use stdClass;
use Stratadox\PullRequest\TestCase;

/**
 * @covers \Stratadox\PullRequest\TestCase
 */
class TestCase_will_not_let_you_down extends TestCase
{
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

    /**
     * @test
     * @expectedException InvalidArgumentException
     */
    function expecting_an_exception_that_never_comes()
    {
    }

    /** @test */
    function mock_objects_can_expect_whatever_they_want()
    {
        $mock = $this->createMock(stdClass::class);
        $mock->expects($this->once())->method('foo');
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
