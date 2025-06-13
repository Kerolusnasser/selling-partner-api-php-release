<?php

/**
 * ItemSummaryByMarketplace.
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
 * Selling Partner API for Catalog Items.
 *
 * Use the Selling Partner API for Catalog Items to retrieve information about items in the Amazon catalog.  For more information, refer to the [Catalog Items API Use Case Guide](https://developer-docs.amazon.com/sp-api/docs/:catalog-items-api-v2022-04-01-use-case-guide).
 *
 * The version of the OpenAPI document: 2022-04-01
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.9.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SpApi\Model\catalogItems\v2022_04_01;

use SpApi\Model\ModelInterface;
use SpApi\ObjectSerializer;

/**
 * ItemSummaryByMarketplace Class Doc Comment.
 *
 * @category Class
 *
 * @description Information about an Amazon catalog item for the indicated &#x60;marketplaceId&#x60;.
 *
 * @author   OpenAPI Generator team
 *
 * @see     https://openapi-generator.tech
 *
 * @implements \ArrayAccess<string, mixed>
 */
class ItemSummaryByMarketplace implements ModelInterface, \ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    public const ITEM_CLASSIFICATION_BASE_PRODUCT = 'BASE_PRODUCT';
    public const ITEM_CLASSIFICATION_OTHER = 'OTHER';
    public const ITEM_CLASSIFICATION_PRODUCT_BUNDLE = 'PRODUCT_BUNDLE';
    public const ITEM_CLASSIFICATION_VARIATION_PARENT = 'VARIATION_PARENT';

    /**
     * The original name of the model.
     */
    protected static string $openAPIModelName = 'ItemSummaryByMarketplace';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'marketplace_id' => 'string',
        'adult_product' => 'bool',
        'autographed' => 'bool',
        'brand' => 'string',
        'browse_classification' => '\SpApi\Model\catalogItems\v2022_04_01\ItemBrowseClassification',
        'color' => 'string',
        'contributors' => '\SpApi\Model\catalogItems\v2022_04_01\ItemContributor[]',
        'item_classification' => 'string',
        'item_name' => 'string',
        'manufacturer' => 'string',
        'memorabilia' => 'bool',
        'model_number' => 'string',
        'package_quantity' => 'int',
        'part_number' => 'string',
        'release_date' => '\DateTime',
        'size' => 'string',
        'style' => 'string',
        'trade_in_eligible' => 'bool',
        'website_display_group' => 'string',
        'website_display_group_name' => 'string'];

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
        'marketplace_id' => null,
        'adult_product' => null,
        'autographed' => null,
        'brand' => null,
        'browse_classification' => null,
        'color' => null,
        'contributors' => null,
        'item_classification' => null,
        'item_name' => null,
        'manufacturer' => null,
        'memorabilia' => null,
        'model_number' => null,
        'package_quantity' => null,
        'part_number' => null,
        'release_date' => 'date',
        'size' => null,
        'style' => null,
        'trade_in_eligible' => null,
        'website_display_group' => null,
        'website_display_group_name' => null];

    /**
     * Array of nullable properties. Used for (de)serialization.
     *
     * @var bool[]
     */
    protected static array $openAPINullables = [
        'marketplace_id' => false,
        'adult_product' => true,
        'autographed' => true,
        'brand' => true,
        'browse_classification' => true,
        'color' => true,
        'contributors' => true,
        'item_classification' => true,
        'item_name' => true,
        'manufacturer' => true,
        'memorabilia' => true,
        'model_number' => true,
        'package_quantity' => true,
        'part_number' => true,
        'release_date' => true,
        'size' => true,
        'style' => true,
        'trade_in_eligible' => true,
        'website_display_group' => true,
        'website_display_group_name' => true,
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
        'marketplace_id' => 'marketplaceId',
        'adult_product' => 'adultProduct',
        'autographed' => 'autographed',
        'brand' => 'brand',
        'browse_classification' => 'browseClassification',
        'color' => 'color',
        'contributors' => 'contributors',
        'item_classification' => 'itemClassification',
        'item_name' => 'itemName',
        'manufacturer' => 'manufacturer',
        'memorabilia' => 'memorabilia',
        'model_number' => 'modelNumber',
        'package_quantity' => 'packageQuantity',
        'part_number' => 'partNumber',
        'release_date' => 'releaseDate',
        'size' => 'size',
        'style' => 'style',
        'trade_in_eligible' => 'tradeInEligible',
        'website_display_group' => 'websiteDisplayGroup',
        'website_display_group_name' => 'websiteDisplayGroupName',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'marketplace_id' => 'setMarketplaceId',
        'adult_product' => 'setAdultProduct',
        'autographed' => 'setAutographed',
        'brand' => 'setBrand',
        'browse_classification' => 'setBrowseClassification',
        'color' => 'setColor',
        'contributors' => 'setContributors',
        'item_classification' => 'setItemClassification',
        'item_name' => 'setItemName',
        'manufacturer' => 'setManufacturer',
        'memorabilia' => 'setMemorabilia',
        'model_number' => 'setModelNumber',
        'package_quantity' => 'setPackageQuantity',
        'part_number' => 'setPartNumber',
        'release_date' => 'setReleaseDate',
        'size' => 'setSize',
        'style' => 'setStyle',
        'trade_in_eligible' => 'setTradeInEligible',
        'website_display_group' => 'setWebsiteDisplayGroup',
        'website_display_group_name' => 'setWebsiteDisplayGroupName',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'marketplace_id' => 'getMarketplaceId',
        'adult_product' => 'getAdultProduct',
        'autographed' => 'getAutographed',
        'brand' => 'getBrand',
        'browse_classification' => 'getBrowseClassification',
        'color' => 'getColor',
        'contributors' => 'getContributors',
        'item_classification' => 'getItemClassification',
        'item_name' => 'getItemName',
        'manufacturer' => 'getManufacturer',
        'memorabilia' => 'getMemorabilia',
        'model_number' => 'getModelNumber',
        'package_quantity' => 'getPackageQuantity',
        'part_number' => 'getPartNumber',
        'release_date' => 'getReleaseDate',
        'size' => 'getSize',
        'style' => 'getStyle',
        'trade_in_eligible' => 'getTradeInEligible',
        'website_display_group' => 'getWebsiteDisplayGroup',
        'website_display_group_name' => 'getWebsiteDisplayGroupName',
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
        $this->setIfExists('marketplace_id', $data ?? [], null);
        $this->setIfExists('adult_product', $data ?? [], null);
        $this->setIfExists('autographed', $data ?? [], null);
        $this->setIfExists('brand', $data ?? [], null);
        $this->setIfExists('browse_classification', $data ?? [], null);
        $this->setIfExists('color', $data ?? [], null);
        $this->setIfExists('contributors', $data ?? [], null);
        $this->setIfExists('item_classification', $data ?? [], null);
        $this->setIfExists('item_name', $data ?? [], null);
        $this->setIfExists('manufacturer', $data ?? [], null);
        $this->setIfExists('memorabilia', $data ?? [], null);
        $this->setIfExists('model_number', $data ?? [], null);
        $this->setIfExists('package_quantity', $data ?? [], null);
        $this->setIfExists('part_number', $data ?? [], null);
        $this->setIfExists('release_date', $data ?? [], null);
        $this->setIfExists('size', $data ?? [], null);
        $this->setIfExists('style', $data ?? [], null);
        $this->setIfExists('trade_in_eligible', $data ?? [], null);
        $this->setIfExists('website_display_group', $data ?? [], null);
        $this->setIfExists('website_display_group_name', $data ?? [], null);
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
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public function getItemClassificationAllowableValues(): array
    {
        return [
            self::ITEM_CLASSIFICATION_BASE_PRODUCT,
            self::ITEM_CLASSIFICATION_OTHER,
            self::ITEM_CLASSIFICATION_PRODUCT_BUNDLE,
            self::ITEM_CLASSIFICATION_VARIATION_PARENT,
        ];
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties(): array
    {
        $invalidProperties = [];

        if (null === $this->container['marketplace_id']) {
            $invalidProperties[] = "'marketplace_id' can't be null";
        }
        $allowedValues = $this->getItemClassificationAllowableValues();
        if (!is_null($this->container['item_classification']) && !in_array($this->container['item_classification'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'item_classification', must be one of '%s'",
                $this->container['item_classification'],
                implode("', '", $allowedValues)
            );
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
     * Gets marketplace_id.
     */
    public function getMarketplaceId(): string
    {
        return $this->container['marketplace_id'];
    }

    /**
     * Sets marketplace_id.
     *
     * @param string $marketplace_id Amazon marketplace identifier. To find the ID for your marketplace, refer to [Marketplace IDs](https://developer-docs.amazon.com/sp-api/docs/marketplace-ids).
     */
    public function setMarketplaceId(string $marketplace_id): self
    {
        if (is_null($marketplace_id)) {
            throw new \InvalidArgumentException('non-nullable marketplace_id cannot be null');
        }
        $this->container['marketplace_id'] = $marketplace_id;

        return $this;
    }

    /**
     * Gets adult_product.
     */
    public function getAdultProduct(): ?bool
    {
        return $this->container['adult_product'];
    }

    /**
     * Sets adult_product.
     *
     * @param null|bool $adult_product when `true`, the Amazon catalog item is intended for an adult audience or is sexual in nature
     */
    public function setAdultProduct(?bool $adult_product): self
    {
        if (is_null($adult_product)) {
            array_push($this->openAPINullablesSetToNull, 'adult_product');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('adult_product', $nullablesSetToNull);
            if (false !== $index) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['adult_product'] = $adult_product;

        return $this;
    }

    /**
     * Gets autographed.
     */
    public function getAutographed(): ?bool
    {
        return $this->container['autographed'];
    }

    /**
     * Sets autographed.
     *
     * @param null|bool $autographed when `true`, the Amazon catalog item is autographed
     */
    public function setAutographed(?bool $autographed): self
    {
        if (is_null($autographed)) {
            array_push($this->openAPINullablesSetToNull, 'autographed');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('autographed', $nullablesSetToNull);
            if (false !== $index) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['autographed'] = $autographed;

        return $this;
    }

    /**
     * Gets brand.
     */
    public function getBrand(): ?string
    {
        return $this->container['brand'];
    }

    /**
     * Sets brand.
     *
     * @param null|string $brand name of the brand that is associated with the Amazon catalog item
     */
    public function setBrand(?string $brand): self
    {
        if (is_null($brand)) {
            array_push($this->openAPINullablesSetToNull, 'brand');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('brand', $nullablesSetToNull);
            if (false !== $index) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['brand'] = $brand;

        return $this;
    }

    /**
     * Gets browse_classification.
     */
    public function getBrowseClassification(): ?ItemBrowseClassification
    {
        return $this->container['browse_classification'];
    }

    /**
     * Sets browse_classification.
     *
     * @param null|ItemBrowseClassification $browse_classification browse_classification
     */
    public function setBrowseClassification(?ItemBrowseClassification $browse_classification): self
    {
        if (is_null($browse_classification)) {
            array_push($this->openAPINullablesSetToNull, 'browse_classification');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('browse_classification', $nullablesSetToNull);
            if (false !== $index) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['browse_classification'] = $browse_classification;

        return $this;
    }

    /**
     * Gets color.
     */
    public function getColor(): ?string
    {
        return $this->container['color'];
    }

    /**
     * Sets color.
     *
     * @param null|string $color the color that is associated with the Amazon catalog item
     */
    public function setColor(?string $color): self
    {
        if (is_null($color)) {
            array_push($this->openAPINullablesSetToNull, 'color');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('color', $nullablesSetToNull);
            if (false !== $index) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['color'] = $color;

        return $this;
    }

    /**
     * Gets contributors.
     */
    public function getContributors(): ?array
    {
        return $this->container['contributors'];
    }

    /**
     * Sets contributors.
     *
     * @param null|array $contributors individual contributors to the creation of the item, such as the authors or actors
     */
    public function setContributors(?array $contributors): self
    {
        if (is_null($contributors)) {
            array_push($this->openAPINullablesSetToNull, 'contributors');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('contributors', $nullablesSetToNull);
            if (false !== $index) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['contributors'] = $contributors;

        return $this;
    }

    /**
     * Gets item_classification.
     */
    public function getItemClassification(): ?string
    {
        return $this->container['item_classification'];
    }

    /**
     * Sets item_classification.
     *
     * @param null|string $item_classification classification type that is associated with the Amazon catalog item
     */
    public function setItemClassification(?string $item_classification): self
    {
        if (is_null($item_classification)) {
            array_push($this->openAPINullablesSetToNull, 'item_classification');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('item_classification', $nullablesSetToNull);
            if (false !== $index) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $allowedValues = $this->getItemClassificationAllowableValues();
        if (!is_null($item_classification) && !in_array($item_classification, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'item_classification', must be one of '%s'",
                    $item_classification,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['item_classification'] = $item_classification;

        return $this;
    }

    /**
     * Gets item_name.
     */
    public function getItemName(): ?string
    {
        return $this->container['item_name'];
    }

    /**
     * Sets item_name.
     *
     * @param null|string $item_name the name that is associated with the Amazon catalog item
     */
    public function setItemName(?string $item_name): self
    {
        if (is_null($item_name)) {
            array_push($this->openAPINullablesSetToNull, 'item_name');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('item_name', $nullablesSetToNull);
            if (false !== $index) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['item_name'] = $item_name;

        return $this;
    }

    /**
     * Gets manufacturer.
     */
    public function getManufacturer(): ?string
    {
        return $this->container['manufacturer'];
    }

    /**
     * Sets manufacturer.
     *
     * @param null|string $manufacturer the name of the manufacturer that is associated with the Amazon catalog item
     */
    public function setManufacturer(?string $manufacturer): self
    {
        if (is_null($manufacturer)) {
            array_push($this->openAPINullablesSetToNull, 'manufacturer');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('manufacturer', $nullablesSetToNull);
            if (false !== $index) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['manufacturer'] = $manufacturer;

        return $this;
    }

    /**
     * Gets memorabilia.
     */
    public function getMemorabilia(): ?bool
    {
        return $this->container['memorabilia'];
    }

    /**
     * Sets memorabilia.
     *
     * @param null|bool $memorabilia when true, the item is classified as memorabilia
     */
    public function setMemorabilia(?bool $memorabilia): self
    {
        if (is_null($memorabilia)) {
            array_push($this->openAPINullablesSetToNull, 'memorabilia');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('memorabilia', $nullablesSetToNull);
            if (false !== $index) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['memorabilia'] = $memorabilia;

        return $this;
    }

    /**
     * Gets model_number.
     */
    public function getModelNumber(): ?string
    {
        return $this->container['model_number'];
    }

    /**
     * Sets model_number.
     *
     * @param null|string $model_number the model number that is associated with the Amazon catalog item
     */
    public function setModelNumber(?string $model_number): self
    {
        if (is_null($model_number)) {
            array_push($this->openAPINullablesSetToNull, 'model_number');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('model_number', $nullablesSetToNull);
            if (false !== $index) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['model_number'] = $model_number;

        return $this;
    }

    /**
     * Gets package_quantity.
     */
    public function getPackageQuantity(): ?int
    {
        return $this->container['package_quantity'];
    }

    /**
     * Sets package_quantity.
     *
     * @param null|int $package_quantity the quantity of the Amazon catalog item within one package
     */
    public function setPackageQuantity(?int $package_quantity): self
    {
        if (is_null($package_quantity)) {
            array_push($this->openAPINullablesSetToNull, 'package_quantity');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('package_quantity', $nullablesSetToNull);
            if (false !== $index) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['package_quantity'] = $package_quantity;

        return $this;
    }

    /**
     * Gets part_number.
     */
    public function getPartNumber(): ?string
    {
        return $this->container['part_number'];
    }

    /**
     * Sets part_number.
     *
     * @param null|string $part_number the part number that is associated with the Amazon catalog item
     */
    public function setPartNumber(?string $part_number): self
    {
        if (is_null($part_number)) {
            array_push($this->openAPINullablesSetToNull, 'part_number');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('part_number', $nullablesSetToNull);
            if (false !== $index) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['part_number'] = $part_number;

        return $this;
    }

    /**
     * Gets release_date.
     */
    public function getReleaseDate(): ?\DateTime
    {
        return $this->container['release_date'];
    }

    /**
     * Sets release_date.
     *
     * @param null|\DateTime $release_date the earliest date on which the Amazon catalog item can be shipped to customers
     */
    public function setReleaseDate(?\DateTime $release_date): self
    {
        if (is_null($release_date)) {
            array_push($this->openAPINullablesSetToNull, 'release_date');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('release_date', $nullablesSetToNull);
            if (false !== $index) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['release_date'] = $release_date;

        return $this;
    }

    /**
     * Gets size.
     */
    public function getSize(): ?string
    {
        return $this->container['size'];
    }

    /**
     * Sets size.
     *
     * @param null|string $size the name of the size of the Amazon catalog item
     */
    public function setSize(?string $size): self
    {
        if (is_null($size)) {
            array_push($this->openAPINullablesSetToNull, 'size');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('size', $nullablesSetToNull);
            if (false !== $index) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['size'] = $size;

        return $this;
    }

    /**
     * Gets style.
     */
    public function getStyle(): ?string
    {
        return $this->container['style'];
    }

    /**
     * Sets style.
     *
     * @param null|string $style the name of the style that is associated with the Amazon catalog item
     */
    public function setStyle(?string $style): self
    {
        if (is_null($style)) {
            array_push($this->openAPINullablesSetToNull, 'style');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('style', $nullablesSetToNull);
            if (false !== $index) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['style'] = $style;

        return $this;
    }

    /**
     * Gets trade_in_eligible.
     */
    public function getTradeInEligible(): ?bool
    {
        return $this->container['trade_in_eligible'];
    }

    /**
     * Sets trade_in_eligible.
     *
     * @param null|bool $trade_in_eligible when true, the Amazon catalog item is eligible for trade-in
     */
    public function setTradeInEligible(?bool $trade_in_eligible): self
    {
        if (is_null($trade_in_eligible)) {
            array_push($this->openAPINullablesSetToNull, 'trade_in_eligible');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('trade_in_eligible', $nullablesSetToNull);
            if (false !== $index) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['trade_in_eligible'] = $trade_in_eligible;

        return $this;
    }

    /**
     * Gets website_display_group.
     */
    public function getWebsiteDisplayGroup(): ?string
    {
        return $this->container['website_display_group'];
    }

    /**
     * Sets website_display_group.
     *
     * @param null|string $website_display_group the identifier of the website display group that is associated with the Amazon catalog item
     */
    public function setWebsiteDisplayGroup(?string $website_display_group): self
    {
        if (is_null($website_display_group)) {
            array_push($this->openAPINullablesSetToNull, 'website_display_group');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('website_display_group', $nullablesSetToNull);
            if (false !== $index) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['website_display_group'] = $website_display_group;

        return $this;
    }

    /**
     * Gets website_display_group_name.
     */
    public function getWebsiteDisplayGroupName(): ?string
    {
        return $this->container['website_display_group_name'];
    }

    /**
     * Sets website_display_group_name.
     *
     * @param null|string $website_display_group_name the display name of the website display group that is associated with the Amazon catalog item
     */
    public function setWebsiteDisplayGroupName(?string $website_display_group_name): self
    {
        if (is_null($website_display_group_name)) {
            array_push($this->openAPINullablesSetToNull, 'website_display_group_name');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('website_display_group_name', $nullablesSetToNull);
            if (false !== $index) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['website_display_group_name'] = $website_display_group_name;

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
