<?php

require_once(sfConfig::get('sf_lib_dir').'/filter/doctrine/BaseFormFilterDoctrine.class.php');

/**
 * sfFilebaseFile filter form base class.
 *
 * @package    filters
 * @subpackage sfFilebaseFile *
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 11675 2008-09-19 15:21:38Z fabien $
 */
class BasesfFilebaseFileFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'path'                       => new sfWidgetFormFilterInput(),
      'filename'                   => new sfWidgetFormFilterInput(),
      'hash'                       => new sfWidgetFormFilterInput(),
      'comment'                    => new sfWidgetFormFilterInput(),
      'sf_filebase_directories_id' => new sfWidgetFormDoctrineChoice(array('model' => 'sfFilebaseDirectory', 'add_empty' => true)),
      'type'                       => new sfWidgetFormFilterInput(),
      'level'                      => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'path'                       => new sfValidatorPass(array('required' => false)),
      'filename'                   => new sfValidatorPass(array('required' => false)),
      'hash'                       => new sfValidatorPass(array('required' => false)),
      'comment'                    => new sfValidatorPass(array('required' => false)),
      'sf_filebase_directories_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => 'sfFilebaseDirectory', 'column' => 'id')),
      'type'                       => new sfValidatorPass(array('required' => false)),
      'level'                      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('sf_filebase_file_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'sfFilebaseFile';
  }

  public function getFields()
  {
    return array(
      'id'                         => 'Number',
      'path'                       => 'Text',
      'filename'                   => 'Text',
      'hash'                       => 'Text',
      'comment'                    => 'Text',
      'sf_filebase_directories_id' => 'ForeignKey',
      'type'                       => 'Text',
      'level'                      => 'Number',
    );
  }
}