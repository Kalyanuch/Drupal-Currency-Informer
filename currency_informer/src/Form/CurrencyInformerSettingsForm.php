<?php
/**
 * @file
 * Contains \Drupal\currency_informer\Form\CurrencyInformerSettingsForm
 */

namespace Drupal\currency_informer\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\currency_informer\CurrencyInformerConfigModel;

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

  public function buildForm(array $form, FormStateInterface $form_state)
  {
    $config = $this->config('currency_informer.settings');

    $form['informer_type'] = [
      '#type' => 'radios',
      '#title' => $this->t('Currency Informer type'),
      '#default_value' => $config->get('informer_type'),
      '#options' => CurrencyInformerConfigModel::getTypesList(),
      '#description' => t('It\'s can be static block or interactive calculator.')
    ];

    $form['informer_color'] = [
      '#type' => 'radios',
      '#title' => $this->t('Currency Informer color'),
      '#default_value' => $config->get('informer_color'),
      '#options' => CurrencyInformerConfigModel::getColorsList(),
      '#description' => t('Choose one from available colors.')
    ];

    return parent::buildForm($form, $form_state); // TODO: Change the autogenerated stub
  }

  /**
   * @inheritDoc
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    $this->config('currency_informer.settings')
      ->set('informer_type', trim($form_state->getValue('informer_type')))
      ->set('informer_color', trim($form_state->getValue('informer_color')))
      ->save();

    parent::submitForm($form, $form_state);
  }
}
