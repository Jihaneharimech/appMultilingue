<?php

namespace App\Factory;

use App\Entity\Note;
use App\Repository\NoteRepository;
use Zenstruck\Foundry\ModelFactory;
use Zenstruck\Foundry\Proxy;
use Zenstruck\Foundry\RepositoryProxy;

/**
 * @extends ModelFactory<Note>
 *
 * @method        Note|Proxy create(array|callable $attributes = [])
 * @method static Note|Proxy createOne(array $attributes = [])
 * @method static Note|Proxy find(object|array|mixed $criteria)
 * @method static Note|Proxy findOrCreate(array $attributes)
 * @method static Note|Proxy first(string $sortedField = 'id')
 * @method static Note|Proxy last(string $sortedField = 'id')
 * @method static Note|Proxy random(array $attributes = [])
 * @method static Note|Proxy randomOrCreate(array $attributes = [])
 * @method static NoteRepository|RepositoryProxy repository()
 * @method static Note[]|Proxy[] all()
 * @method static Note[]|Proxy[] createMany(int $number, array|callable $attributes = [])
 * @method static Note[]|Proxy[] createSequence(array|callable $sequence)
 * @method static Note[]|Proxy[] findBy(array $attributes)
 * @method static Note[]|Proxy[] randomRange(int $min, int $max, array $attributes = [])
 * @method static Note[]|Proxy[] randomSet(int $number, array $attributes = [])
 */
final class NoteFactory extends ModelFactory
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
            'note' => self::faker()->randomFloat(),
            'observation' => self::faker()->realtext(50),
            'etudiant' => EtudiantFactory::randomOrCreate(),  
            'module' => ModuleFactory::randomOrCreate(),
        ];
    }

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#initialization
     */
    protected function initialize(): self
    {
        return $this
            // ->afterInstantiate(function(Note $note): void {})
        ;
    }

    protected static function getClass(): string
    {
        return Note::class;
    }
}
