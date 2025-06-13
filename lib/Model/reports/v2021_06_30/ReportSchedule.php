<?php

/**
 * ReportSchedule.
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
 * Selling Partner API for Reports.
 *
 * The Selling Partner API for Reports lets you retrieve and manage a variety of reports that can help selling partners manage their businesses.
 *
 * The version of the OpenAPI document: 2021-06-30
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.9.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SpApi\Model\reports\v2021_06_30;

use SpApi\Model\ModelInterface;
use SpApi\ObjectSerializer;

/**
 * ReportSchedule Class Doc Comment.
 *
 * @category Class
 *
 * @description Detailed information about a report schedule.
 *
 * @author   OpenAPI Generator team
 *
 * @see     https://openapi-generator.tech
 *
 * @implements \ArrayAccess<string, mixed>
 */
class ReportSchedule implements ModelInterface, \ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     */
    protected static string $openAPIModelName = 'ReportSchedule';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'report_schedule_id' => 'string',
        'report_type' => 'string',
        'marketplace_ids' => 'string[]',
        'report_options' => 'array<string,string>',
        'period' => 'string',
        'next_report_creation_time' => '\DateTime'];

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
        'report_schedule_id' => null,
        'report_type' => null,
        'marketplace_ids' => null,
        'report_options' => null,
        'period' => null,
        'next_report_creation_time' => 'date-time'];

    /**
     * Array of nullable properties. Used for (de)serialization.
     *
     * @var bool[]
     */
    protected static array $openAPINullables = [
        'report_schedule_id' => false,
        'report_type' => false,
        'marketplace_ids' => true,
        'report_options' => true,
        'period' => false,
        'next_report_creation_time' => true,
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
        'report_schedule_id' => 'reportScheduleId',
        'report_type' => 'reportType',
        'marketplace_ids' => 'marketplaceIds',
        'report_options' => 'reportOptions',
        'period' => 'period',
        'next_report_creation_time' => 'nextReportCreationTime',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'report_schedule_id' => 'setReportScheduleId',
        'report_type' => 'setReportType',
        'marketplace_ids' => 'setMarketplaceIds',
        'report_options' => 'setReportOptions',
        'period' => 'setPeriod',
        'next_report_creation_time' => 'setNextReportCreationTime',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'report_schedule_id' => 'getReportScheduleId',
        'report_type' => 'getReportType',
        'marketplace_ids' => 'getMarketplaceIds',
        'report_options' => 'getReportOptions',
        'period' => 'getPeriod',
        'next_report_creation_time' => 'getNextReportCreationTime',
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
        $this->setIfExists('report_schedule_id', $data ?? [], null);
        $this->setIfExists('report_type', $data ?? [], null);
        $this->setIfExists('marketplace_ids', $data ?? [], null);
        $this->setIfExists('report_options', $data ?? [], null);
        $this->setIfExists('period', $data ?? [], null);
        $this->setIfExists('next_report_creation_time', $data ?? [], null);
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

        if (null === $this->container['report_schedule_id']) {
            $invalidProperties[] = "'report_schedule_id' can't be null";
        }
        if (null === $this->container['report_type']) {
            $invalidProperties[] = "'report_type' can't be null";
        }
        if (null === $this->container['period']) {
            $invalidProperties[] = "'period' can't be null";
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
     * Gets report_schedule_id.
     */
    public function getReportScheduleId(): string
    {
        return $this->container['report_schedule_id'];
    }

    /**
     * Sets report_schedule_id.
     *
     * @param string $report_schedule_id The identifier for the report schedule. This identifier is unique only in combination with a seller ID.
     */
    public function setReportScheduleId(string $report_schedule_id): self
    {
        if (is_null($report_schedule_id)) {
            throw new \InvalidArgumentException('non-nullable report_schedule_id cannot be null');
        }
        $this->container['report_schedule_id'] = $report_schedule_id;

        return $this;
    }

    /**
     * Gets report_type.
     */
    public function getReportType(): string
    {
        return $this->container['report_type'];
    }

    /**
     * Sets report_type.
     *
     * @param string $report_type The report type. Refer to [Report Type Values](https://developer-docs.amazon.com/sp-api/docs/report-type-values) for more information.
     */
    public function setReportType(string $report_type): self
    {
        if (is_null($report_type)) {
            throw new \InvalidArgumentException('non-nullable report_type cannot be null');
        }
        $this->container['report_type'] = $report_type;

        return $this;
    }

    /**
     * Gets marketplace_ids.
     */
    public function getMarketplaceIds(): ?array
    {
        return $this->container['marketplace_ids'];
    }

    /**
     * Sets marketplace_ids.
     *
     * @param null|array $marketplace_ids A list of marketplace identifiers. The report document's contents will contain data for all of the specified marketplaces, unless the report type indicates otherwise.
     */
    public function setMarketplaceIds(?array $marketplace_ids): self
    {
        if (is_null($marketplace_ids)) {
            array_push($this->openAPINullablesSetToNull, 'marketplace_ids');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('marketplace_ids', $nullablesSetToNull);
            if (false !== $index) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['marketplace_ids'] = $marketplace_ids;

        return $this;
    }

    /**
     * Gets report_options.
     *
     * @return null|array<string,string>
     */
    public function getReportOptions(): ?array
    {
        return $this->container['report_options'];
    }

    /**
     * Sets report_options.
     *
     * @param null|array<string,string> $report_options Additional information passed to reports. This varies by report type.
     */
    public function setReportOptions(?array $report_options): self
    {
        if (is_null($report_options)) {
            array_push($this->openAPINullablesSetToNull, 'report_options');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('report_options', $nullablesSetToNull);
            if (false !== $index) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['report_options'] = $report_options;

        return $this;
    }

    /**
     * Gets period.
     */
    public function getPeriod(): string
    {
        return $this->container['period'];
    }

    /**
     * Sets period.
     *
     * @param string $period An <a href='https://developer-docs.amazon.com/sp-api/docs/iso-8601'>ISO 8601</a> period value that indicates how often a report should be created.
     */
    public function setPeriod(string $period): self
    {
        if (is_null($period)) {
            throw new \InvalidArgumentException('non-nullable period cannot be null');
        }
        $this->container['period'] = $period;

        return $this;
    }

    /**
     * Gets next_report_creation_time.
     */
    public function getNextReportCreationTime(): ?\DateTime
    {
        return $this->container['next_report_creation_time'];
    }

    /**
     * Sets next_report_creation_time.
     *
     * @param null|\DateTime $next_report_creation_time The date and time when the schedule will create its next report, in <a href='https://developer-docs.amazon.com/sp-api/docs/iso-8601'>ISO 8601</a> date time format.
     */
    public function setNextReportCreationTime(?\DateTime $next_report_creation_time): self
    {
        if (is_null($next_report_creation_time)) {
            array_push($this->openAPINullablesSetToNull, 'next_report_creation_time');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('next_report_creation_time', $nullablesSetToNull);
            if (false !== $index) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['next_report_creation_time'] = $next_report_creation_time;

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
