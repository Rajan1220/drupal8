<?php
/**
 * @filea
 * @author rajan
 * Contains /modules/custom/d8wonders/src/Controller.
 */
namespace Drupal\d8wonders\Controller;
/**
 * Provides route responses for the Example module.
 */
class d8wondersController {
  /**
   * Returns a simple page.
   *
   * @return array
   *   A simple renderable array.
   */
  public function d8wonders() {
    $element = array(
      '#markup' => 'Lets make wonders with drupal 8',
    );
    return $element;
  }
}
?>