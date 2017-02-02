<?php

namespace Dto;

/**
 * Interface JsonSchemaAccessorInterface
 *
 * For interacting with a JSON Schema object, useful because some schema attributes infer different default values.
 *
 * @package Dto
 */
interface JsonSchemaAccessorInterface
{
    public function load(array $schema);

    public function getAllOf();

    public function getAnyOf();

    public function getAdditionalItems();

    public function getItems();

    public function getMaxLength();

    public function getMinLength();

    public function getMaxProperties();

    public function getMinProperties();

    public function getMaxItems();

    public function getMinItems();

    public function getUniqueItems();

    public function getPattern();

    public function getProperties();

    public function getMultipleOf();

    public function getMaximum();

    public function getExclusiveMaximum();

    public function getMinimum();

    public function getExclusiveMinimum();

    public function getAdditionalProperties();

    public function getPatternProperties();

    public function getType();

    public function getDefault();

    public function getEnum();

    public function getRef();

    public function getRequired();

    //public function getDefinitions();

    public function getDescription();

    public function get($key);

    public function getDefinition($name);

    /**
     * Get root level schema
     * @return array
     */
    public function getSchema();
}