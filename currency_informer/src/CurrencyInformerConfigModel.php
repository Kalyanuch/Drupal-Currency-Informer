<?php
/**
 * @file
 * Contains constants
 */
namespace Drupal\currency_informer;

class CurrencyInformerConfigModel {
  const CURRENCY_INFORMER_BLOCK = 'block';
  const CURRENCY_INFORMER_CALCULATOR = 'calculator';

  public static function getTypesList() {
    return [
      self::CURRENCY_INFORMER_BLOCK => 'Block',
      self::CURRENCY_INFORMER_CALCULATOR => 'Calculator'
    ];
  }

  public static function getColorsList() {
    return [
      'white' => 'white',
      'grey' => 'grey',
      'yellow' => 'yellow',
      'pink' => 'pink',
      'blue' => 'blue',
      'marine' => 'marine',
      'green' => 'green',
      'violet' => 'violet'
    ];
  }
}
