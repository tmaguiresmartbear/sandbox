<?php
/**
 * Main
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Open weather
 *
 * This is my descriptiongggg
 *
 * OpenAPI spec version: 0.1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * Main Class Doc Comment
 *
 * @category Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Main implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Main';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'temp' => 'double',
        'pressure' => 'int',
        'humidity' => 'int',
        'temp_min' => 'double',
        'temp_max' => 'double'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'temp' => 'double',
        'pressure' => 'int32',
        'humidity' => 'int32',
        'temp_min' => 'double',
        'temp_max' => 'double'
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'temp' => 'temp',
        'pressure' => 'pressure',
        'humidity' => 'humidity',
        'temp_min' => 'temp_min',
        'temp_max' => 'temp_max'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'temp' => 'setTemp',
        'pressure' => 'setPressure',
        'humidity' => 'setHumidity',
        'temp_min' => 'setTempMin',
        'temp_max' => 'setTempMax'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'temp' => 'getTemp',
        'pressure' => 'getPressure',
        'humidity' => 'getHumidity',
        'temp_min' => 'getTempMin',
        'temp_max' => 'getTempMax'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['temp'] = isset($data['temp']) ? $data['temp'] : null;
        $this->container['pressure'] = isset($data['pressure']) ? $data['pressure'] : null;
        $this->container['humidity'] = isset($data['humidity']) ? $data['humidity'] : null;
        $this->container['temp_min'] = isset($data['temp_min']) ? $data['temp_min'] : null;
        $this->container['temp_max'] = isset($data['temp_max']) ? $data['temp_max'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        return true;
    }


    /**
     * Gets temp
     *
     * @return double
     */
    public function getTemp()
    {
        return $this->container['temp'];
    }

    /**
     * Sets temp
     *
     * @param double $temp temp
     *
     * @return $this
     */
    public function setTemp($temp)
    {
        $this->container['temp'] = $temp;

        return $this;
    }

    /**
     * Gets pressure
     *
     * @return int
     */
    public function getPressure()
    {
        return $this->container['pressure'];
    }

    /**
     * Sets pressure
     *
     * @param int $pressure pressure
     *
     * @return $this
     */
    public function setPressure($pressure)
    {
        $this->container['pressure'] = $pressure;

        return $this;
    }

    /**
     * Gets humidity
     *
     * @return int
     */
    public function getHumidity()
    {
        return $this->container['humidity'];
    }

    /**
     * Sets humidity
     *
     * @param int $humidity humidity
     *
     * @return $this
     */
    public function setHumidity($humidity)
    {
        $this->container['humidity'] = $humidity;

        return $this;
    }

    /**
     * Gets temp_min
     *
     * @return double
     */
    public function getTempMin()
    {
        return $this->container['temp_min'];
    }

    /**
     * Sets temp_min
     *
     * @param double $temp_min temp_min
     *
     * @return $this
     */
    public function setTempMin($temp_min)
    {
        $this->container['temp_min'] = $temp_min;

        return $this;
    }

    /**
     * Gets temp_max
     *
     * @return double
     */
    public function getTempMax()
    {
        return $this->container['temp_max'];
    }

    /**
     * Sets temp_max
     *
     * @param double $temp_max temp_max
     *
     * @return $this
     */
    public function setTempMax($temp_max)
    {
        $this->container['temp_max'] = $temp_max;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param  integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param  integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param  integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

