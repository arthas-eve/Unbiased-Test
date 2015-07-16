<?php
namespace TestDataLoaderBundle\Service\Normalizer;

/**
 * Interface NormalizerInterface
 */
interface NormalizerInterface {
    /**
     * @param object $stdObject
     * @return object
     */
    public function denormalize($stdObject);
}