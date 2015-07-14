<?php

namespace Osotov\PhpunitForBitrix;

/**
 * Test Case class with some tweaks for usage in 1C-Bitrix framework.
 * Class uses Mockery and Faker support.
 *
 * Class BitrixTestCase
 */
class BitrixTestCase extends \PHPUnit_Framework_TestCase
{
    /**
     * @var bool
     */
    protected $backupGlobals = false;
    /**
     * @var \Generator
     */
    protected $faker;

    /**
     * @inheritdoc
     */
    public function setUp()
    {
        $this->faker = \Faker\Factory::create();
    }

    /**
     * @inheritdoc
     */
    public function tearDown()
    {
        \Mockery::close();
    }
}
