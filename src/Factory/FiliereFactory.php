<?php

namespace App\Factory;

use App\Entity\Filiere;
use App\Repository\FiliereRepository;
use Zenstruck\Foundry\ModelFactory;
use Zenstruck\Foundry\Proxy;
use Zenstruck\Foundry\RepositoryProxy;

/**
 * @extends ModelFactory<Filiere>
 *
 * @method        Filiere|Proxy create(array|callable $attributes = [])
 * @method static Filiere|Proxy createOne(array $attributes = [])
 * @method static Filiere|Proxy find(object|array|mixed $criteria)
 * @method static Filiere|Proxy findOrCreate(array $attributes)
 * @method static Filiere|Proxy first(string $sortedField = 'id')
 * @method static Filiere|Proxy last(string $sortedField = 'id')
 * @method static Filiere|Proxy random(array $attributes = [])
 * @method static Filiere|Proxy randomOrCreate(array $attributes = [])
 * @method static FiliereRepository|RepositoryProxy repository()
 * @method static Filiere[]|Proxy[] all()
 * @method static Filiere[]|Proxy[] createMany(int $number, array|callable $attributes = [])
 * @method static Filiere[]|Proxy[] createSequence(array|callable $sequence)
 * @method static Filiere[]|Proxy[] findBy(array $attributes)
 * @method static Filiere[]|Proxy[] randomRange(int $min, int $max, array $attributes = [])
 * @method static Filiere[]|Proxy[] randomSet(int $number, array $attributes = [])
 */
final class FiliereFactory extends ModelFactory
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
            'nom' => self::faker()->text(255),
        ];
    }

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#initialization
     */
    protected function initialize(): self
    {
        return $this
            // ->afterInstantiate(function(Filiere $filiere): void {})
        ;
    }

    protected static function getClass(): string
    {
        return Filiere::class;
    }
}
