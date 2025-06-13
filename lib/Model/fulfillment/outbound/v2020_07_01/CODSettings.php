<?php

/**
 * CODSettings.
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
 * CODSettings Class Doc Comment.
 *
 * @category Class
 *
 * @description The COD (Cash On Delivery) charges that you associate with a COD fulfillment order.
 *
 * @author   OpenAPI Generator team
 *
 * @see     https://openapi-generator.tech
 *
 * @implements \ArrayAccess<string, mixed>
 */
class CODSettings implements ModelInterface, \ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     */
    protected static string $openAPIModelName = 'CODSettings';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'is_cod_required' => 'bool',
        'cod_charge' => '\SpApi\Model\fulfillment\outbound\v2020_07_01\Money',
        'cod_charge_tax' => '\SpApi\Model\fulfillment\outbound\v2020_07_01\Money',
        'shipping_charge' => '\SpApi\Model\fulfillment\outbound\v2020_07_01\Money',
        'shipping_charge_tax' => '\SpApi\Model\fulfillment\outbound\v2020_07_01\Money'];

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
        'is_cod_required' => null,
        'cod_charge' => null,
        'cod_charge_tax' => null,
        'shipping_charge' => null,
        'shipping_charge_tax' => null];

    /**
     * Array of nullable properties. Used for (de)serialization.
     *
     * @var bool[]
     */
    protected static array $openAPINullables = [
        'is_cod_required' => false,
        'cod_charge' => true,
        'cod_charge_tax' => true,
        'shipping_charge' => true,
        'shipping_charge_tax' => true,
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
        'is_cod_required' => 'isCodRequired',
        'cod_charge' => 'codCharge',
        'cod_charge_tax' => 'codChargeTax',
        'shipping_charge' => 'shippingCharge',
        'shipping_charge_tax' => 'shippingChargeTax',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'is_cod_required' => 'setIsCodRequired',
        'cod_charge' => 'setCodCharge',
        'cod_charge_tax' => 'setCodChargeTax',
        'shipping_charge' => 'setShippingCharge',
        'shipping_charge_tax' => 'setShippingChargeTax',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'is_cod_required' => 'getIsCodRequired',
        'cod_charge' => 'getCodCharge',
        'cod_charge_tax' => 'getCodChargeTax',
        'shipping_charge' => 'getShippingCharge',
        'shipping_charge_tax' => 'getShippingChargeTax',
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
        $this->setIfExists('is_cod_required', $data ?? [], null);
        $this->setIfExists('cod_charge', $data ?? [], null);
        $this->setIfExists('cod_charge_tax', $data ?? [], null);
        $this->setIfExists('shipping_charge', $data ?? [], null);
        $this->setIfExists('shipping_charge_tax', $data ?? [], null);
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

        if (null === $this->container['is_cod_required']) {
            $invalidProperties[] = "'is_cod_required' can't be null";
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
     * Gets is_cod_required.
     */
    public function getIsCodRequired(): bool
    {
        return $this->container['is_cod_required'];
    }

    /**
     * Sets is_cod_required.
     *
     * @param bool $is_cod_required when true, this fulfillment order requires a COD (Cash On Delivery) payment
     */
    public function setIsCodRequired(bool $is_cod_required): self
    {
        if (is_null($is_cod_required)) {
            throw new \InvalidArgumentException('non-nullable is_cod_required cannot be null');
        }
        $this->container['is_cod_required'] = $is_cod_required;

        return $this;
    }

    /**
     * Gets cod_charge.
     */
    public function getCodCharge(): ?Money
    {
        return $this->container['cod_charge'];
    }

    /**
     * Sets cod_charge.
     *
     * @param null|Money $cod_charge cod_charge
     */
    public function setCodCharge(?Money $cod_charge): self
    {
        if (is_null($cod_charge)) {
            array_push($this->openAPINullablesSetToNull, 'cod_charge');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('cod_charge', $nullablesSetToNull);
            if (false !== $index) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['cod_charge'] = $cod_charge;

        return $this;
    }

    /**
     * Gets cod_charge_tax.
     */
    public function getCodChargeTax(): ?Money
    {
        return $this->container['cod_charge_tax'];
    }

    /**
     * Sets cod_charge_tax.
     *
     * @param null|Money $cod_charge_tax cod_charge_tax
     */
    public function setCodChargeTax(?Money $cod_charge_tax): self
    {
        if (is_null($cod_charge_tax)) {
            array_push($this->openAPINullablesSetToNull, 'cod_charge_tax');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('cod_charge_tax', $nullablesSetToNull);
            if (false !== $index) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['cod_charge_tax'] = $cod_charge_tax;

        return $this;
    }

    /**
     * Gets shipping_charge.
     */
    public function getShippingCharge(): ?Money
    {
        return $this->container['shipping_charge'];
    }

    /**
     * Sets shipping_charge.
     *
     * @param null|Money $shipping_charge shipping_charge
     */
    public function setShippingCharge(?Money $shipping_charge): self
    {
        if (is_null($shipping_charge)) {
            array_push($this->openAPINullablesSetToNull, 'shipping_charge');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('shipping_charge', $nullablesSetToNull);
            if (false !== $index) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['shipping_charge'] = $shipping_charge;

        return $this;
    }

    /**
     * Gets shipping_charge_tax.
     */
    public function getShippingChargeTax(): ?Money
    {
        return $this->container['shipping_charge_tax'];
    }

    /**
     * Sets shipping_charge_tax.
     *
     * @param null|Money $shipping_charge_tax shipping_charge_tax
     */
    public function setShippingChargeTax(?Money $shipping_charge_tax): self
    {
        if (is_null($shipping_charge_tax)) {
            array_push($this->openAPINullablesSetToNull, 'shipping_charge_tax');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('shipping_charge_tax', $nullablesSetToNull);
            if (false !== $index) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['shipping_charge_tax'] = $shipping_charge_tax;

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
