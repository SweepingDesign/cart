<?php

namespace Leaphly\Cart\Provider;

/**
 * Class SimpleProductFamilyProvider, it returns the family given into the response.
 *
 * @author Giulio De Donato <liuggio@gmail.com>
 */
class SimpleProductFamilyProvider implements ProductFamilyProviderInterface
{
    /**
     * {inheritdoc}
     * @param array $parameters
     * @return mixed|string
     */
    public function getProductFamily(array $parameters)
    {
        return $parameters[ProductFamilyProviderInterface::FAMILY_PARAMETER];
    }
}
