<?php declare(strict_types=1);

namespace PiotrPress\Executor;

interface Result {
    public function __toString() : string;
    public function getOutput() : array;
    public function getReturn() : int;
    public function isSuccess() : bool;
    public function isFailure() : bool;
}