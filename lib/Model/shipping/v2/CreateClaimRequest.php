<?php

/**
 * CreateClaimRequest.
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
 * Amazon Shipping API.
 *
 * The Amazon Shipping API is designed to support outbound shipping use cases both for orders originating on Amazon-owned marketplaces as well as external channels/marketplaces. With these APIs, you can request shipping rates, create shipments, cancel shipments, and track shipments.
 *
 * The version of the OpenAPI document: v2
 * Contact: swa-api-core@amazon.com
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.9.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SpApi\Model\shipping\v2;

use SpApi\Model\ModelInterface;
use SpApi\ObjectSerializer;

/**
 * CreateClaimRequest Class Doc Comment.
 *
 * @category Class
 *
 * @description The request schema for the CreateClaim operation
 *
 * @author   OpenAPI Generator team
 *
 * @see     https://openapi-generator.tech
 *
 * @implements \ArrayAccess<string, mixed>
 */
class CreateClaimRequest implements ModelInterface, \ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     */
    protected static string $openAPIModelName = 'CreateClaimRequest';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'tracking_id' => 'string',
        'declared_value' => '\SpApi\Model\shipping\v2\Currency',
        'claim_reason' => '\SpApi\Model\shipping\v2\ClaimReason',
        'is_replacement_package_sent' => 'bool',
        'proofs' => 'string[]',
        'settlement_type' => '\SpApi\Model\shipping\v2\SettlementType'];

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
        'tracking_id' => null,
        'declared_value' => null,
        'claim_reason' => null,
        'is_replacement_package_sent' => null,
        'proofs' => null,
        'settlement_type' => null];

    /**
     * Array of nullable properties. Used for (de)serialization.
     *
     * @var bool[]
     */
    protected static array $openAPINullables = [
        'tracking_id' => false,
        'declared_value' => true,
        'claim_reason' => false,
        'is_replacement_package_sent' => true,
        'proofs' => true,
        'settlement_type' => false,
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
        'tracking_id' => 'trackingId',
        'declared_value' => 'declaredValue',
        'claim_reason' => 'claimReason',
        'is_replacement_package_sent' => 'isReplacementPackageSent',
        'proofs' => 'proofs',
        'settlement_type' => 'settlementType',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'tracking_id' => 'setTrackingId',
        'declared_value' => 'setDeclaredValue',
        'claim_reason' => 'setClaimReason',
        'is_replacement_package_sent' => 'setIsReplacementPackageSent',
        'proofs' => 'setProofs',
        'settlement_type' => 'setSettlementType',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'tracking_id' => 'getTrackingId',
        'declared_value' => 'getDeclaredValue',
        'claim_reason' => 'getClaimReason',
        'is_replacement_package_sent' => 'getIsReplacementPackageSent',
        'proofs' => 'getProofs',
        'settlement_type' => 'getSettlementType',
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
        $this->setIfExists('tracking_id', $data ?? [], null);
        $this->setIfExists('declared_value', $data ?? [], null);
        $this->setIfExists('claim_reason', $data ?? [], null);
        $this->setIfExists('is_replacement_package_sent', $data ?? [], null);
        $this->setIfExists('proofs', $data ?? [], null);
        $this->setIfExists('settlement_type', $data ?? [], null);
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

        if (null === $this->container['tracking_id']) {
            $invalidProperties[] = "'tracking_id' can't be null";
        }
        if (null === $this->container['claim_reason']) {
            $invalidProperties[] = "'claim_reason' can't be null";
        }
        if (null === $this->container['settlement_type']) {
            $invalidProperties[] = "'settlement_type' can't be null";
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
     * Gets tracking_id.
     */
    public function getTrackingId(): string
    {
        return $this->container['tracking_id'];
    }

    /**
     * Sets tracking_id.
     *
     * @param string $tracking_id the carrier generated identifier for a package in a purchased shipment
     */
    public function setTrackingId(string $tracking_id): self
    {
        if (is_null($tracking_id)) {
            throw new \InvalidArgumentException('non-nullable tracking_id cannot be null');
        }
        $this->container['tracking_id'] = $tracking_id;

        return $this;
    }

    /**
     * Gets declared_value.
     */
    public function getDeclaredValue(): ?Currency
    {
        return $this->container['declared_value'];
    }

    /**
     * Sets declared_value.
     *
     * @param null|Currency $declared_value declared_value
     */
    public function setDeclaredValue(?Currency $declared_value): self
    {
        if (is_null($declared_value)) {
            array_push($this->openAPINullablesSetToNull, 'declared_value');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('declared_value', $nullablesSetToNull);
            if (false !== $index) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['declared_value'] = $declared_value;

        return $this;
    }

    /**
     * Gets claim_reason.
     */
    public function getClaimReason(): string
    {
        return $this->container['claim_reason'];
    }

    /**
     * Sets claim_reason.
     *
     * @param string $claim_reason claim_reason
     */
    public function setClaimReason(string $claim_reason): self
    {
        if (is_null($claim_reason)) {
            throw new \InvalidArgumentException('non-nullable claim_reason cannot be null');
        }
        $this->container['claim_reason'] = $claim_reason;

        return $this;
    }

    /**
     * Gets is_replacement_package_sent.
     */
    public function getIsReplacementPackageSent(): ?bool
    {
        return $this->container['is_replacement_package_sent'];
    }

    /**
     * Sets is_replacement_package_sent.
     *
     * @param null|bool $is_replacement_package_sent Applicable for only On Amazon shipments to identify if replacement was sent
     */
    public function setIsReplacementPackageSent(?bool $is_replacement_package_sent): self
    {
        if (is_null($is_replacement_package_sent)) {
            array_push($this->openAPINullablesSetToNull, 'is_replacement_package_sent');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('is_replacement_package_sent', $nullablesSetToNull);
            if (false !== $index) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['is_replacement_package_sent'] = $is_replacement_package_sent;

        return $this;
    }

    /**
     * Gets proofs.
     */
    public function getProofs(): ?array
    {
        return $this->container['proofs'];
    }

    /**
     * Sets proofs.
     *
     * @param null|array $proofs A list of proof URLs for a claim. Basic URL validation will happen for each URLs present in the list
     */
    public function setProofs(?array $proofs): self
    {
        if (is_null($proofs)) {
            array_push($this->openAPINullablesSetToNull, 'proofs');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('proofs', $nullablesSetToNull);
            if (false !== $index) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['proofs'] = $proofs;

        return $this;
    }

    /**
     * Gets settlement_type.
     */
    public function getSettlementType(): string
    {
        return $this->container['settlement_type'];
    }

    /**
     * Sets settlement_type.
     *
     * @param string $settlement_type settlement_type
     */
    public function setSettlementType(string $settlement_type): self
    {
        if (is_null($settlement_type)) {
            throw new \InvalidArgumentException('non-nullable settlement_type cannot be null');
        }
        $this->container['settlement_type'] = $settlement_type;

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
