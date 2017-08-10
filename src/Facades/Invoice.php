<?php
/**
 * Created by PhpStorm.
 * User: Genert Org
 * Date: 08/08/2017
 * Time: 12:08
 */

namespace Genert\Laravel\Invoice\Facades;

use Illuminate\Support\Facades\Facade;

final class Invoice extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'invoice';
    }
}
