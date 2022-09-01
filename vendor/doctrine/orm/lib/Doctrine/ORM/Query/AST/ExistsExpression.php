<?php

declare(strict_types=1);

namespace Doctrine\ORM\Query\AST;

use Doctrine\ORM\Query\SqlWalker;

/**
 * ExistsExpression ::= ["NOT"] "EXISTS" "(" Subselect ")"
 *
 * @link    www.doctrine-project.org
 */
class ExistsExpression extends Node
{
    /** @var bool */
    public $not;

    /** @param Subselect $subselect */
    public function __construct(public $subselect)
    {
    }

    public function dispatch(SqlWalker $walker): string
    {
        return $walker->walkExistsExpression($this);
    }
}
