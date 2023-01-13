<?php

namespace App\Factory;

use App\Entity\Module;
use App\Repository\ModuleRepository;
use Zenstruck\Foundry\ModelFactory;
use Zenstruck\Foundry\Proxy;
use Zenstruck\Foundry\RepositoryProxy;

/**
 * @extends ModelFactory<Module>
 *
 * @method        Module|Proxy create(array|callable $attributes = [])
 * @method static Module|Proxy createOne(array $attributes = [])
 * @method static Module|Proxy find(object|array|mixed $criteria)
 * @method static Module|Proxy findOrCreate(array $attributes)
 * @method static Module|Proxy first(string $sortedField = 'id')
 * @method static Module|Proxy last(string $sortedField = 'id')
 * @method static Module|Proxy random(array $attributes = [])
 * @method static Module|Proxy randomOrCreate(array $attributes = [])
 * @method static ModuleRepository|RepositoryProxy repository()
 * @method static Module[]|Proxy[] all()
 * @method static Module[]|Proxy[] createMany(int $number, array|callable $attributes = [])
 * @method static Module[]|Proxy[] createSequence(array|callable $sequence)
 * @method static Module[]|Proxy[] findBy(array $attributes)
 * @method static Module[]|Proxy[] randomRange(int $min, int $max, array $attributes = [])
 * @method static Module[]|Proxy[] randomSet(int $number, array $attributes = [])
 */
final class ModuleFactory extends ModelFactory
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
            'enseignant' => null, // TODO add App\Entity\enseignant type manually
            'filiere' => null, // TODO add App\Entity\filiere type manually
            'nom' => self::faker()->text(255),
        ];
    }

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#initialization
     */
    protected function initialize(): self
    {
        return $this
            // ->afterInstantiate(function(Module $module): void {})
        ;
    }

    protected static function getClass(): string
    {
        return Module::class;
    }
}
