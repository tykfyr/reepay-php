<?php
/**
 * CustomerNote
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
 * CustomerNote Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CustomerNote implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'note' => 'string',
        'id' => 'string',
        'created' => '\DateTime',
        'user_name' => 'string',
        'user_email' => 'string'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'note' => 'note',
        'id' => 'id',
        'created' => 'created',
        'user_name' => 'user_name',
        'user_email' => 'user_email'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'note' => 'setNote',
        'id' => 'setId',
        'created' => 'setCreated',
        'user_name' => 'setUserName',
        'user_email' => 'setUserEmail'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'note' => 'getNote',
        'id' => 'getId',
        'created' => 'getCreated',
        'user_name' => 'getUserName',
        'user_email' => 'getUserEmail'
    );
  
    
    /**
      * $note Customer note text. Maximum 4096 characters.
      * @var string
      */
    protected $note;
    
    /**
      * $id Unique id for note assigned by Reepay
      * @var string
      */
    protected $id;
    
    /**
      * $created Date when the customer note was created. In [ISO-8601](http://en.wikipedia.org/wiki/ISO_8601) extended offset date-time format.
      * @var \DateTime
      */
    protected $created;
    
    /**
      * $user_name User name of the note creator
      * @var string
      */
    protected $user_name;
    
    /**
      * $user_email User email of the note creator
      * @var string
      */
    protected $user_email;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            $this->note = $data["note"];
            $this->id = $data["id"];
            $this->created = $data["created"];
            $this->user_name = $data["user_name"];
            $this->user_email = $data["user_email"];
        }
    }
    
    /**
     * Gets note
     * @return string
     */
    public function getNote()
    {
        return $this->note;
    }
  
    /**
     * Sets note
     * @param string $note Customer note text. Maximum 4096 characters.
     * @return $this
     */
    public function setNote($note)
    {
        
        $this->note = $note;
        return $this;
    }
    
    /**
     * Gets id
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }
  
    /**
     * Sets id
     * @param string $id Unique id for note assigned by Reepay
     * @return $this
     */
    public function setId($id)
    {
        
        $this->id = $id;
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
     * @param \DateTime $created Date when the customer note was created. In [ISO-8601](http://en.wikipedia.org/wiki/ISO_8601) extended offset date-time format.
     * @return $this
     */
    public function setCreated($created)
    {
        
        $this->created = $created;
        return $this;
    }
    
    /**
     * Gets user_name
     * @return string
     */
    public function getUserName()
    {
        return $this->user_name;
    }
  
    /**
     * Sets user_name
     * @param string $user_name User name of the note creator
     * @return $this
     */
    public function setUserName($user_name)
    {
        
        $this->user_name = $user_name;
        return $this;
    }
    
    /**
     * Gets user_email
     * @return string
     */
    public function getUserEmail()
    {
        return $this->user_email;
    }
  
    /**
     * Sets user_email
     * @param string $user_email User email of the note creator
     * @return $this
     */
    public function setUserEmail($user_email)
    {
        
        $this->user_email = $user_email;
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
