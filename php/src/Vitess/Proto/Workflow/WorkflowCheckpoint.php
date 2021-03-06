<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin 1.0
// Source: workflow.proto

namespace Vitess\Proto\Workflow {

  class WorkflowCheckpoint extends \DrSlump\Protobuf\Message {

    /**  @var int */
    public $code_version = null;
    
    /**  @var \Vitess\Proto\Workflow\WorkflowCheckpoint\TasksEntry[]  */
    public $tasks = array();
    
    /**  @var \Vitess\Proto\Workflow\WorkflowCheckpoint\SettingsEntry[]  */
    public $settings = array();
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'workflow.WorkflowCheckpoint');

      // OPTIONAL INT32 code_version = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "code_version";
      $f->type      = \DrSlump\Protobuf::TYPE_INT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // REPEATED MESSAGE tasks = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "tasks";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $f->reference = '\Vitess\Proto\Workflow\WorkflowCheckpoint\TasksEntry';
      $descriptor->addField($f);

      // REPEATED MESSAGE settings = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "settings";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $f->reference = '\Vitess\Proto\Workflow\WorkflowCheckpoint\SettingsEntry';
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <code_version> has a value
     *
     * @return boolean
     */
    public function hasCodeVersion(){
      return $this->_has(1);
    }
    
    /**
     * Clear <code_version> value
     *
     * @return \Vitess\Proto\Workflow\WorkflowCheckpoint
     */
    public function clearCodeVersion(){
      return $this->_clear(1);
    }
    
    /**
     * Get <code_version> value
     *
     * @return int
     */
    public function getCodeVersion(){
      return $this->_get(1);
    }
    
    /**
     * Set <code_version> value
     *
     * @param int $value
     * @return \Vitess\Proto\Workflow\WorkflowCheckpoint
     */
    public function setCodeVersion( $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <tasks> has a value
     *
     * @return boolean
     */
    public function hasTasks(){
      return $this->_has(2);
    }
    
    /**
     * Clear <tasks> value
     *
     * @return \Vitess\Proto\Workflow\WorkflowCheckpoint
     */
    public function clearTasks(){
      return $this->_clear(2);
    }
    
    /**
     * Get <tasks> value
     *
     * @param int $idx
     * @return \Vitess\Proto\Workflow\WorkflowCheckpoint\TasksEntry
     */
    public function getTasks($idx = NULL){
      return $this->_get(2, $idx);
    }
    
    /**
     * Set <tasks> value
     *
     * @param \Vitess\Proto\Workflow\WorkflowCheckpoint\TasksEntry $value
     * @return \Vitess\Proto\Workflow\WorkflowCheckpoint
     */
    public function setTasks(\Vitess\Proto\Workflow\WorkflowCheckpoint\TasksEntry $value, $idx = NULL){
      return $this->_set(2, $value, $idx);
    }
    
    /**
     * Get all elements of <tasks>
     *
     * @return \Vitess\Proto\Workflow\WorkflowCheckpoint\TasksEntry[]
     */
    public function getTasksList(){
     return $this->_get(2);
    }
    
    /**
     * Add a new element to <tasks>
     *
     * @param \Vitess\Proto\Workflow\WorkflowCheckpoint\TasksEntry $value
     * @return \Vitess\Proto\Workflow\WorkflowCheckpoint
     */
    public function addTasks(\Vitess\Proto\Workflow\WorkflowCheckpoint\TasksEntry $value){
     return $this->_add(2, $value);
    }
    
    /**
     * Check if <settings> has a value
     *
     * @return boolean
     */
    public function hasSettings(){
      return $this->_has(3);
    }
    
    /**
     * Clear <settings> value
     *
     * @return \Vitess\Proto\Workflow\WorkflowCheckpoint
     */
    public function clearSettings(){
      return $this->_clear(3);
    }
    
    /**
     * Get <settings> value
     *
     * @param int $idx
     * @return \Vitess\Proto\Workflow\WorkflowCheckpoint\SettingsEntry
     */
    public function getSettings($idx = NULL){
      return $this->_get(3, $idx);
    }
    
    /**
     * Set <settings> value
     *
     * @param \Vitess\Proto\Workflow\WorkflowCheckpoint\SettingsEntry $value
     * @return \Vitess\Proto\Workflow\WorkflowCheckpoint
     */
    public function setSettings(\Vitess\Proto\Workflow\WorkflowCheckpoint\SettingsEntry $value, $idx = NULL){
      return $this->_set(3, $value, $idx);
    }
    
    /**
     * Get all elements of <settings>
     *
     * @return \Vitess\Proto\Workflow\WorkflowCheckpoint\SettingsEntry[]
     */
    public function getSettingsList(){
     return $this->_get(3);
    }
    
    /**
     * Add a new element to <settings>
     *
     * @param \Vitess\Proto\Workflow\WorkflowCheckpoint\SettingsEntry $value
     * @return \Vitess\Proto\Workflow\WorkflowCheckpoint
     */
    public function addSettings(\Vitess\Proto\Workflow\WorkflowCheckpoint\SettingsEntry $value){
     return $this->_add(3, $value);
    }
  }
}

