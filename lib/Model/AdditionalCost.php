<?php
/**
 * AdditionalCost
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
 * AdditionalCost Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class AdditionalCost implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'invoice' => 'string',
        'state' => 'string',
        'subscription' => 'string',
        'handle' => 'string',
        'ordertext' => 'string',
        'quantity' => 'int',
        'amount' => 'int',
        'vat' => 'float',
        'created' => '\DateTime',
        'amount_vat' => 'int',
        'amount_ex_vat' => 'int'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'invoice' => 'invoice',
        'state' => 'state',
        'subscription' => 'subscription',
        'handle' => 'handle',
        'ordertext' => 'ordertext',
        'quantity' => 'quantity',
        'amount' => 'amount',
        'vat' => 'vat',
        'created' => 'created',
        'amount_vat' => 'amount_vat',
        'amount_ex_vat' => 'amount_ex_vat'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'invoice' => 'setInvoice',
        'state' => 'setState',
        'subscription' => 'setSubscription',
        'handle' => 'setHandle',
        'ordertext' => 'setOrdertext',
        'quantity' => 'setQuantity',
        'amount' => 'setAmount',
        'vat' => 'setVat',
        'created' => 'setCreated',
        'amount_vat' => 'setAmountVat',
        'amount_ex_vat' => 'setAmountExVat'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'invoice' => 'getInvoice',
        'state' => 'getState',
        'subscription' => 'getSubscription',
        'handle' => 'getHandle',
        'ordertext' => 'getOrdertext',
        'quantity' => 'getQuantity',
        'amount' => 'getAmount',
        'vat' => 'getVat',
        'created' => 'getCreated',
        'amount_vat' => 'getAmountVat',
        'amount_ex_vat' => 'getAmountExVat'
    );
  
    
    /**
      * $invoice Invoice id for the invoice the additional cost has been assigned to
      * @var string
      */
    protected $invoice;
    
    /**
      * $state State of the additional cost, one of the following: `pending`, `transferred`, `cancelled`. A pending additonal cost has not yet been transferred to a invoice. Cancelled addtional costs have been cancelled manually.
      * @var string
      */
    protected $state;
    
    /**
      * $subscription Subscription handle
      * @var string
      */
    protected $subscription;
    
    /**
      * $handle Per account unique handle for the additional cost
      * @var string
      */
    protected $handle;
    
    /**
      * $ordertext Order text for the additional cost. Will be on affected invoices.
      * @var string
      */
    protected $ordertext;
    
    /**
      * $quantity Quantity for the additional cost. Default 1.
      * @var int
      */
    protected $quantity;
    
    /**
      * $amount Additional cost total amount including vat
      * @var int
      */
    protected $amount;
    
    /**
      * $vat Optional vat for additional cost. Account default is used if none given.
      * @var float
      */
    protected $vat;
    
    /**
      * $created Date when the additional cost was created. In [ISO-8601](http://en.wikipedia.org/wiki/ISO_8601) extended offset date-time format.
      * @var \DateTime
      */
    protected $created;
    
    /**
      * $amount_vat Additional cost vat amount
      * @var int
      */
    protected $amount_vat;
    
    /**
      * $amount_ex_vat Additional cost amount without vat
      * @var int
      */
    protected $amount_ex_vat;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            $this->invoice = $data["invoice"];
            $this->state = $data["state"];
            $this->subscription = $data["subscription"];
            $this->handle = $data["handle"];
            $this->ordertext = $data["ordertext"];
            $this->quantity = $data["quantity"];
            $this->amount = $data["amount"];
            $this->vat = $data["vat"];
            $this->created = $data["created"];
            $this->amount_vat = $data["amount_vat"];
            $this->amount_ex_vat = $data["amount_ex_vat"];
        }
    }
    
    /**
     * Gets invoice
     * @return string
     */
    public function getInvoice()
    {
        return $this->invoice;
    }
  
    /**
     * Sets invoice
     * @param string $invoice Invoice id for the invoice the additional cost has been assigned to
     * @return $this
     */
    public function setInvoice($invoice)
    {
        
        $this->invoice = $invoice;
        return $this;
    }
    
    /**
     * Gets state
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }
  
    /**
     * Sets state
     * @param string $state State of the additional cost, one of the following: `pending`, `transferred`, `cancelled`. A pending additonal cost has not yet been transferred to a invoice. Cancelled addtional costs have been cancelled manually.
     * @return $this
     */
    public function setState($state)
    {
        $allowed_values = array("pending", "transferred", "cancelled");
        if (!in_array($state, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'state', must be one of 'pending', 'transferred', 'cancelled'");
        }
        $this->state = $state;
        return $this;
    }
    
    /**
     * Gets subscription
     * @return string
     */
    public function getSubscription()
    {
        return $this->subscription;
    }
  
    /**
     * Sets subscription
     * @param string $subscription Subscription handle
     * @return $this
     */
    public function setSubscription($subscription)
    {
        
        $this->subscription = $subscription;
        return $this;
    }
    
    /**
     * Gets handle
     * @return string
     */
    public function getHandle()
    {
        return $this->handle;
    }
  
    /**
     * Sets handle
     * @param string $handle Per account unique handle for the additional cost
     * @return $this
     */
    public function setHandle($handle)
    {
        
        $this->handle = $handle;
        return $this;
    }
    
    /**
     * Gets ordertext
     * @return string
     */
    public function getOrdertext()
    {
        return $this->ordertext;
    }
  
    /**
     * Sets ordertext
     * @param string $ordertext Order text for the additional cost. Will be on affected invoices.
     * @return $this
     */
    public function setOrdertext($ordertext)
    {
        
        $this->ordertext = $ordertext;
        return $this;
    }
    
    /**
     * Gets quantity
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }
  
    /**
     * Sets quantity
     * @param int $quantity Quantity for the additional cost. Default 1.
     * @return $this
     */
    public function setQuantity($quantity)
    {
        
        $this->quantity = $quantity;
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
     * @param int $amount Additional cost total amount including vat
     * @return $this
     */
    public function setAmount($amount)
    {
        
        $this->amount = $amount;
        return $this;
    }
    
    /**
     * Gets vat
     * @return float
     */
    public function getVat()
    {
        return $this->vat;
    }
  
    /**
     * Sets vat
     * @param float $vat Optional vat for additional cost. Account default is used if none given.
     * @return $this
     */
    public function setVat($vat)
    {
        
        $this->vat = $vat;
        return $this;
    }
    
    /**
     * Gets created
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->created;
    }
  
    /**
     * Sets created
     * @param \DateTime $created Date when the additional cost was created. In [ISO-8601](http://en.wikipedia.org/wiki/ISO_8601) extended offset date-time format.
     * @return $this
     */
    public function setCreated($created)
    {
        
        $this->created = $created;
        return $this;
    }
    
    /**
     * Gets amount_vat
     * @return int
     */
    public function getAmountVat()
    {
        return $this->amount_vat;
    }
  
    /**
     * Sets amount_vat
     * @param int $amount_vat Additional cost vat amount
     * @return $this
     */
    public function setAmountVat($amount_vat)
    {
        
        $this->amount_vat = $amount_vat;
        return $this;
    }
    
    /**
     * Gets amount_ex_vat
     * @return int
     */
    public function getAmountExVat()
    {
        return $this->amount_ex_vat;
    }
  
    /**
     * Sets amount_ex_vat
     * @param int $amount_ex_vat Additional cost amount without vat
     * @return $this
     */
    public function setAmountExVat($amount_ex_vat)
    {
        
        $this->amount_ex_vat = $amount_ex_vat;
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
