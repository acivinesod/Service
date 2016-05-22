<?php
/**
 * Created by PhpStorm.
 * User: tomislavhorvat
 * Date: 21.05.2016.
 * Time: 18:54
 */

namespace AppBundle\Service;


class OurService
{
    private $ourParam;
    private $placeholderService;
    
    
    public function __construct($ourParam, PlaceholderService $placeholderService)
    {
        $this->ourParam = $ourParam;
        $this->placeholderService = $placeholderService;
    }


    public function getText()
    {
        return $this->ourParam;
    }

    public function getPlaceholderDi()
    {
        return $this->placeholderService->getPlaceholder();
    }

}