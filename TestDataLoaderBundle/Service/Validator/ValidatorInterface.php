<?php
/**
 * Created by PhpStorm.
 * User: arthas
 * Date: 16.07.15
 * Time: 1:31
 */

namespace TestDataLoaderBundle\Service\Validator;
use TestDataLoaderBundle\Service\Response\IncorrectResponseException;

/**
 * Interface ValidatorInterface
 * @package TestDataLoaderBundle\Service\Response
 */
interface ValidatorInterface {
    /**
     * @param object $content
     * @return bool
     * @throws IncorrectResponseException
     */
    public function validate($content);
}