<?php
/**
 * IntervalAmount
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
/**
 *  Copyright 2015 SmartBear Software
 *
 *  Licensed under the Apache License, Version 2.0 (the "License");
 *  you may not use this file except in compliance with the License.
 *  You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 *  Unless required by applicable law or agreed to in writing, software
 *  distributed under the License is distributed on an "AS IS" BASIS,
 *  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  See the License for the specific language governing permissions and
 *  limitations under the License.
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
/**
 * IntervalAmount Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class IntervalAmount implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'from' => 'string',
        'to' => 'string',
        'amount' => 'int',
        'currency' => 'string'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'from' => 'from',
        'to' => 'to',
        'amount' => 'amount',
        'currency' => 'currency'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'from' => 'setFrom',
        'to' => 'setTo',
        'amount' => 'setAmount',
        'currency' => 'setCurrency'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'from' => 'getFrom',
        'to' => 'getTo',
        'amount' => 'getAmount',
        'currency' => 'getCurrency'
    );
  
    
    /**
      * $from From date on the form yyyy-MM-dd
      * @var string
      */
    protected $from;
    
    /**
      * $to To date on the form yyyy-MM-dd
      * @var string
      */
    protected $to;
    
    /**
      * $amount Amount corresponding to the interval in the smallest unit for the currency
      * @var int
      */
    protected $amount;
    
    /**
      * $currency Currency in ISO 4217 three letter alpha code
      * @var string
      */
    protected $currency;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            $this->from = $data["from"];
            $this->to = $data["to"];
            $this->amount = $data["amount"];
            $this->currency = $data["currency"];
        }
    }
    
    /**
     * Gets from
     * @return string
     */
    public function getFrom()
    {
        return $this->from;
    }
  
    /**
     * Sets from
     * @param string $from From date on the form yyyy-MM-dd
     * @return $this
     */
    public function setFrom($from)
    {
        
        $this->from = $from;
        return $this;
    }
    
    /**
     * Gets to
     * @return string
     */
    public function getTo()
    {
        return $this->to;
    }
  
    /**
     * Sets to
     * @param string $to To date on the form yyyy-MM-dd
     * @return $this
     */
    public function setTo($to)
    {
        
        $this->to = $to;
        return $this;
    }
    
    /**
     * Gets amount
     * @return int
     */
    public function getAmount()
    {
        return $this->amount;
    }
  
    /**
     * Sets amount
     * @param int $amount Amount corresponding to the interval in the smallest unit for the currency
     * @return $this
     */
    public function setAmount($amount)
    {
        
        $this->amount = $amount;
        return $this;
    }
    
    /**
     * Gets currency
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }
  
    /**
     * Sets currency
     * @param string $currency Currency in ISO 4217 three letter alpha code
     * @return $this
     */
    public function setCurrency($currency)
    {
        
        $this->currency = $currency;
        return $this;
    }
    
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset 
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->$offset);
    }
  
    /**
     * Gets offset.
     * @param  integer $offset Offset 
     * @return mixed 
     */
    public function offsetGet($offset)
    {
        return $this->$offset;
    }
  
    /**
     * Sets value based on offset.
     * @param  integer $offset Offset 
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->$offset = $value;
    }
  
    /**
     * Unsets offset.
     * @param  integer $offset Offset 
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->$offset);
    }
  
    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) {
            return json_encode(get_object_vars($this), JSON_PRETTY_PRINT);
        } else {
            return json_encode(get_object_vars($this));
        }
    }
}
