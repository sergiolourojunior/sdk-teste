<?php

namespace SergioLouro\SdkTeste;

use Illuminate\Support\Facades\Facade;

/**
 * @see \SergioLouro\SdkTeste\Skeleton\SkeletonClass
 */
class SdkTesteFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'sdk-teste';
    }
}
