<?php
/**
 * Veranstaltungsort
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
 * Veranstaltungsort Class Doc Comment
 *
 * @category Class
 * @description Die Informationen zu einem Veranstaltungsort.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Veranstaltungsort implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Veranstaltungsort';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'hausnr' => 'string',
        'homepage' => 'string',
        'name' => 'string',
        'ort' => 'string',
        'plz' => 'string',
        'strasse' => 'string',
        'telefon1' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'hausnr' => null,
        'homepage' => null,
        'name' => null,
        'ort' => null,
        'plz' => null,
        'strasse' => null,
        'telefon1' => null
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
        'hausnr' => 'hausnr',
        'homepage' => 'homepage',
        'name' => 'name',
        'ort' => 'ort',
        'plz' => 'plz',
        'strasse' => 'strasse',
        'telefon1' => 'telefon1'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'hausnr' => 'setHausnr',
        'homepage' => 'setHomepage',
        'name' => 'setName',
        'ort' => 'setOrt',
        'plz' => 'setPlz',
        'strasse' => 'setStrasse',
        'telefon1' => 'setTelefon1'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'hausnr' => 'getHausnr',
        'homepage' => 'getHomepage',
        'name' => 'getName',
        'ort' => 'getOrt',
        'plz' => 'getPlz',
        'strasse' => 'getStrasse',
        'telefon1' => 'getTelefon1'
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
        $this->container['hausnr'] = isset($data['hausnr']) ? $data['hausnr'] : null;
        $this->container['homepage'] = isset($data['homepage']) ? $data['homepage'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['ort'] = isset($data['ort']) ? $data['ort'] : null;
        $this->container['plz'] = isset($data['plz']) ? $data['plz'] : null;
        $this->container['strasse'] = isset($data['strasse']) ? $data['strasse'] : null;
        $this->container['telefon1'] = isset($data['telefon1']) ? $data['telefon1'] : null;
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
     * Gets hausnr
     *
     * @return string
     */
    public function getHausnr()
    {
        return $this->container['hausnr'];
    }

    /**
     * Sets hausnr
     *
     * @param string $hausnr Hausnummer der Anschrift des Veranstaltungsorts
     *
     * @return $this
     */
    public function setHausnr($hausnr)
    {
        $this->container['hausnr'] = $hausnr;

        return $this;
    }

    /**
     * Gets homepage
     *
     * @return string
     */
    public function getHomepage()
    {
        return $this->container['homepage'];
    }

    /**
     * Sets homepage
     *
     * @param string $homepage Homepage des Veranstaltungsorts
     *
     * @return $this
     */
    public function setHomepage($homepage)
    {
        $this->container['homepage'] = $homepage;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name Name des Veranstaltungsorts
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets ort
     *
     * @return string
     */
    public function getOrt()
    {
        return $this->container['ort'];
    }

    /**
     * Sets ort
     *
     * @param string $ort Ort der Anschrift des Veranstaltungsorts
     *
     * @return $this
     */
    public function setOrt($ort)
    {
        $this->container['ort'] = $ort;

        return $this;
    }

    /**
     * Gets plz
     *
     * @return string
     */
    public function getPlz()
    {
        return $this->container['plz'];
    }

    /**
     * Sets plz
     *
     * @param string $plz PLZ der Anschrift des Veranstaltungsorts
     *
     * @return $this
     */
    public function setPlz($plz)
    {
        $this->container['plz'] = $plz;

        return $this;
    }

    /**
     * Gets strasse
     *
     * @return string
     */
    public function getStrasse()
    {
        return $this->container['strasse'];
    }

    /**
     * Sets strasse
     *
     * @param string $strasse Straße der Anschrift des Veranstaltungsorts
     *
     * @return $this
     */
    public function setStrasse($strasse)
    {
        $this->container['strasse'] = $strasse;

        return $this;
    }

    /**
     * Gets telefon1
     *
     * @return string
     */
    public function getTelefon1()
    {
        return $this->container['telefon1'];
    }

    /**
     * Sets telefon1
     *
     * @param string $telefon1 Telefonnummer des Veranstaltungsorts
     *
     * @return $this
     */
    public function setTelefon1($telefon1)
    {
        $this->container['telefon1'] = $telefon1;

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


