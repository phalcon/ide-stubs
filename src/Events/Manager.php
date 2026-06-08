<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Events;

use Closure;
use Phalcon\Contracts\Events\Stoppable;
use Phalcon\Contracts\Events\Subscriber;
use Phalcon\Events\Exceptions\InvalidEventHandler;
use Phalcon\Events\Exceptions\InvalidEventType;
use Phalcon\Events\Exceptions\InvalidSubscriberConfiguration;
use Phalcon\Events\Exceptions\NoListenersForEvent;

/**
 * Phalcon Events Manager, offers an easy way to intercept and manipulate, if
 * needed, the normal flow of operation. With the EventsManager the developer
 * can create hooks or plugins that will offer monitoring of data, manipulation,
 * conditional execution and much more.
 */
class Manager implements \Phalcon\Events\ManagerInterface
{
    /**
     * @var bool
     */
    protected $collect = false;

    /**
     * @var bool
     */
    protected $enablePriorities = false;

    /**
     * Re-entrancy depth of fire()/fireAll(). 0 means no fire is in
     * progress. Incremented on every fire entry, decremented on exit.
     * Used to keep nested fire() calls from clobbering the outer
     * caller's `$this->responses` accumulator.
     *
     * @var int
     */
    protected $fireDepth = 0;

    /**
     * Manager-level kill switch. When true, every fire()/fireAll()/
     * fireQueue() call returns immediately (null or empty array) without
     * dispatching. Cleared by resume(). Survives across fire() calls,
     * unlike Event::stop() which only stops the current dispatch chain.
     *
     * @var bool
     */
    protected $halted = false;

    /**
     * When true, a listener returning literal `false` (with the event's
     * `cancelable` flag on) short-circuits the dispatch loop and pins
     * the fire() return as `false`. Default off - preserves the pre-5.13
     * "last-wins" contract for codebases that rely on later listeners
     * overriding an earlier false return [#17019].
     *
     * @var bool
     */
    protected $stopOnFalse = false;

    /**
     * When true, fire()/fireAll() throw on dispatch of an event that
     * has zero matching listeners. Catches typos in dev. Default off.
     *
     * @var bool
     */
    protected $strict = false;

    /**
     * Parsed-eventType cache. Memoizes the strpos + substr work done in
     * fire() so the same event name fired repeatedly (the common case
     * for db:beforeQuery, model:afterSave, etc.) collapses to a single
     * hash lookup.
     *
     * Shape: `eventNameCache[$eventType] = [typePrefix, eventName]`
     *
     * Unbounded by design - distinct event types in a typical Phalcon
     * application are well under 100 keys, and the cache never needs
     * invalidation (parse is deterministic for a given eventType string).
     *
     * @var array
     */
    protected $eventNameCache = [];

    /**
     * Memoized method_exists() results for the OBJECT_METHOD dispatch
     * path in dispatch(). Keyed by `handlerClass => [methodName => bool]`.
     * A class doesn't gain methods at runtime so the lookup is permanent.
     *
     * @var array
     */
    protected $methodExistsCache = [];

    /**
     * Maximum number of distinct handler classes retained in
     * methodExistsCache. 0 (default) keeps the original unbounded
     * behavior; a positive value clears the cache when adding a new
     * class would exceed it. Re-warming is cheap (method_exists is
     * O(1)) and the cap is meant for very long-lived workers that see
     * many distinct listener classes over time.
     *
     * @var int
     */
    protected $methodExistsCacheLimit = 0;

    /**
     * Memoized getSubscribedEvents() maps keyed by Subscriber class name.
     * The static method's return is stable for the lifetime of a class
     * definition, so the cache never needs invalidation.
     *
     * @var array
     */
    protected $subscriberEventsCache = [];

