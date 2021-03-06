<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin 1.0
// Source: vtgate.proto

namespace Vitess\Proto\Vtgate {

  class UpdateStreamRequest extends \DrSlump\Protobuf\Message {

    /**  @var \Vitess\Proto\Vtrpc\CallerID */
    public $caller_id = null;
    
    /**  @var string */
    public $keyspace = null;
    
    /**  @var string */
    public $shard = null;
    
    /**  @var \Vitess\Proto\Topodata\KeyRange */
    public $key_range = null;
    
    /**  @var int - \Vitess\Proto\Topodata\TabletType */
    public $tablet_type = null;
    
    /**  @var int */
    public $timestamp = null;
    
    /**  @var \Vitess\Proto\Query\EventToken */
    public $event = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'vtgate.UpdateStreamRequest');

      // OPTIONAL MESSAGE caller_id = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "caller_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\Vitess\Proto\Vtrpc\CallerID';
      $descriptor->addField($f);

      // OPTIONAL STRING keyspace = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "keyspace";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL STRING shard = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "shard";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE key_range = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "key_range";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\Vitess\Proto\Topodata\KeyRange';
      $descriptor->addField($f);

      // OPTIONAL ENUM tablet_type = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "tablet_type";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\Vitess\Proto\Topodata\TabletType';
      $descriptor->addField($f);

      // OPTIONAL INT64 timestamp = 6
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 6;
      $f->name      = "timestamp";
      $f->type      = \DrSlump\Protobuf::TYPE_INT64;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE event = 7
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 7;
      $f->name      = "event";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\Vitess\Proto\Query\EventToken';
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <caller_id> has a value
     *
     * @return boolean
     */
    public function hasCallerId(){
      return $this->_has(1);
    }
    
    /**
     * Clear <caller_id> value
     *
     * @return \Vitess\Proto\Vtgate\UpdateStreamRequest
     */
    public function clearCallerId(){
      return $this->_clear(1);
    }
    
    /**
     * Get <caller_id> value
     *
     * @return \Vitess\Proto\Vtrpc\CallerID
     */
    public function getCallerId(){
      return $this->_get(1);
    }
    
    /**
     * Set <caller_id> value
     *
     * @param \Vitess\Proto\Vtrpc\CallerID $value
     * @return \Vitess\Proto\Vtgate\UpdateStreamRequest
     */
    public function setCallerId(\Vitess\Proto\Vtrpc\CallerID $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <keyspace> has a value
     *
     * @return boolean
     */
    public function hasKeyspace(){
      return $this->_has(2);
    }
    
    /**
     * Clear <keyspace> value
     *
     * @return \Vitess\Proto\Vtgate\UpdateStreamRequest
     */
    public function clearKeyspace(){
      return $this->_clear(2);
    }
    
    /**
     * Get <keyspace> value
     *
     * @return string
     */
    public function getKeyspace(){
      return $this->_get(2);
    }
    
    /**
     * Set <keyspace> value
     *
     * @param string $value
     * @return \Vitess\Proto\Vtgate\UpdateStreamRequest
     */
    public function setKeyspace( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <shard> has a value
     *
     * @return boolean
     */
    public function hasShard(){
      return $this->_has(3);
    }
    
    /**
     * Clear <shard> value
     *
     * @return \Vitess\Proto\Vtgate\UpdateStreamRequest
     */
    public function clearShard(){
      return $this->_clear(3);
    }
    
    /**
     * Get <shard> value
     *
     * @return string
     */
    public function getShard(){
      return $this->_get(3);
    }
    
    /**
     * Set <shard> value
     *
     * @param string $value
     * @return \Vitess\Proto\Vtgate\UpdateStreamRequest
     */
    public function setShard( $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <key_range> has a value
     *
     * @return boolean
     */
    public function hasKeyRange(){
      return $this->_has(4);
    }
    
    /**
     * Clear <key_range> value
     *
     * @return \Vitess\Proto\Vtgate\UpdateStreamRequest
     */
    public function clearKeyRange(){
      return $this->_clear(4);
    }
    
    /**
     * Get <key_range> value
     *
     * @return \Vitess\Proto\Topodata\KeyRange
     */
    public function getKeyRange(){
      return $this->_get(4);
    }
    
    /**
     * Set <key_range> value
     *
     * @param \Vitess\Proto\Topodata\KeyRange $value
     * @return \Vitess\Proto\Vtgate\UpdateStreamRequest
     */
    public function setKeyRange(\Vitess\Proto\Topodata\KeyRange $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <tablet_type> has a value
     *
     * @return boolean
     */
    public function hasTabletType(){
      return $this->_has(5);
    }
    
    /**
     * Clear <tablet_type> value
     *
     * @return \Vitess\Proto\Vtgate\UpdateStreamRequest
     */
    public function clearTabletType(){
      return $this->_clear(5);
    }
    
    /**
     * Get <tablet_type> value
     *
     * @return int - \Vitess\Proto\Topodata\TabletType
     */
    public function getTabletType(){
      return $this->_get(5);
    }
    
    /**
     * Set <tablet_type> value
     *
     * @param int - \Vitess\Proto\Topodata\TabletType $value
     * @return \Vitess\Proto\Vtgate\UpdateStreamRequest
     */
    public function setTabletType( $value){
      return $this->_set(5, $value);
    }
    
    /**
     * Check if <timestamp> has a value
     *
     * @return boolean
     */
    public function hasTimestamp(){
      return $this->_has(6);
    }
    
    /**
     * Clear <timestamp> value
     *
     * @return \Vitess\Proto\Vtgate\UpdateStreamRequest
     */
    public function clearTimestamp(){
      return $this->_clear(6);
    }
    
    /**
     * Get <timestamp> value
     *
     * @return int
     */
    public function getTimestamp(){
      return $this->_get(6);
    }
    
    /**
     * Set <timestamp> value
     *
     * @param int $value
     * @return \Vitess\Proto\Vtgate\UpdateStreamRequest
     */
    public function setTimestamp( $value){
      return $this->_set(6, $value);
    }
    
    /**
     * Check if <event> has a value
     *
     * @return boolean
     */
    public function hasEvent(){
      return $this->_has(7);
    }
    
    /**
     * Clear <event> value
     *
     * @return \Vitess\Proto\Vtgate\UpdateStreamRequest
     */
    public function clearEvent(){
      return $this->_clear(7);
    }
    
    /**
     * Get <event> value
     *
     * @return \Vitess\Proto\Query\EventToken
     */
    public function getEvent(){
      return $this->_get(7);
    }
    
    /**
     * Set <event> value
     *
     * @param \Vitess\Proto\Query\EventToken $value
     * @return \Vitess\Proto\Vtgate\UpdateStreamRequest
     */
    public function setEvent(\Vitess\Proto\Query\EventToken $value){
      return $this->_set(7, $value);
    }
  }
}

