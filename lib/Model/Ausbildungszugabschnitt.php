<?php
/**
 * Ausbildungszugabschnitt
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * VEDA Bildungsmanager API
 *
 * Dokumentation der REST-Schnittstellen des VEDA Bildungsmanagers für die Version 2. Die Dokumentation zu speziellen Versionen kann über die Angabe des zusätzlichen Parameters \"group\" angezeigt werden. Beispiel: .../api/docs?group=v1 für die Dokumentation der Version 1, die aktuelle Version ist unter .../api/docs erreichbar.
 *
 * OpenAPI spec version: 2
 * Contact: info@veda.net
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.10
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
 * Ausbildungszugabschnitt Class Doc Comment
 *
 * @category Class
 * @description Ein Abschnitt eines Ausbildungszugs.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Ausbildungszugabschnitt implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Ausbildungszugabschnitt';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'oid' => 'string',
        'ausbildungsgangabschnitt_id' => 'string',
        'bearbeitungsende' => '\DateTime',
        'beginn' => '\DateTime',
        'ende' => '\DateTime',
        'links' => '\Swagger\Client\Model\Link[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'oid' => null,
        'ausbildungsgangabschnitt_id' => null,
        'bearbeitungsende' => 'date-time',
        'beginn' => 'date-time',
        'ende' => 'date-time',
        'links' => null
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
        'oid' => 'oid',
        'ausbildungsgangabschnitt_id' => 'ausbildungsgangabschnittId',
        'bearbeitungsende' => 'bearbeitungsende',
        'beginn' => 'beginn',
        'ende' => 'ende',
        'links' => 'links'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'oid' => 'setOid',
        'ausbildungsgangabschnitt_id' => 'setAusbildungsgangabschnittId',
        'bearbeitungsende' => 'setBearbeitungsende',
        'beginn' => 'setBeginn',
        'ende' => 'setEnde',
        'links' => 'setLinks'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'oid' => 'getOid',
        'ausbildungsgangabschnitt_id' => 'getAusbildungsgangabschnittId',
        'bearbeitungsende' => 'getBearbeitungsende',
        'beginn' => 'getBeginn',
        'ende' => 'getEnde',
        'links' => 'getLinks'
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
        $this->container['oid'] = isset($data['oid']) ? $data['oid'] : null;
        $this->container['ausbildungsgangabschnitt_id'] = isset($data['ausbildungsgangabschnitt_id']) ? $data['ausbildungsgangabschnitt_id'] : null;
        $this->container['bearbeitungsende'] = isset($data['bearbeitungsende']) ? $data['bearbeitungsende'] : null;
        $this->container['beginn'] = isset($data['beginn']) ? $data['beginn'] : null;
        $this->container['ende'] = isset($data['ende']) ? $data['ende'] : null;
        $this->container['links'] = isset($data['links']) ? $data['links'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['oid'] === null) {
            $invalidProperties[] = "'oid' can't be null";
        }
        if ($this->container['ausbildungsgangabschnitt_id'] === null) {
            $invalidProperties[] = "'ausbildungsgangabschnitt_id' can't be null";
        }
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
     * Gets oid
     *
     * @return string
     */
    public function getOid()
    {
        return $this->container['oid'];
    }

    /**
     * Sets oid
     *
     * @param string $oid UUID des Datensatzes
     *
     * @return $this
     */
    public function setOid($oid)
    {
        $this->container['oid'] = $oid;

        return $this;
    }

    /**
     * Gets ausbildungsgangabschnitt_id
     *
     * @return string
     */
    public function getAusbildungsgangabschnittId()
    {
        return $this->container['ausbildungsgangabschnitt_id'];
    }

    /**
     * Sets ausbildungsgangabschnitt_id
     *
     * @param string $ausbildungsgangabschnitt_id ID des zugehörigen Ausbildungsgangabschnitts
     *
     * @return $this
     */
    public function setAusbildungsgangabschnittId($ausbildungsgangabschnitt_id)
    {
        $this->container['ausbildungsgangabschnitt_id'] = $ausbildungsgangabschnitt_id;

        return $this;
    }

    /**
     * Gets bearbeitungsende
     *
     * @return \DateTime
     */
    public function getBearbeitungsende()
    {
        return $this->container['bearbeitungsende'];
    }

    /**
     * Sets bearbeitungsende
     *
     * @param \DateTime $bearbeitungsende Der optionale Zeitpunkt, wann die Bearbeitungszeit für die dem Teilnehmer auferlegten Aufgaben endet.
     *
     * @return $this
     */
    public function setBearbeitungsende($bearbeitungsende)
    {
        $this->container['bearbeitungsende'] = $bearbeitungsende;

        return $this;
    }

    /**
     * Gets beginn
     *
     * @return \DateTime
     */
    public function getBeginn()
    {
        return $this->container['beginn'];
    }

    /**
     * Sets beginn
     *
     * @param \DateTime $beginn Der Beginn-Zeitpunkt des Ausbildungszugabschnitt
     *
     * @return $this
     */
    public function setBeginn($beginn)
    {
        $this->container['beginn'] = $beginn;

        return $this;
    }

    /**
     * Gets ende
     *
     * @return \DateTime
     */
    public function getEnde()
    {
        return $this->container['ende'];
    }

    /**
     * Sets ende
     *
     * @param \DateTime $ende Der Ende-Zeitpunkt des Ausbildungszugabschnitt
     *
     * @return $this
     */
    public function setEnde($ende)
    {
        $this->container['ende'] = $ende;

        return $this;
    }

    /**
     * Gets links
     *
     * @return \Swagger\Client\Model\Link[]
     */
    public function getLinks()
    {
        return $this->container['links'];
    }

    /**
     * Sets links
     *
     * @param \Swagger\Client\Model\Link[] $links links
     *
     * @return $this
     */
    public function setLinks($links)
    {
        $this->container['links'] = $links;

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
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


