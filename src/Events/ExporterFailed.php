<?php

namespace Railken\LaraOre\Events;

use Exception;
use Illuminate\Queue\SerializesModels;
use Railken\LaraOre\Exporter\Exporter;
use Railken\Laravel\Manager\Contracts\AgentContract;

class ExporterFailed
{
    use SerializesModels;

    public $exporter;
    public $error;
    public $agent;

    /**
     * Create a new event instance.
     *
     * @param \Railken\LaraOre\Exporter\Exporter               $exporter
     * @param \Exception                                       $exception
     * @param \Railken\Laravel\Manager\Contracts\AgentContract $agent
     */
    public function __construct(Exporter $exporter, Exception $exception, AgentContract $agent = null)
    {
        $this->exporter = $exporter;
        $this->error = (object) [
            'class'   => get_class($exception),
            'message' => $exception->getMessage(),
        ];

        $this->agent = $agent;
    }
}
