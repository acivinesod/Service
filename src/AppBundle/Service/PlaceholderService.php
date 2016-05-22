<?php
/**
 * Created by PhpStorm.
 * User: tomislavhorvat
 * Date: 21.05.2016.
 * Time: 19:29
 */

namespace AppBundle\Service;


use Psr\Log\LoggerInterface;

class PlaceholderService
{
    private $logger = null;

    public function setLogger( LoggerInterface $loggerInterface)
    {
        $this->logger = $loggerInterface;
    }

    public function getPlaceholder( $width = 300, $height = 200)
    {
        if(null !== $this->logger){
            $this->logger->warning ('Nešto njije u redu !!!!');
        }

        return sprintf('http://placekitten.com/g/%d/%d',
            $width, $height);
    }
}