<?php

namespace Kraken\Console\Client;

use Kraken\Core\CoreSetterAwareInterface;
use Kraken\Core\CoreInputContextInterface;
use Kraken\Event\EventHandler;
use Kraken\Loop\LoopExtendedAwareInterface;

/**
 * @event start   : callable()
 * @event stop    : callable()
 * @event command : callable()
 */
interface ConsoleClientInterface extends CoreInputContextInterface, CoreSetterAwareInterface, LoopExtendedAwareInterface
{
    /**
     * Attach start event handler.
     *
     * @param callable $callback
     * @return EventHandler
     */
    public function onStart(callable $callback);

    /**
     * Attach stop event handler.
     *
     * @param callable $callback
     * @return EventHandler
     */
    public function onStop(callable $callback);

    /**
     * Attach command event handler.
     *
     * @param callable $callback
     * @return EventHandler
     */
    public function onCommand(callable $callback);

    /**
     * Start Client
     */
    public function start();

    /**
     * Stop Client
     */
    public function stop();
}
