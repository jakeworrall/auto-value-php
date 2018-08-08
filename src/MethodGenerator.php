<?php
namespace AutoValue;

/**
 * @author Josh Di Fabio <joshdifabio@gmail.com>
 */
interface MethodGenerator
{
    public function generateMethods(ReflectionMethodCollection $abstractMethods, PropertyCollection $properties): MethodDefinitionCollection;
}