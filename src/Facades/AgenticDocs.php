<?php

namespace Springloaded\AgenticDocs\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Springloaded\AgenticDocs\AgenticDocs
 */
class AgenticDocs extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Springloaded\AgenticDocs\AgenticDocs::class;
    }
}