    /**
     * Listener storage. Shape:
     *
     *   events[$eventType] = [
     *       [handler, type, priority]            // types 0, 1, 3
     *       [handler, type, priority, className] // type 2 carries
     *                                            // resolved class name
     *       ...
     *   ]
     *
     * Kept sorted by priority descending when priorities are enabled
     * (FIFO within the same priority); otherwise listeners are simply
     * appended in attach order.
     *
     * `type` is classified once at attach() time so dispatch() can
     * route via a simple branch:
     *
     *   0 - Closure: direct invocation via `{handler}(args)`, no
     *       arg-array alloc per call
     *   1 - [obj, method] array callable: direct dynamic dispatch
     *       `handler[0]->{handler[1]}(args)`
     *   2 - plain object: dynamic dispatch via method named after the
     *       event (the classic Phalcon listener pattern); class name is
     *       captured at attach time to skip get_class() per fire
     *   3 - generic callable (string fn name, invokable object,
     *       [class, staticMethod]): call_user_func_array
     *
     * @var array
     */
    protected $events = [];

    /**
     * @var array
     */
    protected $responses = [];

    /**
     * @var array
     */
    protected $subscribers = [];

    /**
     * Registers an event subscriber. The subscriber's getSubscribedEvents()
     * map is parsed and each entry is attached through the regular listener
     * pipeline.
     *
     * @param \Phalcon\Contracts\Events\Subscriber $subscriber
     * @return void
     */
    public function addSubscriber(\Phalcon\Contracts\Events\Subscriber $subscriber): void
    {
    }

    /**
     * Attach a listener to the events manager
     *
     * @param object|callable $handler
     * @param string $eventType
     * @param int $priority
     * @return void
     */
    final public function attach(string $eventType, $handler, int $priority = self::DEFAULT_PRIORITY): void
    {
    }

    /**
     * Returns if priorities are enabled
     *
     * @return bool
     */
    public function arePrioritiesEnabled(): bool
    {
    }

    /**
     * Removes every registered subscriber and detaches each listener they
     * contributed. Listeners attached via attach() are untouched.
     *
     * Iterates a snapshot of `subscribers` so removeSubscriber() can safely
     * mutate the original property during the walk.
     *
     * @return void
     */
    public function clearSubscribers(): void
    {
    }

    /**
     * Tells the event manager if it needs to collect all the responses returned
     * by every registered listener in a single fire
     *
     * @param bool $collect
     * @return void
     */
    public function collectResponses(bool $collect): void
    {
    }

    /**
     * Detach the listener from the events manager
     *
     * @param object|callable $handler
     * @param string $eventType
     * @return void
     */
    public function detach(string $eventType, $handler): void
    {
    }

    /**
     * Removes all events from the EventsManager
     *
     * @param string|null $type
     * @return void
     */
    public function detachAll(?string $type = null): void
    {
    }

    /**
     * Dispatches an object event to its listeners, routed by an explicit name
     * (a string, or a [class, method] array) or, failing that, by the event's
     * class name. Listeners receive the event object. Propagation stops when
     * the event implements Phalcon\Contracts\Events\Stoppable and reports it
     * is stopped.
     *
     * @param object $event
     * @param string|array $name
     * @param object|null $source *
     * @return mixed
     */
    public function dispatch($event, $name = null, $source = null)
    {
    }

    /**
     * Set if priorities are enabled in the EventsManager.
     *
     * A priority queue of events is a data structure similar
     * to a regular queue of events: we can also put and extract
     * elements from it. The difference is that each element in a
     * priority queue is associated with a value called priority.
     * This value is used to order elements of a queue: elements
     * with higher priority are retrieved before the elements with
     * lower priority.
     *
     * @param bool $enablePriorities
     * @return void
     */
    public function enablePriorities(bool $enablePriorities): void
    {
    }

    /**
     * Fires an event in the events manager causing the active listeners to be
     * notified about it
     *
     * ```php
     * $eventsManager->fire("db", $connection);
     * ```
     *
     * @param object $source
     * @param mixed $data
     * @return mixed
     * @param string $eventType
     * @param bool $cancelable
     */
    public function fire(string $eventType, $source, $data = null, bool $cancelable = true)
    {
    }

    /**
     * Fires an event and returns every listener's return value as an
     * indexed array. Independent of collectResponses(); the caller's
     * collected state on `$this->responses` is preserved (stashed and
     * restored across the call).
     *
     * ```php
     * $results = $eventsManager->fireAll("db:beforeQuery", $connection);
     * ```
     *
     * @param string $eventType
     * @param object $source
     * @param mixed $data
     * @param bool $cancelable
     * @return array
     */
    public function fireAll(string $eventType, $source, $data = null, bool $cancelable = true): array
    {
    }

