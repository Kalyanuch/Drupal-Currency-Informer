<?php
/**
 * @file
 * Contains \Drupal\currency_informer\Form\CurrencyInformerSettingsForm
 */

namespace Drupal\currency_informer\Form;

use Drupal\Core\Form\ConfigFormBase;

/**
 * Class CurrencyInformerSettingsForm
 * Defines a form to configure Currency Informer module settings
 *
 * @package Drupal\currency_informer\Form
 */
class CurrencyInformerSettingsForm extends ConfigFormBase {

  /**
   * @inheritDoc
   */
  protected function getEditableConfigNames()
  {
    return ['currency_informer.settings'];
  }

  /**
   * @inheritDoc
   */
  public function getFormId()
  {
    return 'currency_informer_admin_settings';
  }
}
