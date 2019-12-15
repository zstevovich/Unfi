<?php declare (strict_types = 1);


namespace Infogram\Unfi\Entity;


abstract class BaseEntity
{
    protected $totalPages, $pageSize, $currentPage, $ProductCountInThisResult;

    abstract function getTotalPages();

    abstract function setTotalPages($totalPages);

    abstract function getPageSize();

    abstract function setPageSize($pageSize);

    abstract function getCurrentPage();

    abstract function setCurrentPage($currentPage);

    abstract function getProductCountInThisResult();

    abstract function setProductCountInThisResult($ProductCountInThisResult);
}