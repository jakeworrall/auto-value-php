<?php
namespace MyTemplates;

/**
 * @AutoValue
 */
abstract class Address implements MyValueType
{
    public static function builder(): AddressBuilder
    {
        return new AutoValue_AddressBuilder();
    }

    public abstract function toBuilder(): AddressBuilder;

    public abstract function lines(): array;

    public abstract function withLines(string ...$lines): self;

    /** @Memoized */
    public function firstLine(): ?string
    {
        return $this->lines()[0] ?? null;
    }

    public abstract function city(): ?string;

    public abstract function country(): string;

    public abstract function withCountry(string $country): self;

    public abstract function postCode(): PostCode;

    public abstract function metadata();

    public abstract function foo();

    private $n = 0;

    /** @Memoized */
    public function n(): int
    {
        return $this->n++;
    }
}