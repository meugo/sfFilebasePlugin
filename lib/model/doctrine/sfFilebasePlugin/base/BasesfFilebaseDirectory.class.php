<?php

/**
 * BasesfFilebaseDirectory
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property Doctrine_Collection $files
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 5441 2009-01-30 22:58:43Z jwage $
 */
abstract class BasesfFilebaseDirectory extends sfAbstractFile
{
    public function setUp()
    {
        parent::setUp();
    $this->hasMany('sfAbstractFile as files', array('local' => 'id',
                                                        'foreign' => 'sf_filebase_directories_id'));
    }
}