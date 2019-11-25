<?php
/**
 * TeilnehmerAktionBuchenApiDto
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
 * TeilnehmerAktionBuchenApiDto Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TeilnehmerAktionBuchenApiDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TeilnehmerAktionBuchenApiDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'buchungsdatum_fremdsystem' => '\DateTime',
        'externe_referenz_nr' => 'string',
        'interne_auftragsnummer' => 'string',
        'links' => '\Swagger\Client\Model\Link[]',
        'teilnehmer_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'buchungsdatum_fremdsystem' => 'date',
        'externe_referenz_nr' => null,
        'interne_auftragsnummer' => null,
        'links' => null,
        'teilnehmer_id' => null
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
        'buchungsdatum_fremdsystem' => 'buchungsdatumFremdsystem',
        'externe_referenz_nr' => 'externeReferenzNr',
        'interne_auftragsnummer' => 'interneAuftragsnummer',
        'links' => 'links',
        'teilnehmer_id' => 'teilnehmerID'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'buchungsdatum_fremdsystem' => 'setBuchungsdatumFremdsystem',
        'externe_referenz_nr' => 'setExterneReferenzNr',
        'interne_auftragsnummer' => 'setInterneAuftragsnummer',
        'links' => 'setLinks',
        'teilnehmer_id' => 'setTeilnehmerId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'buchungsdatum_fremdsystem' => 'getBuchungsdatumFremdsystem',
        'externe_referenz_nr' => 'getExterneReferenzNr',
        'interne_auftragsnummer' => 'getInterneAuftragsnummer',
        'links' => 'getLinks',
        'teilnehmer_id' => 'getTeilnehmerId'
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
        $this->container['buchungsdatum_fremdsystem'] = isset($data['buchungsdatum_fremdsystem']) ? $data['buchungsdatum_fremdsystem'] : null;
        $this->container['externe_referenz_nr'] = isset($data['externe_referenz_nr']) ? $data['externe_referenz_nr'] : null;
        $this->container['interne_auftragsnummer'] = isset($data['interne_auftragsnummer']) ? $data['interne_auftragsnummer'] : null;
        $this->container['links'] = isset($data['links']) ? $data['links'] : null;
        $this->container['teilnehmer_id'] = isset($data['teilnehmer_id']) ? $data['teilnehmer_id'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['teilnehmer_id'] === null) {
            $invalidProperties[] = "'teilnehmer_id' can't be null";
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
     * Gets buchungsdatum_fremdsystem
     *
     * @return \DateTime
     */
    public function getBuchungsdatumFremdsystem()
    {
        return $this->container['buchungsdatum_fremdsystem'];
    }

    /**
     * Sets buchungsdatum_fremdsystem
     *
     * @param \DateTime $buchungsdatum_fremdsystem Das Buchungsdatum-Fremdsystem der Teinehmerbuchung, wird mit dem Tagesdatum vorbelegt, falls kein Wert übermittelt wird.
     *
     * @return $this
     */
    public function setBuchungsdatumFremdsystem($buchungsdatum_fremdsystem)
    {
        $this->container['buchungsdatum_fremdsystem'] = $buchungsdatum_fremdsystem;

        return $this;
    }

    /**
     * Gets externe_referenz_nr
     *
     * @return string
     */
    public function getExterneReferenzNr()
    {
        return $this->container['externe_referenz_nr'];
    }

    /**
     * Sets externe_referenz_nr
     *
     * @param string $externe_referenz_nr Die Externe-Refernez-Nr. der Teinehmerbuchung (Maximal 30 Zeichen
     *
     * @return $this
     */
    public function setExterneReferenzNr($externe_referenz_nr)
    {
        $this->container['externe_referenz_nr'] = $externe_referenz_nr;

        return $this;
    }

    /**
     * Gets interne_auftragsnummer
     *
     * @return string
     */
    public function getInterneAuftragsnummer()
    {
        return $this->container['interne_auftragsnummer'];
    }

    /**
     * Sets interne_auftragsnummer
     *
     * @param string $interne_auftragsnummer Die Interne Auftragsnummer der Teinehmerbuchung (Maximal 30 Zeichen
     *
     * @return $this
     */
    public function setInterneAuftragsnummer($interne_auftragsnummer)
    {
        $this->container['interne_auftragsnummer'] = $interne_auftragsnummer;

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
     * Gets teilnehmer_id
     *
     * @return string
     */
    public function getTeilnehmerId()
    {
        return $this->container['teilnehmer_id'];
    }

    /**
     * Sets teilnehmer_id
     *
     * @param string $teilnehmer_id ID des Teilnehmers der auf das Web Based Training gebucht werden soll.
     *
     * @return $this
     */
    public function setTeilnehmerId($teilnehmer_id)
    {
        $this->container['teilnehmer_id'] = $teilnehmer_id;

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


