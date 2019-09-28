<?php
/**
 * ModificationPromotion
 *
 * PHP version 5
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Allegro REST API
 *
 * https://developer.allegro.pl/about
 *
 * The version of the OpenAPI document: latest
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.1.3-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * ModificationPromotion Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ModificationPromotion implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ModificationPromotion';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'bold' => 'bool',
        'department_page' => 'bool',
        'emphasized' => 'bool',
        'emphasized_highlight_bold_package' => 'bool',
        'highlight' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'bold' => null,
        'department_page' => null,
        'emphasized' => null,
        'emphasized_highlight_bold_package' => null,
        'highlight' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'bold' => 'bold',
        'department_page' => 'departmentPage',
        'emphasized' => 'emphasized',
        'emphasized_highlight_bold_package' => 'emphasizedHighlightBoldPackage',
        'highlight' => 'highlight'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'bold' => 'setBold',
        'department_page' => 'setDepartmentPage',
        'emphasized' => 'setEmphasized',
        'emphasized_highlight_bold_package' => 'setEmphasizedHighlightBoldPackage',
        'highlight' => 'setHighlight'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'bold' => 'getBold',
        'department_page' => 'getDepartmentPage',
        'emphasized' => 'getEmphasized',
        'emphasized_highlight_bold_package' => 'getEmphasizedHighlightBoldPackage',
        'highlight' => 'getHighlight'
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
        return self::$openAPIModelName;
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
        $this->container['bold'] = isset($data['bold']) ? $data['bold'] : null;
        $this->container['department_page'] = isset($data['department_page']) ? $data['department_page'] : null;
        $this->container['emphasized'] = isset($data['emphasized']) ? $data['emphasized'] : null;
        $this->container['emphasized_highlight_bold_package'] = isset($data['emphasized_highlight_bold_package']) ? $data['emphasized_highlight_bold_package'] : null;
        $this->container['highlight'] = isset($data['highlight']) ? $data['highlight'] : null;
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
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets bold
     *
     * @return bool|null
     */
    public function getBold()
    {
        return $this->container['bold'];
    }

    /**
     * Sets bold
     *
     * @param bool|null $bold Bold flag: true, false, null
     *
     * @return $this
     */
    public function setBold($bold)
    {
        $this->container['bold'] = $bold;

        return $this;
    }

    /**
     * Gets department_page
     *
     * @return bool|null
     */
    public function getDepartmentPage()
    {
        return $this->container['department_page'];
    }

    /**
     * Sets department_page
     *
     * @param bool|null $department_page DepartmentPage flag: true, false, null
     *
     * @return $this
     */
    public function setDepartmentPage($department_page)
    {
        $this->container['department_page'] = $department_page;

        return $this;
    }

    /**
     * Gets emphasized
     *
     * @return bool|null
     */
    public function getEmphasized()
    {
        return $this->container['emphasized'];
    }

    /**
     * Sets emphasized
     *
     * @param bool|null $emphasized Emphasized flag: true, false, null
     *
     * @return $this
     */
    public function setEmphasized($emphasized)
    {
        $this->container['emphasized'] = $emphasized;

        return $this;
    }

    /**
     * Gets emphasized_highlight_bold_package
     *
     * @return bool|null
     */
    public function getEmphasizedHighlightBoldPackage()
    {
        return $this->container['emphasized_highlight_bold_package'];
    }

    /**
     * Sets emphasized_highlight_bold_package
     *
     * @param bool|null $emphasized_highlight_bold_package EmphasizedHighlightBoldPackage flag: true, false, null
     *
     * @return $this
     */
    public function setEmphasizedHighlightBoldPackage($emphasized_highlight_bold_package)
    {
        $this->container['emphasized_highlight_bold_package'] = $emphasized_highlight_bold_package;

        return $this;
    }

    /**
     * Gets highlight
     *
     * @return bool|null
     */
    public function getHighlight()
    {
        return $this->container['highlight'];
    }

    /**
     * Sets highlight
     *
     * @param bool|null $highlight Highlight flag: true, false, null
     *
     * @return $this
     */
    public function setHighlight($highlight)
    {
        $this->container['highlight'] = $highlight;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
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
     * @param integer $offset Offset
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
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
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
     * @param integer $offset Offset
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
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}