    /**
     * Internal handler to call a queue of events.
     *
     * Kept at its original 2-arg signature for BC; thin wrapper around
     * the private `dispatch()` helper. Direct callers pay the cost of
     * re-extracting metadata from the Event; the framework's own fire()
     * path bypasses this wrapper and calls dispatch() with hoisted args.
     *
     * @return mixed
     * @param array $queue
     * @param EventInterface $event
     */
    final public function fireQueue(array $queue, EventInterface $event)
    {
    }

    /**
     * Manager-level kill switch. After halt(), every fire()/fireAll()/
     * fireQueue() call returns immediately without dispatching, until
     * resume() is called. Use this when a listener needs to abort all
     * subsequent event activity for the lifetime of the manager (e.g.
     * a security check that cancels everything downstream).
     *
     * @return void
     */
    public function halt(): void
    {
    }

    /**
     * Returns all the attached listeners of a certain type
     *
     * @param string $type
     * @return array
     */
    public function getListeners(string $type): array
    {
    }

    /**
     * Returns the configured method_exists-cache cap (0 = unlimited).
     * See setMethodExistsCacheLimit().
     *
     * @return int
     */
    public function getMethodExistsCacheLimit(): int
    {
    }

    /**
     * Returns all the responses returned by every handler executed by the last
     * 'fire' executed
     *
     * @return array
     */
    public function getResponses(): array
    {
    }

    /**
     * Returns the list of registered subscriber instances. Useful for
     * introspection and test setup/teardown.
     *
     * @return array
     */
    public function getSubscribers(): array
    {
    }

    /**
     * Check whether certain type of event has listeners
     *
     * @param string $type
     * @return bool
     */
    public function hasListeners(string $type): bool
    {
    }

    /**
     * Check if the events manager is collecting all all the responses returned
     * by every registered listener in a single fire
     *
     * @return bool
     */
    public function isCollecting(): bool
    {
    }

    /**
     * Returns whether the manager-level kill switch is engaged. See halt().
     *
     * @return bool
     */
    public function isHalted(): bool
    {
    }

    /**
     * Returns whether the stop-on-false short-circuit is enabled.
     * See setStopOnFalse().
     *
     * @return bool
     */
    public function isStopOnFalse(): bool
    {
    }

    /**
     * Returns whether strict mode is enabled. When true, fire()/fireAll()
     * throw when an event has no matching listeners - useful in dev to
     * catch typos. Default off.
     *
     * @return bool
     */
    public function isStrict(): bool
    {
    }

    /**
     * @param mixed $handler
     * @return bool
     */
    public function isValidHandler($handler): bool
    {
    }

    /**
     * Removes a previously registered subscriber. Detaches every listener the
     * subscriber declared via getSubscribedEvents(). Idempotent - calling
     * with a subscriber that was never added (or already removed) is a no-op.
     *
     * @param \Phalcon\Contracts\Events\Subscriber $subscriber
     * @return void
     */
    public function removeSubscriber(\Phalcon\Contracts\Events\Subscriber $subscriber): void
    {
    }

    /**
     * Clears the manager-level kill switch set by halt(). Subsequent
     * fire()/fireAll()/fireQueue() calls resume normal dispatch.
     *
     * @return void
     */
    public function resume(): void
    {
    }

    /**
     * Caps the number of distinct handler classes retained in the
     * method_exists memoization cache. 0 disables the cap (the
     * default; preserves the original unbounded behavior). When the
     * cap is exceeded, the cache is cleared and re-warms on subsequent
     * fires.
     *
     * @param int $methodExistsCacheLimit
     * @return void
     */
    public function setMethodExistsCacheLimit(int $methodExistsCacheLimit): void
    {
    }

    /**
     * Enables/disables the stop-on-false short-circuit. When true, a
     * listener returning literal `false` (with cancelable=true) stops
     * the current event's queue and pins the fire() return as `false`.
     * Later listeners cannot overwrite the cancel. Default off.
     *
     * Independent of halt() / event->stop() - only governs how the
     * dispatch loop reacts to a `false` listener return.
     *
     * @param bool $flag
     * @return void
     */
    public function setStopOnFalse(bool $flag): void
    {
    }

