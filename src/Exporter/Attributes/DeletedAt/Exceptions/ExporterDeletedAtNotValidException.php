<?php

namespace Railken\LaraOre\Exporter\Attributes\DeletedAt\Exceptions;

use Railken\LaraOre\Exporter\Exceptions\ExporterAttributeException;

class ExporterDeletedAtNotValidException extends ExporterAttributeException
{
    /**
     * The reason (attribute) for which this exception is thrown.
     *
     * @var string
     */
    protected $attribute = 'deleted_at';

    /**
     * The code to identify the error.
     *
     * @var string
     */
    protected $code = 'REPORT_DELETED_AT_NOT_VALID';

    /**
     * The message.
     *
     * @var string
     */
    protected $message = 'The %s is not valid';
}
