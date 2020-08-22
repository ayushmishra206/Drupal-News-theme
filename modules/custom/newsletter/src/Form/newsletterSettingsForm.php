<?php
/**
 * @file
 * Contains \Drupal\newsletter\Form\newsletterSettingsForm
 */

namespace Drupal\newsletter\Form;

use Drupal\Core\Form\ConfigFormBase;
use Symfony\Component\HttpFoundation\Request;
use Drupal\Core\Form\FormStateInterface;

/**
 * Defines a form to configure newsletter List module settings
 */
class newsletterSettingsForm extends ConfigFormBase {
  /**
   * {@inheritdoc}
   */
  public function getFormID() {
    return 'newsletter_admin_settings';
  }
   /**
   * {@inheritdoc}
   */
  protected function getEditableConfigNames() {
    return [
    'newsletter.settings'
    ];
  }
  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state, Request $request = NULL) {
    $types = node_type_get_names();
    $config = $this->config('newsletter.settings');
    $form['newsletter_types'] = array(
      '#type' => 'checkboxes',
      '#title' => $this->t('The content types to enable newsletter collection for'),
      '#default_value' => $config->get('allowed_types'),
      '#options' => $types,
      '#description' => t('On the specified node types, an newsletter option will be available and can be enabled while tht node is being edited.'),
       );
    $form['array_filter'] = array('#type' => 'value', '#value' => TRUE);

    return parent::buildForm($form,$form_state);
  }
  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    $allowed_types = array_filter($form_state->getValue('newsletter_types'));
    sort($allowed_types);
    $this->config('newsletter.settings')
      ->set('allowed_types', $allowed_types)
      ->save();
    parent::submitForm($form, $form_state);
  }

}



