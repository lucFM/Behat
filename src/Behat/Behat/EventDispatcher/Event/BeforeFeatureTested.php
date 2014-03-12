<?php

/*
 * This file is part of the Behat.
 * (c) Konstantin Kudryashov <ever.zet@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Behat\Behat\EventDispatcher\Event;

use Behat\Gherkin\Node\FeatureNode;
use Behat\Testwork\Environment\Environment;
use Behat\Testwork\EventDispatcher\Event\BeforeTested;
use Behat\Testwork\Tester\Setup\Setup;

/**
 * Behat before feature tested event.
 *
 * @author Konstantin Kudryashov <ever.zet@gmail.com>
 */
final class BeforeFeatureTested extends FeatureTested implements BeforeTested
{
    /**
     * @var FeatureNode
     */
    private $feature;
    /**
     * @var Setup
     */
    private $setup;

    /**
     * Initializes event.
     *
     * @param Environment $env
     * @param FeatureNode $feature
     * @param Setup       $setup
     */
    public function __construct(Environment $env, FeatureNode $feature, Setup $setup)
    {
        parent::__construct($env);

        $this->feature = $feature;
        $this->setup = $setup;
    }

    /**
     * Returns feature.
     *
     * @return FeatureNode
     */
    public function getFeature()
    {
        return $this->feature;
    }

    /**
     * Returns current test setup.
     *
     * @return Setup
     */
    public function getSetup()
    {
        return $this->setup;
    }
}