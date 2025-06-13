<?php
/**
 * ShipmentConfirmation
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
 * ShipmentConfirmation Class Doc Comment
 *
 * @category Class
 * @description A list of one or more shipment confirmations.
 * @package  SpApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ShipmentConfirmation implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'ShipmentConfirmation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
             'shipment_identifier' => 'string',
             'shipment_confirmation_type' => 'string',
             'shipment_type' => 'string',
             'shipment_structure' => 'string',
             'transportation_details' => '\SpApi\Model\vendor\shipments\v1\TransportationDetailsForShipmentConfirmation',
             'amazon_reference_number' => 'string',
             'shipment_confirmation_date' => '\DateTime',
             'shipped_date' => '\DateTime',
             'estimated_delivery_date' => '\DateTime',
             'selling_party' => '\SpApi\Model\vendor\shipments\v1\PartyIdentification',
             'ship_from_party' => '\SpApi\Model\vendor\shipments\v1\PartyIdentification',
             'ship_to_party' => '\SpApi\Model\vendor\shipments\v1\PartyIdentification',
             'shipment_measurements' => '\SpApi\Model\vendor\shipments\v1\ShipmentMeasurements',
             'import_details' => '\SpApi\Model\vendor\shipments\v1\ImportDetails',
             'shipped_items' => '\SpApi\Model\vendor\shipments\v1\Item[]',
             'cartons' => '\SpApi\Model\vendor\shipments\v1\Carton[]',
             'pallets' => '\SpApi\Model\vendor\shipments\v1\Pallet[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
            'shipment_identifier' => null,
            'shipment_confirmation_type' => null,
            'shipment_type' => null,
            'shipment_structure' => null,
            'transportation_details' => null,
            'amazon_reference_number' => null,
            'shipment_confirmation_date' => 'date-time',
            'shipped_date' => 'date-time',
            'estimated_delivery_date' => 'date-time',
            'selling_party' => null,
            'ship_from_party' => null,
            'ship_to_party' => null,
            'shipment_measurements' => null,
            'import_details' => null,
            'shipped_items' => null,
            'cartons' => null,
            'pallets' => null    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'shipment_identifier' => false,
        'shipment_confirmation_type' => false,
        'shipment_type' => true,
        'shipment_structure' => true,
        'transportation_details' => true,
        'amazon_reference_number' => true,
        'shipment_confirmation_date' => false,
        'shipped_date' => true,
        'estimated_delivery_date' => true,
        'selling_party' => false,
        'ship_from_party' => false,
        'ship_to_party' => false,
        'shipment_measurements' => true,
        'import_details' => true,
        'shipped_items' => false,
        'cartons' => true,
        'pallets' => true
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
        'shipment_identifier' => 'shipmentIdentifier',
                'shipment_confirmation_type' => 'shipmentConfirmationType',
                'shipment_type' => 'shipmentType',
                'shipment_structure' => 'shipmentStructure',
                'transportation_details' => 'transportationDetails',
                'amazon_reference_number' => 'amazonReferenceNumber',
                'shipment_confirmation_date' => 'shipmentConfirmationDate',
                'shipped_date' => 'shippedDate',
                'estimated_delivery_date' => 'estimatedDeliveryDate',
                'selling_party' => 'sellingParty',
                'ship_from_party' => 'shipFromParty',
                'ship_to_party' => 'shipToParty',
                'shipment_measurements' => 'shipmentMeasurements',
                'import_details' => 'importDetails',
                'shipped_items' => 'shippedItems',
                'cartons' => 'cartons',
                'pallets' => 'pallets'
        
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'shipment_identifier' => 'setShipmentIdentifier',
        'shipment_confirmation_type' => 'setShipmentConfirmationType',
        'shipment_type' => 'setShipmentType',
        'shipment_structure' => 'setShipmentStructure',
        'transportation_details' => 'setTransportationDetails',
        'amazon_reference_number' => 'setAmazonReferenceNumber',
        'shipment_confirmation_date' => 'setShipmentConfirmationDate',
        'shipped_date' => 'setShippedDate',
        'estimated_delivery_date' => 'setEstimatedDeliveryDate',
        'selling_party' => 'setSellingParty',
        'ship_from_party' => 'setShipFromParty',
        'ship_to_party' => 'setShipToParty',
        'shipment_measurements' => 'setShipmentMeasurements',
        'import_details' => 'setImportDetails',
        'shipped_items' => 'setShippedItems',
        'cartons' => 'setCartons',
        'pallets' => 'setPallets'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'shipment_identifier' => 'getShipmentIdentifier',
        'shipment_confirmation_type' => 'getShipmentConfirmationType',
        'shipment_type' => 'getShipmentType',
        'shipment_structure' => 'getShipmentStructure',
        'transportation_details' => 'getTransportationDetails',
        'amazon_reference_number' => 'getAmazonReferenceNumber',
        'shipment_confirmation_date' => 'getShipmentConfirmationDate',
        'shipped_date' => 'getShippedDate',
        'estimated_delivery_date' => 'getEstimatedDeliveryDate',
        'selling_party' => 'getSellingParty',
        'ship_from_party' => 'getShipFromParty',
        'ship_to_party' => 'getShipToParty',
        'shipment_measurements' => 'getShipmentMeasurements',
        'import_details' => 'getImportDetails',
        'shipped_items' => 'getShippedItems',
        'cartons' => 'getCartons',
        'pallets' => 'getPallets'
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

    public const SHIPMENT_CONFIRMATION_TYPE_ORIGINAL = 'Original';
    public const SHIPMENT_CONFIRMATION_TYPE_REPLACE = 'Replace';
    public const SHIPMENT_TYPE_TRUCK_LOAD = 'TruckLoad';
    public const SHIPMENT_TYPE_LESS_THAN_TRUCK_LOAD = 'LessThanTruckLoad';
    public const SHIPMENT_TYPE_SMALL_PARCEL = 'SmallParcel';
    public const SHIPMENT_STRUCTURE_PALLETIZED_ASSORTMENT_CASE = 'PalletizedAssortmentCase';
    public const SHIPMENT_STRUCTURE_LOOSE_ASSORTMENT_CASE = 'LooseAssortmentCase';
    public const SHIPMENT_STRUCTURE_PALLET_OF_ITEMS = 'PalletOfItems';
    public const SHIPMENT_STRUCTURE_PALLETIZED_STANDARD_CASE = 'PalletizedStandardCase';
    public const SHIPMENT_STRUCTURE_LOOSE_STANDARD_CASE = 'LooseStandardCase';
    public const SHIPMENT_STRUCTURE_MASTER_PALLET = 'MasterPallet';
    public const SHIPMENT_STRUCTURE_MASTER_CASE = 'MasterCase';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getShipmentConfirmationTypeAllowableValues(): array
    {
        return [
            self::SHIPMENT_CONFIRMATION_TYPE_ORIGINAL,
            self::SHIPMENT_CONFIRMATION_TYPE_REPLACE,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getShipmentTypeAllowableValues(): array
    {
        return [
            self::SHIPMENT_TYPE_TRUCK_LOAD,
            self::SHIPMENT_TYPE_LESS_THAN_TRUCK_LOAD,
            self::SHIPMENT_TYPE_SMALL_PARCEL,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getShipmentStructureAllowableValues(): array
    {
        return [
            self::SHIPMENT_STRUCTURE_PALLETIZED_ASSORTMENT_CASE,
            self::SHIPMENT_STRUCTURE_LOOSE_ASSORTMENT_CASE,
            self::SHIPMENT_STRUCTURE_PALLET_OF_ITEMS,
            self::SHIPMENT_STRUCTURE_PALLETIZED_STANDARD_CASE,
            self::SHIPMENT_STRUCTURE_LOOSE_STANDARD_CASE,
            self::SHIPMENT_STRUCTURE_MASTER_PALLET,
            self::SHIPMENT_STRUCTURE_MASTER_CASE,
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
        $this->setIfExists('shipment_identifier', $data ?? [], null);
        $this->setIfExists('shipment_confirmation_type', $data ?? [], null);
        $this->setIfExists('shipment_type', $data ?? [], null);
        $this->setIfExists('shipment_structure', $data ?? [], null);
        $this->setIfExists('transportation_details', $data ?? [], null);
        $this->setIfExists('amazon_reference_number', $data ?? [], null);
        $this->setIfExists('shipment_confirmation_date', $data ?? [], null);
        $this->setIfExists('shipped_date', $data ?? [], null);
        $this->setIfExists('estimated_delivery_date', $data ?? [], null);
        $this->setIfExists('selling_party', $data ?? [], null);
        $this->setIfExists('ship_from_party', $data ?? [], null);
        $this->setIfExists('ship_to_party', $data ?? [], null);
        $this->setIfExists('shipment_measurements', $data ?? [], null);
        $this->setIfExists('import_details', $data ?? [], null);
        $this->setIfExists('shipped_items', $data ?? [], null);
        $this->setIfExists('cartons', $data ?? [], null);
        $this->setIfExists('pallets', $data ?? [], null);
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

        if ($this->container['shipment_identifier'] === null) {
            $invalidProperties[] = "'shipment_identifier' can't be null";
        }
        if ($this->container['shipment_confirmation_type'] === null) {
            $invalidProperties[] = "'shipment_confirmation_type' can't be null";
        }
        $allowedValues = $this->getShipmentConfirmationTypeAllowableValues();
        if (!is_null($this->container['shipment_confirmation_type']) && !in_array($this->container['shipment_confirmation_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'shipment_confirmation_type', must be one of '%s'",
                $this->container['shipment_confirmation_type'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getShipmentTypeAllowableValues();
        if (!is_null($this->container['shipment_type']) && !in_array($this->container['shipment_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'shipment_type', must be one of '%s'",
                $this->container['shipment_type'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getShipmentStructureAllowableValues();
        if (!is_null($this->container['shipment_structure']) && !in_array($this->container['shipment_structure'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'shipment_structure', must be one of '%s'",
                $this->container['shipment_structure'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['shipment_confirmation_date'] === null) {
            $invalidProperties[] = "'shipment_confirmation_date' can't be null";
        }
        if ($this->container['selling_party'] === null) {
            $invalidProperties[] = "'selling_party' can't be null";
        }
        if ($this->container['ship_from_party'] === null) {
            $invalidProperties[] = "'ship_from_party' can't be null";
        }
        if ($this->container['ship_to_party'] === null) {
            $invalidProperties[] = "'ship_to_party' can't be null";
        }
        if ($this->container['shipped_items'] === null) {
            $invalidProperties[] = "'shipped_items' can't be null";
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
     * Gets shipment_identifier
     *
     * @return string
     */
    public function getShipmentIdentifier(): string
    {
        return $this->container['shipment_identifier'];
    }

    /**
     * Sets shipment_identifier
     *
     * @param string $shipment_identifier Unique shipment ID (not used over the last 365 days).
     *
     * @return self
     */
    public function setShipmentIdentifier(string $shipment_identifier): self
    {
        if (is_null($shipment_identifier)) {
            throw new \InvalidArgumentException('non-nullable shipment_identifier cannot be null');
        }
        $this->container['shipment_identifier'] = $shipment_identifier;

        return $this;
    }

    /**
     * Gets shipment_confirmation_type
     *
     * @return string
     */
    public function getShipmentConfirmationType(): string
    {
        return $this->container['shipment_confirmation_type'];
    }

    /**
     * Sets shipment_confirmation_type
     *
     * @param string $shipment_confirmation_type Indicates if this shipment confirmation is the initial confirmation, or intended to replace an already posted shipment confirmation. If replacing an existing shipment confirmation, be sure to provide the identical shipmentIdentifier and sellingParty information as in the previous confirmation.
     *
     * @return self
     */
    public function setShipmentConfirmationType(string $shipment_confirmation_type): self
    {
        if (is_null($shipment_confirmation_type)) {
            throw new \InvalidArgumentException('non-nullable shipment_confirmation_type cannot be null');
        }
        $allowedValues = $this->getShipmentConfirmationTypeAllowableValues();
        if (!in_array($shipment_confirmation_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'shipment_confirmation_type', must be one of '%s'",
                    $shipment_confirmation_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['shipment_confirmation_type'] = $shipment_confirmation_type;

        return $this;
    }

    /**
     * Gets shipment_type
     *
     * @return string|null
     */
    public function getShipmentType(): ?string
    {
        return $this->container['shipment_type'];
    }

    /**
     * Sets shipment_type
     *
     * @param string|null $shipment_type The type of shipment.
     *
     * @return self
     */
    public function setShipmentType(?string $shipment_type): self
    {
        if (is_null($shipment_type)) {
            array_push($this->openAPINullablesSetToNull, 'shipment_type');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('shipment_type', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $allowedValues = $this->getShipmentTypeAllowableValues();
        if (!is_null($shipment_type) && !in_array($shipment_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'shipment_type', must be one of '%s'",
                    $shipment_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['shipment_type'] = $shipment_type;

        return $this;
    }

    /**
     * Gets shipment_structure
     *
     * @return string|null
     */
    public function getShipmentStructure(): ?string
    {
        return $this->container['shipment_structure'];
    }

    /**
     * Sets shipment_structure
     *
     * @param string|null $shipment_structure Shipment hierarchical structure.
     *
     * @return self
     */
    public function setShipmentStructure(?string $shipment_structure): self
    {
        if (is_null($shipment_structure)) {
            array_push($this->openAPINullablesSetToNull, 'shipment_structure');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('shipment_structure', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $allowedValues = $this->getShipmentStructureAllowableValues();
        if (!is_null($shipment_structure) && !in_array($shipment_structure, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'shipment_structure', must be one of '%s'",
                    $shipment_structure,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['shipment_structure'] = $shipment_structure;

        return $this;
    }

    /**
     * Gets transportation_details
     *
     * @return \SpApi\Model\vendor\shipments\v1\TransportationDetailsForShipmentConfirmation|null
     */
    public function getTransportationDetails(): ?\SpApi\Model\vendor\shipments\v1\TransportationDetailsForShipmentConfirmation
    {
        return $this->container['transportation_details'];
    }

    /**
     * Sets transportation_details
     *
     * @param \SpApi\Model\vendor\shipments\v1\TransportationDetailsForShipmentConfirmation|null $transportation_details transportation_details
     *
     * @return self
     */
    public function setTransportationDetails(?\SpApi\Model\vendor\shipments\v1\TransportationDetailsForShipmentConfirmation $transportation_details): self
    {
        if (is_null($transportation_details)) {
            array_push($this->openAPINullablesSetToNull, 'transportation_details');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('transportation_details', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['transportation_details'] = $transportation_details;

        return $this;
    }

    /**
     * Gets amazon_reference_number
     *
     * @return string|null
     */
    public function getAmazonReferenceNumber(): ?string
    {
        return $this->container['amazon_reference_number'];
    }

    /**
     * Sets amazon_reference_number
     *
     * @param string|null $amazon_reference_number The Amazon Reference Number is a unique identifier generated by Amazon for all Collect/WePay shipments when you submit  a routing request. This field is mandatory for Collect/WePay shipments.
     *
     * @return self
     */
    public function setAmazonReferenceNumber(?string $amazon_reference_number): self
    {
        if (is_null($amazon_reference_number)) {
            array_push($this->openAPINullablesSetToNull, 'amazon_reference_number');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('amazon_reference_number', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['amazon_reference_number'] = $amazon_reference_number;

        return $this;
    }

    /**
     * Gets shipment_confirmation_date
     *
     * @return \DateTime
     */
    public function getShipmentConfirmationDate(): \DateTime
    {
        return $this->container['shipment_confirmation_date'];
    }

    /**
     * Sets shipment_confirmation_date
     *
     * @param \DateTime $shipment_confirmation_date Date on which the shipment confirmation was submitted.
     *
     * @return self
     */
    public function setShipmentConfirmationDate(\DateTime $shipment_confirmation_date): self
    {
        if (is_null($shipment_confirmation_date)) {
            throw new \InvalidArgumentException('non-nullable shipment_confirmation_date cannot be null');
        }
        $this->container['shipment_confirmation_date'] = $shipment_confirmation_date;

        return $this;
    }

    /**
     * Gets shipped_date
     *
     * @return \DateTime|null
     */
    public function getShippedDate(): ?\DateTime
    {
        return $this->container['shipped_date'];
    }

    /**
     * Sets shipped_date
     *
     * @param \DateTime|null $shipped_date The date and time of the departure of the shipment from the vendor's location. Vendors are requested to send ASNs within 30 minutes of departure from their warehouse/distribution center or at least 6 hours prior to the appointment time at the buyer destination warehouse, whichever is sooner. Shipped date mentioned in the shipment confirmation should not be in the future.
     *
     * @return self
     */
    public function setShippedDate(?\DateTime $shipped_date): self
    {
        if (is_null($shipped_date)) {
            array_push($this->openAPINullablesSetToNull, 'shipped_date');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('shipped_date', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['shipped_date'] = $shipped_date;

        return $this;
    }

    /**
     * Gets estimated_delivery_date
     *
     * @return \DateTime|null
     */
    public function getEstimatedDeliveryDate(): ?\DateTime
    {
        return $this->container['estimated_delivery_date'];
    }

    /**
     * Sets estimated_delivery_date
     *
     * @param \DateTime|null $estimated_delivery_date The date and time on which the shipment is estimated to reach buyer's warehouse. It needs to be an estimate based on the average transit time between ship from location and the destination. The exact appointment time will be provided by the buyer and is potentially not known when creating the shipment confirmation.
     *
     * @return self
     */
    public function setEstimatedDeliveryDate(?\DateTime $estimated_delivery_date): self
    {
        if (is_null($estimated_delivery_date)) {
            array_push($this->openAPINullablesSetToNull, 'estimated_delivery_date');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('estimated_delivery_date', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['estimated_delivery_date'] = $estimated_delivery_date;

        return $this;
    }

    /**
     * Gets selling_party
     *
     * @return \SpApi\Model\vendor\shipments\v1\PartyIdentification
     */
    public function getSellingParty(): \SpApi\Model\vendor\shipments\v1\PartyIdentification
    {
        return $this->container['selling_party'];
    }

    /**
     * Sets selling_party
     *
     * @param \SpApi\Model\vendor\shipments\v1\PartyIdentification $selling_party selling_party
     *
     * @return self
     */
    public function setSellingParty(\SpApi\Model\vendor\shipments\v1\PartyIdentification $selling_party): self
    {
        if (is_null($selling_party)) {
            throw new \InvalidArgumentException('non-nullable selling_party cannot be null');
        }
        $this->container['selling_party'] = $selling_party;

        return $this;
    }

    /**
     * Gets ship_from_party
     *
     * @return \SpApi\Model\vendor\shipments\v1\PartyIdentification
     */
    public function getShipFromParty(): \SpApi\Model\vendor\shipments\v1\PartyIdentification
    {
        return $this->container['ship_from_party'];
    }

    /**
     * Sets ship_from_party
     *
     * @param \SpApi\Model\vendor\shipments\v1\PartyIdentification $ship_from_party ship_from_party
     *
     * @return self
     */
    public function setShipFromParty(\SpApi\Model\vendor\shipments\v1\PartyIdentification $ship_from_party): self
    {
        if (is_null($ship_from_party)) {
            throw new \InvalidArgumentException('non-nullable ship_from_party cannot be null');
        }
        $this->container['ship_from_party'] = $ship_from_party;

        return $this;
    }

    /**
     * Gets ship_to_party
     *
     * @return \SpApi\Model\vendor\shipments\v1\PartyIdentification
     */
    public function getShipToParty(): \SpApi\Model\vendor\shipments\v1\PartyIdentification
    {
        return $this->container['ship_to_party'];
    }

    /**
     * Sets ship_to_party
     *
     * @param \SpApi\Model\vendor\shipments\v1\PartyIdentification $ship_to_party ship_to_party
     *
     * @return self
     */
    public function setShipToParty(\SpApi\Model\vendor\shipments\v1\PartyIdentification $ship_to_party): self
    {
        if (is_null($ship_to_party)) {
            throw new \InvalidArgumentException('non-nullable ship_to_party cannot be null');
        }
        $this->container['ship_to_party'] = $ship_to_party;

        return $this;
    }

    /**
     * Gets shipment_measurements
     *
     * @return \SpApi\Model\vendor\shipments\v1\ShipmentMeasurements|null
     */
    public function getShipmentMeasurements(): ?\SpApi\Model\vendor\shipments\v1\ShipmentMeasurements
    {
        return $this->container['shipment_measurements'];
    }

    /**
     * Sets shipment_measurements
     *
     * @param \SpApi\Model\vendor\shipments\v1\ShipmentMeasurements|null $shipment_measurements shipment_measurements
     *
     * @return self
     */
    public function setShipmentMeasurements(?\SpApi\Model\vendor\shipments\v1\ShipmentMeasurements $shipment_measurements): self
    {
        if (is_null($shipment_measurements)) {
            array_push($this->openAPINullablesSetToNull, 'shipment_measurements');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('shipment_measurements', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['shipment_measurements'] = $shipment_measurements;

        return $this;
    }

    /**
     * Gets import_details
     *
     * @return \SpApi\Model\vendor\shipments\v1\ImportDetails|null
     */
    public function getImportDetails(): ?\SpApi\Model\vendor\shipments\v1\ImportDetails
    {
        return $this->container['import_details'];
    }

    /**
     * Sets import_details
     *
     * @param \SpApi\Model\vendor\shipments\v1\ImportDetails|null $import_details import_details
     *
     * @return self
     */
    public function setImportDetails(?\SpApi\Model\vendor\shipments\v1\ImportDetails $import_details): self
    {
        if (is_null($import_details)) {
            array_push($this->openAPINullablesSetToNull, 'import_details');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('import_details', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['import_details'] = $import_details;

        return $this;
    }

    /**
     * Gets shipped_items
     *
     * @return array
     */
    public function getShippedItems(): array
    {
        return $this->container['shipped_items'];
    }

    /**
     * Sets shipped_items
     *
     * @param array $shipped_items A list of the items in this shipment and their associated details. If any of the item detail fields are common at a carton or a pallet level, provide them at the corresponding carton or pallet level.
     *
     * @return self
     */
    public function setShippedItems(array $shipped_items): self
    {
        if (is_null($shipped_items)) {
            throw new \InvalidArgumentException('non-nullable shipped_items cannot be null');
        }
        $this->container['shipped_items'] = $shipped_items;

        return $this;
    }

    /**
     * Gets cartons
     *
     * @return array|null
     */
    public function getCartons(): ?array
    {
        return $this->container['cartons'];
    }

    /**
     * Sets cartons
     *
     * @param array|null $cartons A list of the cartons in this shipment.
     *
     * @return self
     */
    public function setCartons(?array $cartons): self
    {
        if (is_null($cartons)) {
            array_push($this->openAPINullablesSetToNull, 'cartons');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('cartons', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['cartons'] = $cartons;

        return $this;
    }

    /**
     * Gets pallets
     *
     * @return array|null
     */
    public function getPallets(): ?array
    {
        return $this->container['pallets'];
    }

    /**
     * Sets pallets
     *
     * @param array|null $pallets A list of the pallets in this shipment.
     *
     * @return self
     */
    public function setPallets(?array $pallets): self
    {
        if (is_null($pallets)) {
            array_push($this->openAPINullablesSetToNull, 'pallets');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('pallets', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['pallets'] = $pallets;

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