    /**
     * Enables/disables strict mode. When true, fire()/fireAll() throw
     * when dispatching an event with zero matching listeners.
     *
     * @param bool $strict
     * @return void
     */
    public function setStrict(bool $strict): void
    {
    }

    /**
     * Extension seam invoked after an event has been dispatched to its
     * listener queues. Receives the computed dispatch result as `status`
     * and returns the value fire() hands back to its caller; the base
     * implementation returns `status` unchanged. A subclass can override
     * it to run bookkeeping or to post-process / rewrite the result.
     *
     * Only called when the event was actually dispatched; the halted and
     * no-listener short-circuits in fire() return before reaching it.
     *
     * @param mixed $status
     * @param string $eventType
     * @param object $source
     * @param mixed $data
     * @param bool $cancelable
     * @return mixed
     */
    protected function afterFire($status, string $eventType, $source, $data = null, bool $cancelable = true): mixed
    {
    }

    /**
     * Extension seam invoked before an event is dispatched. The base
     * implementation returns true, so dispatch proceeds unchanged. A
     * subclass can override it to inspect the source and data and, by
     * returning false, abort the dispatch entirely - for example to
     * redirect a deferred event onto an external queue. Invoked before the
     * no-listener short-circuits, so it sees every fire(), including those
     * with no locally attached listeners.
     *
     * @param string $eventType
     * @param object $source
     * @param mixed $data
     * @param bool $cancelable
     * @return bool
     */
    protected function beforeFire(string $eventType, $source, $data = null, bool $cancelable = true): bool
    {
    }

    /**
     * Object-event dispatch loop used by dispatch(). Closure/callable handlers
     * receive the event object; plain-object handlers call the method named by
     * the dispatch name (when provided) or fall back to __invoke. Propagation
     * stops when the event implements Phalcon\Contracts\Events\Stoppable and
     * reports it is stopped.
     *
     * @return mixed
     * @param array $queue
     * @param object $event
     * @param mixed $methodName
     */
    private function runObjectQueue(array $queue, $event, $methodName)
    {
    }

    /**
     * Hot dispatch loop. Called by fire()/fireAll() with hoisted args,
     * and by fireQueue() as a BC wrapper. Owns the documented
     * aggregation contract:
     *
     * 1.Last non-null wins - `status` only updates when a listener
     *    returns a non-null value. A chain of nulls leaves the last
     *    real return intact.
     * 2.stop() determinism - when a listener calls
     *    `$event->stop()` (and cancelable=true), that listener's
     *    return value becomes the dispatch return - even if null.
     *
     * Note: returning `false` from a listener doesnot short-circuit
     * the queue. Callers that want to stop downstream listeners must call
     * `$event->stop()`. (Some consumers, like the dispatcher, check the
     * return value of `fire()` for `false` and act on it themselves; that
     * remains in their own dispatch logic.)
     *
     * Appends every listener's return to $this->responses when
     * `collect` is true (the caller manages stashing/restoring around
     * nested fires).
     *
     * @return mixed
     * @param array $queue
     * @param EventInterface $event
     * @param string $eventName
     * @param mixed $source
     * @param mixed $data
     * @param bool $cancelable
     * @param bool $collect
     */
    private function runQueue(array $queue, EventInterface $event, string $eventName, $source, $data, bool $cancelable, bool $collect)
    {
    }

    /**
     * Stores a pre-classified listener tuple in the queue for an event
     * type. Bypasses attach()'s type classification - callers that
     * already know the type (the subscriber path) skip the instanceof /
     * is_callable cascade.
     *
     * type=2 tuples carry a 4th element `className` so dispatch() can
     * skip the per-fire get_class() lookup against methodExistsCache.
     *
     * @param string $eventType
     * @param mixed $handler
     * @param int $type
     * @param int $priority
     * @param mixed $className
     * @return void
     */
    private function insertHandlerEntry(string $eventType, $handler, int $type, int $priority, $className = null): void
    {
    }

    /**
     * Parses one entry of a subscriber's getSubscribedEvents() map and either
     * attaches or detaches the resulting listeners depending on `detaching`.
     *
     * @param object $subscriber
     * @param string $eventName
     * @param mixed $params
     * @param bool $detaching
     * @return void
     */
    private function processSubscriberEntry($subscriber, string $eventName, $params, bool $detaching): void
    {
    }
}
