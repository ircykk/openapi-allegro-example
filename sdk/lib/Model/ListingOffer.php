<?php
/**
 * ListingOffer
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
 * ListingOffer Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ListingOffer implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ListingOffer';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'name' => 'string',
        'seller' => '\OpenAPI\Client\Model\OfferSeller',
        'promotion' => '\OpenAPI\Client\Model\OfferPromotion',
        'delivery' => '\OpenAPI\Client\Model\OfferDelivery',
        'images' => '\OpenAPI\Client\Model\OfferImages[]',
        'selling_mode' => '\OpenAPI\Client\Model\OfferSellingMode',
        'stock' => '\OpenAPI\Client\Model\OfferStock',
        'vendor' => '\OpenAPI\Client\Model\OfferVendor',
        'category' => '\OpenAPI\Client\Model\OfferCategory',
        'publication' => '\OpenAPI\Client\Model\OfferPublication'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'seller' => null,
        'promotion' => null,
        'delivery' => null,
        'images' => null,
        'selling_mode' => null,
        'stock' => null,
        'vendor' => null,
        'category' => null,
        'publication' => null
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
        'id' => 'id',
        'name' => 'name',
        'seller' => 'seller',
        'promotion' => 'promotion',
        'delivery' => 'delivery',
        'images' => 'images',
        'selling_mode' => 'sellingMode',
        'stock' => 'stock',
        'vendor' => 'vendor',
        'category' => 'category',
        'publication' => 'publication'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'seller' => 'setSeller',
        'promotion' => 'setPromotion',
        'delivery' => 'setDelivery',
        'images' => 'setImages',
        'selling_mode' => 'setSellingMode',
        'stock' => 'setStock',
        'vendor' => 'setVendor',
        'category' => 'setCategory',
        'publication' => 'setPublication'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'seller' => 'getSeller',
        'promotion' => 'getPromotion',
        'delivery' => 'getDelivery',
        'images' => 'getImages',
        'selling_mode' => 'getSellingMode',
        'stock' => 'getStock',
        'vendor' => 'getVendor',
        'category' => 'getCategory',
        'publication' => 'getPublication'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['seller'] = isset($data['seller']) ? $data['seller'] : null;
        $this->container['promotion'] = isset($data['promotion']) ? $data['promotion'] : null;
        $this->container['delivery'] = isset($data['delivery']) ? $data['delivery'] : null;
        $this->container['images'] = isset($data['images']) ? $data['images'] : null;
        $this->container['selling_mode'] = isset($data['selling_mode']) ? $data['selling_mode'] : null;
        $this->container['stock'] = isset($data['stock']) ? $data['stock'] : null;
        $this->container['vendor'] = isset($data['vendor']) ? $data['vendor'] : null;
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['publication'] = isset($data['publication']) ? $data['publication'] : null;
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
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id The offer ID.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name The title of the offer.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets seller
     *
     * @return \OpenAPI\Client\Model\OfferSeller|null
     */
    public function getSeller()
    {
        return $this->container['seller'];
    }

    /**
     * Sets seller
     *
     * @param \OpenAPI\Client\Model\OfferSeller|null $seller seller
     *
     * @return $this
     */
    public function setSeller($seller)
    {
        $this->container['seller'] = $seller;

        return $this;
    }

    /**
     * Gets promotion
     *
     * @return \OpenAPI\Client\Model\OfferPromotion|null
     */
    public function getPromotion()
    {
        return $this->container['promotion'];
    }

    /**
     * Sets promotion
     *
     * @param \OpenAPI\Client\Model\OfferPromotion|null $promotion promotion
     *
     * @return $this
     */
    public function setPromotion($promotion)
    {
        $this->container['promotion'] = $promotion;

        return $this;
    }

    /**
     * Gets delivery
     *
     * @return \OpenAPI\Client\Model\OfferDelivery|null
     */
    public function getDelivery()
    {
        return $this->container['delivery'];
    }

    /**
     * Sets delivery
     *
     * @param \OpenAPI\Client\Model\OfferDelivery|null $delivery delivery
     *
     * @return $this
     */
    public function setDelivery($delivery)
    {
        $this->container['delivery'] = $delivery;

        return $this;
    }

    /**
     * Gets images
     *
     * @return \OpenAPI\Client\Model\OfferImages[]|null
     */
    public function getImages()
    {
        return $this->container['images'];
    }

    /**
     * Sets images
     *
     * @param \OpenAPI\Client\Model\OfferImages[]|null $images The gallery of images. Only the URL of the original sized image is provided. The first image represents the thumbnail image used on listing.
     *
     * @return $this
     */
    public function setImages($images)
    {
        $this->container['images'] = $images;

        return $this;
    }

    /**
     * Gets selling_mode
     *
     * @return \OpenAPI\Client\Model\OfferSellingMode|null
     */
    public function getSellingMode()
    {
        return $this->container['selling_mode'];
    }

    /**
     * Sets selling_mode
     *
     * @param \OpenAPI\Client\Model\OfferSellingMode|null $selling_mode selling_mode
     *
     * @return $this
     */
    public function setSellingMode($selling_mode)
    {
        $this->container['selling_mode'] = $selling_mode;

        return $this;
    }

    /**
     * Gets stock
     *
     * @return \OpenAPI\Client\Model\OfferStock|null
     */
    public function getStock()
    {
        return $this->container['stock'];
    }

    /**
     * Sets stock
     *
     * @param \OpenAPI\Client\Model\OfferStock|null $stock stock
     *
     * @return $this
     */
    public function setStock($stock)
    {
        $this->container['stock'] = $stock;

        return $this;
    }

    /**
     * Gets vendor
     *
     * @return \OpenAPI\Client\Model\OfferVendor|null
     */
    public function getVendor()
    {
        return $this->container['vendor'];
    }

    /**
     * Sets vendor
     *
     * @param \OpenAPI\Client\Model\OfferVendor|null $vendor vendor
     *
     * @return $this
     */
    public function setVendor($vendor)
    {
        $this->container['vendor'] = $vendor;

        return $this;
    }

    /**
     * Gets category
     *
     * @return \OpenAPI\Client\Model\OfferCategory|null
     */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
     * Sets category
     *
     * @param \OpenAPI\Client\Model\OfferCategory|null $category category
     *
     * @return $this
     */
    public function setCategory($category)
    {
        $this->container['category'] = $category;

        return $this;
    }

    /**
     * Gets publication
     *
     * @return \OpenAPI\Client\Model\OfferPublication|null
     */
    public function getPublication()
    {
        return $this->container['publication'];
    }

    /**
     * Sets publication
     *
     * @param \OpenAPI\Client\Model\OfferPublication|null $publication publication
     *
     * @return $this
     */
    public function setPublication($publication)
    {
        $this->container['publication'] = $publication;

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


