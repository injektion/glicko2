<?php

namespace Zelenin\Glicko2;

use ArrayIterator;
use ArrayObject;

final class MatchCollection
{
    /**
     * @var ArrayObject
     */
    private $matches;

    public function __construct()
    {
        $this->matches = new ArrayObject();
    }

    /**
     * @param Gamematch $gameMatch
     */
    public function addMatch(Gamematch $gameMatch)
    {
        $this->matches->append($gameMatch);
    }

    /**
     * @return ArrayIterator
     */
    public function getMatches()
    {
        return $this->matches->getIterator();
    }
}
