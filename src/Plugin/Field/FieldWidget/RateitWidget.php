<?php

namespace Drupal\rateit\Plugin\Field\FieldWidget;

use Drupal\Core\Field\FieldItemListInterface;
use Drupal\Core\Field\Plugin\Field\FieldWidget\NumberWidget;
use Drupal\Core\Form\FormStateInterface;

/**
 * Plugin implementation of the 'rateit' widget.
 *
 * @FieldWidget(
 *   id = "rateit",
 *   label = @Translation("RateIt field"),
 *   field_types = {
 *     "integer"
 *   }
 * )
 */
class RateitWidget extends NumberWidget {

  /**
   * {@inheritdoc}
   */
  public function formElement(FieldItemListInterface $items, $delta, array $element, array &$form, FormStateInterface $form_state) {
    $element = parent::formElement($items, $delta, $element, $form, $form_state);
    $element['value']['#type'] = 'rateit';
    $element['#attached'] = [
      'library' => ['rateit/rateit'],
    ];

    return $element;
  }


}