<?php

class ProductsPageCest
{
    public function pageLoads(AcceptanceTester $I)
    {
        $I->amOnPage('/products');
        $I->seeElement('[test=all-products-header]');
        $productCount = count($I->grabMuliple('.product-link'));
        $I->assertGreaterThanOrEqual(10, $productCount);
    }
}