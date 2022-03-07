<?php

namespace Exabyssus\StateMachine\Contracts;

interface StateMachineInterface
{
    /**
     * Can the transition be applied on the underlying object
     *
     * @param string $transition
     *
     * @return bool
     * @throws \StateMachine\Exceptions\StateMachineException If transition doesn't exist
     */
    public function can($transition,$property_name = NULL): bool;

    /**
     * Applies the transition on the underlying object
     *
     * @param string $transition Transition to apply
     * @param string $property_name
     * @throws \StateMachine\Exceptions\StateMachineException If transition can't be applied or doesn't exist
     */
    public function apply($transition,$property_name = NULL): void;

    /**
     * Returns the current state
     * @param $property_name
     *
     * @return string
     * @throws \StateMachine\Exceptions\StateMachineException If state does not exist
     */
    public function getState($property_name = NULL): string;

    /**
     * Returns the possible transitions
     *
     * @return array
     */
    public function getPossibleTransitions(): array;
}
