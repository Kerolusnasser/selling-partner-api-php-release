<?php

/**
 * InboundShipment.
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
 * The Selling Partner API for Amazon Warehousing and Distribution.
 *
 * The Selling Partner API for Amazon Warehousing and Distribution (AWD) provides programmatic access to information about AWD shipments and inventory.
 *
 * The version of the OpenAPI document: 2024-05-09
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.9.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SpApi\Model\awd\v2024_05_09;

use SpApi\Model\ModelInterface;
use SpApi\ObjectSerializer;

/**
 * InboundShipment Class Doc Comment.
 *
 * @category Class
 *
 * @description Represents an AWD inbound shipment.
 *
 * @author   OpenAPI Generator team
 *
 * @see     https://openapi-generator.tech
 *
 * @implements \ArrayAccess<string, mixed>
 */
class InboundShipment implements ModelInterface, \ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     */
    protected static string $openAPIModelName = 'InboundShipment';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'carrier_code' => '\SpApi\Model\awd\v2024_05_09\CarrierCode',
        'created_at' => '\DateTime',
        'destination_address' => '\SpApi\Model\awd\v2024_05_09\Address',
        'external_reference_id' => 'string',
        'order_id' => 'string',
        'origin_address' => '\SpApi\Model\awd\v2024_05_09\Address',
        'received_quantity' => '\SpApi\Model\awd\v2024_05_09\InventoryQuantity[]',
        'ship_by' => '\DateTime',
        'shipment_container_quantities' => '\SpApi\Model\awd\v2024_05_09\DistributionPackageQuantity[]',
        'shipment_id' => 'string',
        'shipment_sku_quantities' => '\SpApi\Model\awd\v2024_05_09\SkuQuantity[]',
        'destination_region' => 'string',
        'shipment_status' => '\SpApi\Model\awd\v2024_05_09\InboundShipmentStatus',
        'tracking_id' => 'string',
        'updated_at' => '\DateTime',
        'warehouse_reference_id' => 'string'];

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
        'carrier_code' => null,
        'created_at' => 'date-time',
        'destination_address' => null,
        'external_reference_id' => null,
        'order_id' => null,
        'origin_address' => null,
        'received_quantity' => null,
        'ship_by' => 'date-time',
        'shipment_container_quantities' => null,
        'shipment_id' => null,
        'shipment_sku_quantities' => null,
        'destination_region' => null,
        'shipment_status' => null,
        'tracking_id' => null,
        'updated_at' => 'date-time',
        'warehouse_reference_id' => null];

    /**
     * Array of nullable properties. Used for (de)serialization.
     *
     * @var bool[]
     */
    protected static array $openAPINullables = [
        'carrier_code' => true,
        'created_at' => true,
        'destination_address' => false,
        'external_reference_id' => true,
        'order_id' => false,
        'origin_address' => false,
        'received_quantity' => true,
        'ship_by' => true,
        'shipment_container_quantities' => false,
        'shipment_id' => false,
        'shipment_sku_quantities' => true,
        'destination_region' => true,
        'shipment_status' => false,
        'tracking_id' => true,
        'updated_at' => true,
        'warehouse_reference_id' => true,
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
        'carrier_code' => 'carrierCode',
        'created_at' => 'createdAt',
        'destination_address' => 'destinationAddress',
        'external_reference_id' => 'externalReferenceId',
        'order_id' => 'orderId',
        'origin_address' => 'originAddress',
        'received_quantity' => 'receivedQuantity',
        'ship_by' => 'shipBy',
        'shipment_container_quantities' => 'shipmentContainerQuantities',
        'shipment_id' => 'shipmentId',
        'shipment_sku_quantities' => 'shipmentSkuQuantities',
        'destination_region' => 'destinationRegion',
        'shipment_status' => 'shipmentStatus',
        'tracking_id' => 'trackingId',
        'updated_at' => 'updatedAt',
        'warehouse_reference_id' => 'warehouseReferenceId',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'carrier_code' => 'setCarrierCode',
        'created_at' => 'setCreatedAt',
        'destination_address' => 'setDestinationAddress',
        'external_reference_id' => 'setExternalReferenceId',
        'order_id' => 'setOrderId',
        'origin_address' => 'setOriginAddress',
        'received_quantity' => 'setReceivedQuantity',
        'ship_by' => 'setShipBy',
        'shipment_container_quantities' => 'setShipmentContainerQuantities',
        'shipment_id' => 'setShipmentId',
        'shipment_sku_quantities' => 'setShipmentSkuQuantities',
        'destination_region' => 'setDestinationRegion',
        'shipment_status' => 'setShipmentStatus',
        'tracking_id' => 'setTrackingId',
        'updated_at' => 'setUpdatedAt',
        'warehouse_reference_id' => 'setWarehouseReferenceId',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'carrier_code' => 'getCarrierCode',
        'created_at' => 'getCreatedAt',
        'destination_address' => 'getDestinationAddress',
        'external_reference_id' => 'getExternalReferenceId',
        'order_id' => 'getOrderId',
        'origin_address' => 'getOriginAddress',
        'received_quantity' => 'getReceivedQuantity',
        'ship_by' => 'getShipBy',
        'shipment_container_quantities' => 'getShipmentContainerQuantities',
        'shipment_id' => 'getShipmentId',
        'shipment_sku_quantities' => 'getShipmentSkuQuantities',
        'destination_region' => 'getDestinationRegion',
        'shipment_status' => 'getShipmentStatus',
        'tracking_id' => 'getTrackingId',
        'updated_at' => 'getUpdatedAt',
        'warehouse_reference_id' => 'getWarehouseReferenceId',
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
        $this->setIfExists('carrier_code', $data ?? [], null);
        $this->setIfExists('created_at', $data ?? [], null);
        $this->setIfExists('destination_address', $data ?? [], null);
        $this->setIfExists('external_reference_id', $data ?? [], null);
        $this->setIfExists('order_id', $data ?? [], null);
        $this->setIfExists('origin_address', $data ?? [], null);
        $this->setIfExists('received_quantity', $data ?? [], null);
        $this->setIfExists('ship_by', $data ?? [], null);
        $this->setIfExists('shipment_container_quantities', $data ?? [], null);
        $this->setIfExists('shipment_id', $data ?? [], null);
        $this->setIfExists('shipment_sku_quantities', $data ?? [], null);
        $this->setIfExists('destination_region', $data ?? [], null);
        $this->setIfExists('shipment_status', $data ?? [], null);
        $this->setIfExists('tracking_id', $data ?? [], null);
        $this->setIfExists('updated_at', $data ?? [], null);
        $this->setIfExists('warehouse_reference_id', $data ?? [], null);
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

        if (null === $this->container['destination_address']) {
            $invalidProperties[] = "'destination_address' can't be null";
        }
        if (null === $this->container['order_id']) {
            $invalidProperties[] = "'order_id' can't be null";
        }
        if (mb_strlen($this->container['order_id']) < 1) {
            $invalidProperties[] = "invalid value for 'order_id', the character length must be bigger than or equal to 1.";
        }

        if (null === $this->container['origin_address']) {
            $invalidProperties[] = "'origin_address' can't be null";
        }
        if (null === $this->container['shipment_container_quantities']) {
            $invalidProperties[] = "'shipment_container_quantities' can't be null";
        }
        if (null === $this->container['shipment_id']) {
            $invalidProperties[] = "'shipment_id' can't be null";
        }
        if (mb_strlen($this->container['shipment_id']) < 1) {
            $invalidProperties[] = "invalid value for 'shipment_id', the character length must be bigger than or equal to 1.";
        }

        if (null === $this->container['shipment_status']) {
            $invalidProperties[] = "'shipment_status' can't be null";
        }
        if (!is_null($this->container['tracking_id']) && (mb_strlen($this->container['tracking_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'tracking_id', the character length must be bigger than or equal to 1.";
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
     * Gets carrier_code.
     */
    public function getCarrierCode(): ?CarrierCode
    {
        return $this->container['carrier_code'];
    }

    /**
     * Sets carrier_code.
     *
     * @param null|CarrierCode $carrier_code carrier_code
     */
    public function setCarrierCode(?CarrierCode $carrier_code): self
    {
        if (is_null($carrier_code)) {
            array_push($this->openAPINullablesSetToNull, 'carrier_code');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('carrier_code', $nullablesSetToNull);
            if (false !== $index) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['carrier_code'] = $carrier_code;

        return $this;
    }

    /**
     * Gets created_at.
     */
    public function getCreatedAt(): ?\DateTime
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at.
     *
     * @param null|\DateTime $created_at Timestamp when the shipment was created. The date is returned in <a href='https://developer-docs.amazon.com/sp-api/docs/iso-8601'>ISO 8601</a> format.
     */
    public function setCreatedAt(?\DateTime $created_at): self
    {
        if (is_null($created_at)) {
            array_push($this->openAPINullablesSetToNull, 'created_at');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('created_at', $nullablesSetToNull);
            if (false !== $index) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets destination_address.
     */
    public function getDestinationAddress(): Address
    {
        return $this->container['destination_address'];
    }

    /**
     * Sets destination_address.
     *
     * @param Address $destination_address destination_address
     */
    public function setDestinationAddress(Address $destination_address): self
    {
        if (is_null($destination_address)) {
            throw new \InvalidArgumentException('non-nullable destination_address cannot be null');
        }
        $this->container['destination_address'] = $destination_address;

        return $this;
    }

    /**
     * Gets external_reference_id.
     */
    public function getExternalReferenceId(): ?string
    {
        return $this->container['external_reference_id'];
    }

    /**
     * Sets external_reference_id.
     *
     * @param null|string $external_reference_id Client-provided reference ID that can correlate this shipment to client resources. For example, to map this shipment to an internal bookkeeping order record.
     */
    public function setExternalReferenceId(?string $external_reference_id): self
    {
        if (is_null($external_reference_id)) {
            array_push($this->openAPINullablesSetToNull, 'external_reference_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('external_reference_id', $nullablesSetToNull);
            if (false !== $index) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['external_reference_id'] = $external_reference_id;

        return $this;
    }

    /**
     * Gets order_id.
     */
    public function getOrderId(): string
    {
        return $this->container['order_id'];
    }

    /**
     * Sets order_id.
     *
     * @param string $order_id the AWD inbound order ID that this inbound shipment belongs to
     */
    public function setOrderId(string $order_id): self
    {
        if (is_null($order_id)) {
            throw new \InvalidArgumentException('non-nullable order_id cannot be null');
        }

        if (mb_strlen($order_id) < 1) {
            throw new \InvalidArgumentException('invalid length for $order_id when calling InboundShipment., must be bigger than or equal to 1.');
        }

        $this->container['order_id'] = $order_id;

        return $this;
    }

    /**
     * Gets origin_address.
     */
    public function getOriginAddress(): Address
    {
        return $this->container['origin_address'];
    }

    /**
     * Sets origin_address.
     *
     * @param Address $origin_address origin_address
     */
    public function setOriginAddress(Address $origin_address): self
    {
        if (is_null($origin_address)) {
            throw new \InvalidArgumentException('non-nullable origin_address cannot be null');
        }
        $this->container['origin_address'] = $origin_address;

        return $this;
    }

    /**
     * Gets received_quantity.
     */
    public function getReceivedQuantity(): ?array
    {
        return $this->container['received_quantity'];
    }

    /**
     * Sets received_quantity.
     *
     * @param null|array $received_quantity quantity received (at the receiving end) as part of this shipment
     */
    public function setReceivedQuantity(?array $received_quantity): self
    {
        if (is_null($received_quantity)) {
            array_push($this->openAPINullablesSetToNull, 'received_quantity');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('received_quantity', $nullablesSetToNull);
            if (false !== $index) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['received_quantity'] = $received_quantity;

        return $this;
    }

    /**
     * Gets ship_by.
     */
    public function getShipBy(): ?\DateTime
    {
        return $this->container['ship_by'];
    }

    /**
     * Sets ship_by.
     *
     * @param null|\DateTime $ship_by timestamp when the shipment will be shipped
     */
    public function setShipBy(?\DateTime $ship_by): self
    {
        if (is_null($ship_by)) {
            array_push($this->openAPINullablesSetToNull, 'ship_by');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ship_by', $nullablesSetToNull);
            if (false !== $index) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['ship_by'] = $ship_by;

        return $this;
    }

    /**
     * Gets shipment_container_quantities.
     */
    public function getShipmentContainerQuantities(): array
    {
        return $this->container['shipment_container_quantities'];
    }

    /**
     * Sets shipment_container_quantities.
     *
     * @param array $shipment_container_quantities packages that are part of this shipment
     */
    public function setShipmentContainerQuantities(array $shipment_container_quantities): self
    {
        if (is_null($shipment_container_quantities)) {
            throw new \InvalidArgumentException('non-nullable shipment_container_quantities cannot be null');
        }
        $this->container['shipment_container_quantities'] = $shipment_container_quantities;

        return $this;
    }

    /**
     * Gets shipment_id.
     */
    public function getShipmentId(): string
    {
        return $this->container['shipment_id'];
    }

    /**
     * Sets shipment_id.
     *
     * @param string $shipment_id unique shipment ID
     */
    public function setShipmentId(string $shipment_id): self
    {
        if (is_null($shipment_id)) {
            throw new \InvalidArgumentException('non-nullable shipment_id cannot be null');
        }

        if (mb_strlen($shipment_id) < 1) {
            throw new \InvalidArgumentException('invalid length for $shipment_id when calling InboundShipment., must be bigger than or equal to 1.');
        }

        $this->container['shipment_id'] = $shipment_id;

        return $this;
    }

    /**
     * Gets shipment_sku_quantities.
     */
    public function getShipmentSkuQuantities(): ?array
    {
        return $this->container['shipment_sku_quantities'];
    }

    /**
     * Sets shipment_sku_quantities.
     *
     * @param null|array $shipment_sku_quantities Quantity details at SKU level for the shipment. This attribute will only appear if the skuQuantities parameter in the request is set to SHOW.
     */
    public function setShipmentSkuQuantities(?array $shipment_sku_quantities): self
    {
        if (is_null($shipment_sku_quantities)) {
            array_push($this->openAPINullablesSetToNull, 'shipment_sku_quantities');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('shipment_sku_quantities', $nullablesSetToNull);
            if (false !== $index) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['shipment_sku_quantities'] = $shipment_sku_quantities;

        return $this;
    }

    /**
     * Gets destination_region.
     */
    public function getDestinationRegion(): ?string
    {
        return $this->container['destination_region'];
    }

    /**
     * Sets destination_region.
     *
     * @param null|string $destination_region Assigned region where the order will be shipped. This can differ from what was passed as preference. AWD currently supports following region IDs: [us-west, us-east, us-southcentral, us-southeast]
     */
    public function setDestinationRegion(?string $destination_region): self
    {
        if (is_null($destination_region)) {
            array_push($this->openAPINullablesSetToNull, 'destination_region');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('destination_region', $nullablesSetToNull);
            if (false !== $index) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['destination_region'] = $destination_region;

        return $this;
    }

    /**
     * Gets shipment_status.
     */
    public function getShipmentStatus(): string
    {
        return $this->container['shipment_status'];
    }

    /**
     * Sets shipment_status.
     *
     * @param string $shipment_status shipment_status
     */
    public function setShipmentStatus(string $shipment_status): self
    {
        if (is_null($shipment_status)) {
            throw new \InvalidArgumentException('non-nullable shipment_status cannot be null');
        }
        $this->container['shipment_status'] = $shipment_status;

        return $this;
    }

    /**
     * Gets tracking_id.
     */
    public function getTrackingId(): ?string
    {
        return $this->container['tracking_id'];
    }

    /**
     * Sets tracking_id.
     *
     * @param null|string $tracking_id carrier-unique tracking ID for this shipment
     */
    public function setTrackingId(?string $tracking_id): self
    {
        if (is_null($tracking_id)) {
            array_push($this->openAPINullablesSetToNull, 'tracking_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('tracking_id', $nullablesSetToNull);
            if (false !== $index) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($tracking_id) && (mb_strlen($tracking_id) < 1)) {
            throw new \InvalidArgumentException('invalid length for $tracking_id when calling InboundShipment., must be bigger than or equal to 1.');
        }

        $this->container['tracking_id'] = $tracking_id;

        return $this;
    }

    /**
     * Gets updated_at.
     */
    public function getUpdatedAt(): ?\DateTime
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at.
     *
     * @param null|\DateTime $updated_at Timestamp when the shipment was updated. The date is returned in <a href='https://developer-docs.amazon.com/sp-api/docs/iso-8601'>ISO 8601</a> format.
     */
    public function setUpdatedAt(?\DateTime $updated_at): self
    {
        if (is_null($updated_at)) {
            array_push($this->openAPINullablesSetToNull, 'updated_at');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('updated_at', $nullablesSetToNull);
            if (false !== $index) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['updated_at'] = $updated_at;

        return $this;
    }

    /**
     * Gets warehouse_reference_id.
     */
    public function getWarehouseReferenceId(): ?string
    {
        return $this->container['warehouse_reference_id'];
    }

    /**
     * Sets warehouse_reference_id.
     *
     * @param null|string $warehouse_reference_id An AWD-provided reference ID that you can use to interact with the warehouse. For example, a carrier appointment booking.
     */
    public function setWarehouseReferenceId(?string $warehouse_reference_id): self
    {
        if (is_null($warehouse_reference_id)) {
            array_push($this->openAPINullablesSetToNull, 'warehouse_reference_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('warehouse_reference_id', $nullablesSetToNull);
            if (false !== $index) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['warehouse_reference_id'] = $warehouse_reference_id;

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
