<?php

/**
 * FulfillmentShipmentPackage.
 *
 * PHP version 8.3
 *
 * @category Class
 *
 * @author   OpenAPI Generator team
 *
 * @see     https://openapi-generator.tech
 */

/**
 * Selling Partner APIs for Fulfillment Outbound.
 *
 * The Selling Partner API for Fulfillment Outbound lets you create applications that help a seller fulfill Multi-Channel Fulfillment orders using their inventory in Amazon's fulfillment network. You can get information on both potential and existing fulfillment orders.
 *
 * The version of the OpenAPI document: 2020-07-01
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.9.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SpApi\Model\fulfillment\outbound\v2020_07_01;

use SpApi\Model\ModelInterface;
use SpApi\ObjectSerializer;

/**
 * FulfillmentShipmentPackage Class Doc Comment.
 *
 * @category Class
 *
 * @description Package information for a shipment in a fulfillment order.
 *
 * @author   OpenAPI Generator team
 *
 * @see     https://openapi-generator.tech
 *
 * @implements \ArrayAccess<string, mixed>
 */
class FulfillmentShipmentPackage implements ModelInterface, \ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     */
    protected static string $openAPIModelName = 'FulfillmentShipmentPackage';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'package_number' => 'int',
        'carrier_code' => 'string',
        'tracking_number' => 'string',
        'estimated_arrival_date' => '\DateTime',
        'locker_details' => '\SpApi\Model\fulfillment\outbound\v2020_07_01\LockerDetails',
        'delivery_information' => '\SpApi\Model\fulfillment\outbound\v2020_07_01\DeliveryInformation'];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     *
     * @phpstan-var array<string, string|null>
     *
     * @psalm-var array<string, string|null>
     */
    protected static array $openAPIFormats = [
        'package_number' => 'int32',
        'carrier_code' => null,
        'tracking_number' => null,
        'estimated_arrival_date' => 'date-time',
        'locker_details' => null,
        'delivery_information' => null];

    /**
     * Array of nullable properties. Used for (de)serialization.
     *
     * @var bool[]
     */
    protected static array $openAPINullables = [
        'package_number' => false,
        'carrier_code' => false,
        'tracking_number' => true,
        'estimated_arrival_date' => true,
        'locker_details' => true,
        'delivery_information' => true,
    ];

    /**
     * If a nullable field gets set to null, insert it here.
     *
     * @var bool[]
     */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'package_number' => 'packageNumber',
        'carrier_code' => 'carrierCode',
        'tracking_number' => 'trackingNumber',
        'estimated_arrival_date' => 'estimatedArrivalDate',
        'locker_details' => 'lockerDetails',
        'delivery_information' => 'deliveryInformation',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'package_number' => 'setPackageNumber',
        'carrier_code' => 'setCarrierCode',
        'tracking_number' => 'setTrackingNumber',
        'estimated_arrival_date' => 'setEstimatedArrivalDate',
        'locker_details' => 'setLockerDetails',
        'delivery_information' => 'setDeliveryInformation',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'package_number' => 'getPackageNumber',
        'carrier_code' => 'getCarrierCode',
        'tracking_number' => 'getTrackingNumber',
        'estimated_arrival_date' => 'getEstimatedArrivalDate',
        'locker_details' => 'getLockerDetails',
        'delivery_information' => 'getDeliveryInformation',
    ];

    /**
     * Associative array for storing property values.
     */
    protected array $container = [];

    /**
     * Constructor.
     *
     * @param null|array $data Associated array of property values
     *                         initializing the model
     */
    public function __construct(?array $data = null)
    {
        $this->setIfExists('package_number', $data ?? [], null);
        $this->setIfExists('carrier_code', $data ?? [], null);
        $this->setIfExists('tracking_number', $data ?? [], null);
        $this->setIfExists('estimated_arrival_date', $data ?? [], null);
        $this->setIfExists('locker_details', $data ?? [], null);
        $this->setIfExists('delivery_information', $data ?? [], null);
    }

    /**
     * Gets the string presentation of the object.
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
     * Array of property to type mappings. Used for (de)serialization.
     */
    public static function openAPITypes(): array
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization.
     */
    public static function openAPIFormats(): array
    {
        return self::$openAPIFormats;
    }

    /**
     * Checks if a property is nullable.
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     */
    public static function attributeMap(): array
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     */
    public static function setters(): array
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests).
     */
    public static function getters(): array
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     */
    public function getModelName(): string
    {
        return self::$openAPIModelName;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties(): array
    {
        $invalidProperties = [];

        if (null === $this->container['package_number']) {
            $invalidProperties[] = "'package_number' can't be null";
        }
        if (null === $this->container['carrier_code']) {
            $invalidProperties[] = "'carrier_code' can't be null";
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed.
     *
     * @return bool True if all properties are valid
     */
    public function valid(): bool
    {
        return 0 === count($this->listInvalidProperties());
    }

    /**
     * Gets package_number.
     */
    public function getPackageNumber(): int
    {
        return $this->container['package_number'];
    }

    /**
     * Sets package_number.
     *
     * @param int $package_number identifies a package in a shipment
     */
    public function setPackageNumber(int $package_number): self
    {
        if (is_null($package_number)) {
            throw new \InvalidArgumentException('non-nullable package_number cannot be null');
        }
        $this->container['package_number'] = $package_number;

        return $this;
    }

    /**
     * Gets carrier_code.
     */
    public function getCarrierCode(): string
    {
        return $this->container['carrier_code'];
    }

    /**
     * Sets carrier_code.
     *
     * @param string $carrier_code identifies the carrier who will deliver the shipment to the recipient
     */
    public function setCarrierCode(string $carrier_code): self
    {
        if (is_null($carrier_code)) {
            throw new \InvalidArgumentException('non-nullable carrier_code cannot be null');
        }
        $this->container['carrier_code'] = $carrier_code;

        return $this;
    }

    /**
     * Gets tracking_number.
     */
    public function getTrackingNumber(): ?string
    {
        return $this->container['tracking_number'];
    }

    /**
     * Sets tracking_number.
     *
     * @param null|string $tracking_number the tracking number, if provided, can be used to obtain tracking and delivery information
     */
    public function setTrackingNumber(?string $tracking_number): self
    {
        if (is_null($tracking_number)) {
            array_push($this->openAPINullablesSetToNull, 'tracking_number');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('tracking_number', $nullablesSetToNull);
            if (false !== $index) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['tracking_number'] = $tracking_number;

        return $this;
    }

    /**
     * Gets estimated_arrival_date.
     */
    public function getEstimatedArrivalDate(): ?\DateTime
    {
        return $this->container['estimated_arrival_date'];
    }

    /**
     * Sets estimated_arrival_date.
     *
     * @param null|\DateTime $estimated_arrival_date Date timestamp
     */
    public function setEstimatedArrivalDate(?\DateTime $estimated_arrival_date): self
    {
        if (is_null($estimated_arrival_date)) {
            array_push($this->openAPINullablesSetToNull, 'estimated_arrival_date');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('estimated_arrival_date', $nullablesSetToNull);
            if (false !== $index) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['estimated_arrival_date'] = $estimated_arrival_date;

        return $this;
    }

    /**
     * Gets locker_details.
     */
    public function getLockerDetails(): ?LockerDetails
    {
        return $this->container['locker_details'];
    }

    /**
     * Sets locker_details.
     *
     * @param null|LockerDetails $locker_details locker_details
     */
    public function setLockerDetails(?LockerDetails $locker_details): self
    {
        if (is_null($locker_details)) {
            array_push($this->openAPINullablesSetToNull, 'locker_details');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('locker_details', $nullablesSetToNull);
            if (false !== $index) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['locker_details'] = $locker_details;

        return $this;
    }

    /**
     * Gets delivery_information.
     */
    public function getDeliveryInformation(): ?DeliveryInformation
    {
        return $this->container['delivery_information'];
    }

    /**
     * Sets delivery_information.
     *
     * @param null|DeliveryInformation $delivery_information delivery_information
     */
    public function setDeliveryInformation(?DeliveryInformation $delivery_information): self
    {
        if (is_null($delivery_information)) {
            array_push($this->openAPINullablesSetToNull, 'delivery_information');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('delivery_information', $nullablesSetToNull);
            if (false !== $index) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['delivery_information'] = $delivery_information;

        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param int $offset Offset
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param int $offset Offset
     *
     * @return null|mixed
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset): mixed
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param null|int $offset Offset
     * @param mixed    $value  Value to be set
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
     * @param int $offset Offset
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     *
     * @see https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed returns data which can be serialized by json_encode(), which is a value
     *               of any type other than a resource
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): mixed
    {
        return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets a header-safe presentation of the object.
     */
    public function toHeaderValue(): string
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }

    /**
     * Array of nullable properties.
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null.
     *
     * @return bool[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null.
     *
     * @param bool[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
     * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
     * $this->openAPINullablesSetToNull array.
     *
     * @param mixed $defaultValue
     */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }
}
