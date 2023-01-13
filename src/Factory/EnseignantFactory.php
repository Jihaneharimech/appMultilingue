<?php

namespace App\Factory;

use App\Entity\Enseignant;
use App\Repository\EnseignantRepository;
use Zenstruck\Foundry\ModelFactory;
use Zenstruck\Foundry\Proxy;
use Zenstruck\Foundry\RepositoryProxy;

/**
 * @extends ModelFactory<Enseignant>
 *
 * @method        Enseignant|Proxy create(array|callable $attributes = [])
 * @method static Enseignant|Proxy createOne(array $attributes = [])
 * @method static Enseignant|Proxy find(object|array|mixed $criteria)
 * @method static Enseignant|Proxy findOrCreate(array $attributes)
 * @method static Enseignant|Proxy first(string $sortedField = 'id')
 * @method static Enseignant|Proxy last(string $sortedField = 'id')
 * @method static Enseignant|Proxy random(array $attributes = [])
 * @method static Enseignant|Proxy randomOrCreate(array $attributes = [])
 * @method static EnseignantRepository|RepositoryProxy repository()
 * @method static Enseignant[]|Proxy[] all()
 * @method static Enseignant[]|Proxy[] createMany(int $number, array|callable $attributes = [])
 * @method static Enseignant[]|Proxy[] createSequence(array|callable $sequence)
 * @method static Enseignant[]|Proxy[] findBy(array $attributes)
 * @method static Enseignant[]|Proxy[] randomRange(int $min, int $max, array $attributes = [])
 * @method static Enseignant[]|Proxy[] randomSet(int $number, array $attributes = [])
 */
final class EnseignantFactory extends ModelFactory
{
    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#factories-as-services
     *
     * @todo inject services if required
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#model-factories
     *
     * @todo add your default values here
     */
    protected function getDefaults(): array
    {
        return [
            'nom' => self::faker()->lastname(),
            'prenom' => self::faker()->firstname(),
            'cin' => self::faker()->realText(10),
        ];
    }

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#initialization
     */
    protected function initialize(): self
    {
        return $this
            // ->afterInstantiate(function(Enseignant $enseignant): void {})
        ;
    }

    protected static function getClass(): string
    {
        return Enseignant::class;
    }
}
