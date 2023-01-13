<?php

namespace App\Factory;

use App\Entity\Semestre;
use App\Repository\SemestreRepository;
use Zenstruck\Foundry\ModelFactory;
use Zenstruck\Foundry\Proxy;
use Zenstruck\Foundry\RepositoryProxy;

/**
 * @extends ModelFactory<Semestre>
 *
 * @method        Semestre|Proxy create(array|callable $attributes = [])
 * @method static Semestre|Proxy createOne(array $attributes = [])
 * @method static Semestre|Proxy find(object|array|mixed $criteria)
 * @method static Semestre|Proxy findOrCreate(array $attributes)
 * @method static Semestre|Proxy first(string $sortedField = 'id')
 * @method static Semestre|Proxy last(string $sortedField = 'id')
 * @method static Semestre|Proxy random(array $attributes = [])
 * @method static Semestre|Proxy randomOrCreate(array $attributes = [])
 * @method static SemestreRepository|RepositoryProxy repository()
 * @method static Semestre[]|Proxy[] all()
 * @method static Semestre[]|Proxy[] createMany(int $number, array|callable $attributes = [])
 * @method static Semestre[]|Proxy[] createSequence(array|callable $sequence)
 * @method static Semestre[]|Proxy[] findBy(array $attributes)
 * @method static Semestre[]|Proxy[] randomRange(int $min, int $max, array $attributes = [])
 * @method static Semestre[]|Proxy[] randomSet(int $number, array $attributes = [])
 */
final class SemestreFactory extends ModelFactory
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
            // ->afterInstantiate(function(Semestre $semestre): void {})
        ;
    }

    protected static function getClass(): string
    {
        return Semestre::class;
    }
}
