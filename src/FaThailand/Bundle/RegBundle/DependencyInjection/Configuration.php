<?php

namespace FaThailand\Bundle\RegBundle\DependencyInjection;

use FaThailand\Bundle\RegBundle\Controller\MasterController;
use FaThailand\Bundle\RegBundle\Form\Type\CategoryChoiceType;
use FaThailand\Bundle\RegBundle\Form\Type\MasterType;
use FaThailand\Bundle\RegBundle\Form\Type\PersonalType;
use FaThailand\Bundle\RegBundle\Form\Type\PositionChoiceType;
use FaThailand\Bundle\RegBundle\Model\AttachPicture;
use FaThailand\Bundle\RegBundle\Model\AttachPictureInterface;
use FaThailand\Bundle\RegBundle\Model\Category;
use FaThailand\Bundle\RegBundle\Model\CategoryInterface;
use FaThailand\Bundle\RegBundle\Model\Master;
use FaThailand\Bundle\RegBundle\Model\MasterInterface;
use FaThailand\Bundle\RegBundle\Model\Personal;
use FaThailand\Bundle\RegBundle\Model\PersonalInterface;
use FaThailand\Bundle\RegBundle\Model\Position;
use FaThailand\Bundle\RegBundle\Model\PositionInterface;
use Sylius\Bundle\ResourceBundle\SyliusResourceBundle;
use Sylius\Component\Resource\Factory\Factory;
use Symfony\Component\Config\Definition\Builder\ArrayNodeDefinition;
use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritdoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('fa_thailand_reg');

        $rootNode
            ->children()
                ->scalarNode('driver')->defaultValue(SyliusResourceBundle::DRIVER_DOCTRINE_ORM)->end()
            ->end()
        ;

        $this->addResourcesSection($rootNode);

        return $treeBuilder;
    }

    private function addResourcesSection(ArrayNodeDefinition $node)
    {
        $node
            ->children()
                ->arrayNode('resources')
                ->addDefaultsIfNotSet()
                    ->children()
                        ->arrayNode('reg_category')
                            ->addDefaultsIfNotSet()
                            ->children()
                                ->variableNode('options')->end()
                                ->arrayNode('classes')
                                    ->addDefaultsIfNotSet()
                                    ->children()
                                        ->scalarNode('model')->defaultValue(Category::class)->cannotBeEmpty()->end()
                                        ->scalarNode('interface')->defaultValue(CategoryInterface::class)->cannotBeEmpty()->end()
                                        ->scalarNode('factory')->defaultValue(Factory::class)->end()
                                        ->arrayNode('form')
                                            ->addDefaultsIfNotSet()
                                            ->children()
                                                //->scalarNode('default')->defaultValue(PageType::class)->cannotBeEmpty()->end()
                                                ->scalarNode('choice')->defaultValue(CategoryChoiceType::class)->cannotBeEmpty()->end()
                                            ->end()
                                        ->end()
                                    ->end()
                                ->end()
                                ->arrayNode('validation_groups')
                                    ->addDefaultsIfNotSet()
                                    ->children()
                                        ->arrayNode('default')
                                            ->prototype('scalar')->end()
                                            ->defaultValue(['default'])
                                        ->end()
                                    ->end()
                                ->end()
                            ->end()
                        ->end()
                        ->arrayNode('reg_position')
                            ->addDefaultsIfNotSet()
                            ->children()
                                ->variableNode('options')->end()
                                ->arrayNode('classes')
                                    ->addDefaultsIfNotSet()
                                    ->children()
                                        ->scalarNode('model')->defaultValue(Position::class)->cannotBeEmpty()->end()
                                        ->scalarNode('interface')->defaultValue(PositionInterface::class)->cannotBeEmpty()->end()
                                        ->scalarNode('factory')->defaultValue(Factory::class)->end()
                                        ->arrayNode('form')
                                            ->addDefaultsIfNotSet()
                                            ->children()
                                                //->scalarNode('default')->defaultValue(PageType::class)->cannotBeEmpty()->end()
                                                ->scalarNode('choice')->defaultValue(PositionChoiceType::class)->cannotBeEmpty()->end()
                                            ->end()
                                        ->end()
                                    ->end()
                                ->end()
                                ->arrayNode('validation_groups')
                                    ->addDefaultsIfNotSet()
                                    ->children()
                                        ->arrayNode('default')
                                            ->prototype('scalar')->end()
                                            ->defaultValue(['default'])
                                        ->end()
                                    ->end()
                                ->end()
                            ->end()
                        ->end()
                        ->arrayNode('reg_master')
                            ->addDefaultsIfNotSet()
                            ->children()
                                ->variableNode('options')->end()
                                ->arrayNode('classes')
                                    ->addDefaultsIfNotSet()
                                    ->children()
                                        ->scalarNode('model')->defaultValue(Master::class)->cannotBeEmpty()->end()
                                        ->scalarNode('interface')->defaultValue(MasterInterface::class)->cannotBeEmpty()->end()
                                        ->scalarNode('controller')->defaultValue(MasterController::class)->end()
                                        ->scalarNode('factory')->defaultValue(Factory::class)->end()
                                        ->arrayNode('form')
                                            ->addDefaultsIfNotSet()
                                            ->children()
                                                ->scalarNode('default')->defaultValue(MasterType::class)->cannotBeEmpty()->end()
                                                //->scalarNode('from_identifier')->defaultValue(ResourceFromIdentifierType::class)->cannotBeEmpty()->end()
                                            ->end()
                                        ->end()
                                    ->end()
                                ->end()
                                ->arrayNode('validation_groups')
                                    ->addDefaultsIfNotSet()
                                    ->children()
                                        ->arrayNode('default')
                                            ->prototype('scalar')->end()
                                            ->defaultValue(['default'])
                                        ->end()
                                    ->end()
                                ->end()
                            ->end()
                        ->end()
                        ->arrayNode('reg_personal')
                            ->addDefaultsIfNotSet()
                            ->children()
                                ->variableNode('options')->end()
                                ->arrayNode('classes')
                                    ->addDefaultsIfNotSet()
                                    ->children()
                                        ->scalarNode('model')->defaultValue(Personal::class)->cannotBeEmpty()->end()
                                        ->scalarNode('interface')->defaultValue(PersonalInterface::class)->cannotBeEmpty()->end()
                                        ->scalarNode('factory')->defaultValue(Factory::class)->end()
                                        ->arrayNode('form')
                                            ->addDefaultsIfNotSet()
                                            ->children()
                                                ->scalarNode('default')->defaultValue(PersonalType::class)->cannotBeEmpty()->end()
                                                //->scalarNode('from_identifier')->defaultValue(ResourceFromIdentifierType::class)->cannotBeEmpty()->end()
                                            ->end()
                                        ->end()
                                    ->end()
                                ->end()
                                ->arrayNode('validation_groups')
                                    ->addDefaultsIfNotSet()
                                    ->children()
                                        ->arrayNode('default')
                                            ->prototype('scalar')->end()
                                            ->defaultValue(['default'])
                                        ->end()
                                    ->end()
                                ->end()
                            ->end()
                        ->end()
                    ->end()
                ->end()
            ->end()
        ;
    }
}
