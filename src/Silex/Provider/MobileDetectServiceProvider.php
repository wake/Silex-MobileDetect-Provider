<?php

/*
* This file is part of Silex-MobileDetect-Provider.
*
 * @author Wake Liu <wake.gs@gmail.com>
*/

namespace Silex\Provider;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

/**
 * MobileDetect service provider.
 *
 */
class MobileDetectServiceProvider implements ServiceProviderInterface {

  /**
   * Register.
   *
   */
  public function register (Container $app) {

    $app['mobile_detect'] = function ($c) {
      return new \Mobile_Detect ();
    };
  }
}
