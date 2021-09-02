<?php declare(strict_types=1);

namespace PiotrPress;

class Executor implements Executor\Result {
    protected array $output = [];
    protected int $return = 0;

    public function __construct( string $command ) {
        if ( false === exec(
            escapeshellcmd( $command ) . ' 2>&1',
            $this->output,
            $this->return ) )
            throw new Executor\Exception();
    }

    public function __toString() : string {
        return implode( "\n", $this->output );
    }

    public function getOutput() : array {
        return $this->output;
    }

    public function getReturn() : int {
        return $this->return;
    }

    public function isSuccess() : bool {
        return $this->return === 0;
    }

    public function isFailure() : bool {
        return $this->return > 0;
    }
}