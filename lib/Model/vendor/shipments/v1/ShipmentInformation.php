<?php
/**
 * ShipmentInformation
 *
 * PHP version 8.3
 *
 * @category Class
 * @package  SpApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for Retail Procurement Shipments
 *
 * The Selling Partner API for Retail Procurement Shipments provides programmatic access to retail shipping data for vendors.
 *
 * The version of the OpenAPI document: v1
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.9.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SpApi\Model\vendor\shipments\v1;

use
ArrayAccess;
use SpApi\ObjectSerializer;
use SpApi\Model\ModelInterface;

/**
 * ShipmentInformation Class Doc Comment
 *
 * @category Class
 * @description Shipment Information details for Label request.
 * @package  SpApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ShipmentInformation implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'ShipmentInformation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
             'vendor_details' => '\SpApi\Model\vendor\shipments\v1\VendorDetails',
             'buyer_reference_number' => 'string',
             'ship_to_party' => '\SpApi\Model\vendor\shipments\v1\PartyIdentification',
             'ship_from_party' => '\SpApi\Model\vendor\shipments\v1\PartyIdentification',
             'warehouse_id' => 'string',
             'master_tracking_id' => 'string',
             'total_label_count' => 'int',
             'ship_mode' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
            'vendor_details' => null,
            'buyer_reference_number' => null,
            'ship_to_party' => null,
            'ship_from_party' => null,
            'warehouse_id' => null,
            'master_tracking_id' => null,
            'total_label_count' => null,
            'ship_mode' => null    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'vendor_details' => true,
        'buyer_reference_number' => true,
        'ship_to_party' => true,
        'ship_from_party' => true,
        'warehouse_id' => true,
        'master_tracking_id' => true,
        'total_label_count' => true,
        'ship_mode' => true
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes(): array
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats(): array
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'vendor_details' => 'vendorDetails',
                'buyer_reference_number' => 'buyerReferenceNumber',
                'ship_to_party' => 'shipToParty',
                'ship_from_party' => 'shipFromParty',
                'warehouse_id' => 'warehouseId',
                'master_tracking_id' => 'masterTrackingId',
                'total_label_count' => 'totalLabelCount',
                'ship_mode' => 'shipMode'
        
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'vendor_details' => 'setVendorDetails',
        'buyer_reference_number' => 'setBuyerReferenceNumber',
        'ship_to_party' => 'setShipToParty',
        'ship_from_party' => 'setShipFromParty',
        'warehouse_id' => 'setWarehouseId',
        'master_tracking_id' => 'setMasterTrackingId',
        'total_label_count' => 'setTotalLabelCount',
        'ship_mode' => 'setShipMode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'vendor_details' => 'getVendorDetails',
        'buyer_reference_number' => 'getBuyerReferenceNumber',
        'ship_to_party' => 'getShipToParty',
        'ship_from_party' => 'getShipFromParty',
        'warehouse_id' => 'getWarehouseId',
        'master_tracking_id' => 'getMasterTrackingId',
        'total_label_count' => 'getTotalLabelCount',
        'ship_mode' => 'getShipMode'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap(): array
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters(): array
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters(): array
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName(): string
    {
        return self::$openAPIModelName;
    }

    public const SHIP_MODE_SMALL_PARCEL = 'SmallParcel';
    public const SHIP_MODE_LTL = 'LTL';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getShipModeAllowableValues(): array
    {
        return [
            self::SHIP_MODE_SMALL_PARCEL,
            self::SHIP_MODE_LTL,
        ];
    }

    /**
     * Associative array for storing property values
     *
     * @var array
     */
    protected array $container = [];

    /**
     * Constructor
     *
     * @param array|null $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(?array $data = null)
    {
        $this->setIfExists('vendor_details', $data ?? [], null);
        $this->setIfExists('buyer_reference_number', $data ?? [], null);
        $this->setIfExists('ship_to_party', $data ?? [], null);
        $this->setIfExists('ship_from_party', $data ?? [], null);
        $this->setIfExists('warehouse_id', $data ?? [], null);
        $this->setIfExists('master_tracking_id', $data ?? [], null);
        $this->setIfExists('total_label_count', $data ?? [], null);
        $this->setIfExists('ship_mode', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties(): array
    {
        $invalidProperties = [];

        $allowedValues = $this->getShipModeAllowableValues();
        if (!is_null($this->container['ship_mode']) && !in_array($this->container['ship_mode'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'ship_mode', must be one of '%s'",
                $this->container['ship_mode'],
                implode("', '", $allowedValues)
            );
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid(): bool
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets vendor_details
     *
     * @return \SpApi\Model\vendor\shipments\v1\VendorDetails|null
     */
    public function getVendorDetails(): ?\SpApi\Model\vendor\shipments\v1\VendorDetails
    {
        return $this->container['vendor_details'];
    }

    /**
     * Sets vendor_details
     *
     * @param \SpApi\Model\vendor\shipments\v1\VendorDetails|null $vendor_details vendor_details
     *
     * @return self
     */
    public function setVendorDetails(?\SpApi\Model\vendor\shipments\v1\VendorDetails $vendor_details): self
    {
        if (is_null($vendor_details)) {
            array_push($this->openAPINullablesSetToNull, 'vendor_details');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('vendor_details', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['vendor_details'] = $vendor_details;

        return $this;
    }

    /**
     * Gets buyer_reference_number
     *
     * @return string|null
     */
    public function getBuyerReferenceNumber(): ?string
    {
        return $this->container['buyer_reference_number'];
    }

    /**
     * Sets buyer_reference_number
     *
     * @param string|null $buyer_reference_number The buyer reference number is a unique identifier generated by the buyer for all Collect and WePay shipments.
     *
     * @return self
     */
    public function setBuyerReferenceNumber(?string $buyer_reference_number): self
    {
        if (is_null($buyer_reference_number)) {
            array_push($this->openAPINullablesSetToNull, 'buyer_reference_number');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('buyer_reference_number', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['buyer_reference_number'] = $buyer_reference_number;

        return $this;
    }

    /**
     * Gets ship_to_party
     *
     * @return \SpApi\Model\vendor\shipments\v1\PartyIdentification|null
     */
    public function getShipToParty(): ?\SpApi\Model\vendor\shipments\v1\PartyIdentification
    {
        return $this->container['ship_to_party'];
    }

    /**
     * Sets ship_to_party
     *
     * @param \SpApi\Model\vendor\shipments\v1\PartyIdentification|null $ship_to_party ship_to_party
     *
     * @return self
     */
    public function setShipToParty(?\SpApi\Model\vendor\shipments\v1\PartyIdentification $ship_to_party): self
    {
        if (is_null($ship_to_party)) {
            array_push($this->openAPINullablesSetToNull, 'ship_to_party');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ship_to_party', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['ship_to_party'] = $ship_to_party;

        return $this;
    }

    /**
     * Gets ship_from_party
     *
     * @return \SpApi\Model\vendor\shipments\v1\PartyIdentification|null
     */
    public function getShipFromParty(): ?\SpApi\Model\vendor\shipments\v1\PartyIdentification
    {
        return $this->container['ship_from_party'];
    }

    /**
     * Sets ship_from_party
     *
     * @param \SpApi\Model\vendor\shipments\v1\PartyIdentification|null $ship_from_party ship_from_party
     *
     * @return self
     */
    public function setShipFromParty(?\SpApi\Model\vendor\shipments\v1\PartyIdentification $ship_from_party): self
    {
        if (is_null($ship_from_party)) {
            array_push($this->openAPINullablesSetToNull, 'ship_from_party');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ship_from_party', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['ship_from_party'] = $ship_from_party;

        return $this;
    }

    /**
     * Gets warehouse_id
     *
     * @return string|null
     */
    public function getWarehouseId(): ?string
    {
        return $this->container['warehouse_id'];
    }

    /**
     * Sets warehouse_id
     *
     * @param string|null $warehouse_id Vendor Warehouse ID from where the shipment is scheduled to be picked up by buyer / Carrier.
     *
     * @return self
     */
    public function setWarehouseId(?string $warehouse_id): self
    {
        if (is_null($warehouse_id)) {
            array_push($this->openAPINullablesSetToNull, 'warehouse_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('warehouse_id', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['warehouse_id'] = $warehouse_id;

        return $this;
    }

    /**
     * Gets master_tracking_id
     *
     * @return string|null
     */
    public function getMasterTrackingId(): ?string
    {
        return $this->container['master_tracking_id'];
    }

    /**
     * Sets master_tracking_id
     *
     * @param string|null $master_tracking_id Unique Id with  which  the shipment can be tracked for Small Parcels.
     *
     * @return self
     */
    public function setMasterTrackingId(?string $master_tracking_id): self
    {
        if (is_null($master_tracking_id)) {
            array_push($this->openAPINullablesSetToNull, 'master_tracking_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('master_tracking_id', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['master_tracking_id'] = $master_tracking_id;

        return $this;
    }

    /**
     * Gets total_label_count
     *
     * @return int|null
     */
    public function getTotalLabelCount(): ?int
    {
        return $this->container['total_label_count'];
    }

    /**
     * Sets total_label_count
     *
     * @param int|null $total_label_count Number of Labels that are created as part of this shipment.
     *
     * @return self
     */
    public function setTotalLabelCount(?int $total_label_count): self
    {
        if (is_null($total_label_count)) {
            array_push($this->openAPINullablesSetToNull, 'total_label_count');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('total_label_count', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['total_label_count'] = $total_label_count;

        return $this;
    }

    /**
     * Gets ship_mode
     *
     * @return string|null
     */
    public function getShipMode(): ?string
    {
        return $this->container['ship_mode'];
    }

    /**
     * Sets ship_mode
     *
     * @param string|null $ship_mode Type of shipment whether it is Small Parcel
     *
     * @return self
     */
    public function setShipMode(?string $ship_mode): self
    {
        if (is_null($ship_mode)) {
            array_push($this->openAPINullablesSetToNull, 'ship_mode');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ship_mode', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $allowedValues = $this->getShipModeAllowableValues();
        if (!is_null($ship_mode) && !in_array($ship_mode, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'ship_mode', must be one of '%s'",
                    $ship_mode,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['ship_mode'] = $ship_mode;

        return $this;
    }


    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset): mixed
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, mixed $value): void
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
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): mixed
    {
       return ObjectSerializer::sanitizeForSerialization($this);
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

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue(): string
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


