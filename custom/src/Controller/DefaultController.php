<?php

/**
 * @file
 * Contains \Drupal\custom\Controller\DefaultController.
 */

namespace Drupal\custom\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class DefaultController.
 *
 * @package Drupal\custom\Controller
 */
class DefaultController extends ControllerBase {
  /**
   * Index.
   *
   * @return string
   *   Return Hello string.
   */
  public function index() {
    return [
      '#type' => 'markup',
      // '#markup' => $this->t('Implement method: index with parameter(s): $name')
      '#markup' => date(' Y,m d @ H:i:s', time()),
    ];
  }

}
