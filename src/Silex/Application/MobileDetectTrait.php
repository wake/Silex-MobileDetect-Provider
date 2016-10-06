<?php

/*
* This file is part of Silex-MobileDetect-Provider.
*
 * @author Wake Liu <wake.gs@gmail.com>
*/

namespace Silex\Application;

/**
 * MobileDetect trait.
 *
 */
trait MobileDetectTrait {

  /**
   * Detect if mobile through MobileDetect.
   *
   */
  public function detect ($key, $userAgent = null, $httpHeaders = null) {
    return $this['mobile_detect']->$key ($userAgent = null, $httpHeaders = null);
  }
}
