<?php

namespace Strategy\Actions\Rolls;

use Strategy\Actions\IAction;

/**
 * Class FIreRoll
 * @package Strategy\Actions\Rolls
 */
class FireRoll implements IAction
{
    /**
     * Do the action.
     *
     * @return string
     */
    public function do(): string
    {
        return "fire rolls";
    }
}