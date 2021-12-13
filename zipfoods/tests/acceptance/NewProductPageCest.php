<?php

use Faker\Factory;

class NewProductPageCest
{
    public function testAddingNewProduct(AcceptanceTester $I)
    {
        $faker = Factory::create();
        $productName = $faker->words(3,true);
        $sku = str_replace(' ', '-', $productName);

        $I->amOnPage('/products/new');
        $I->fillField('[test=name-input]', $productName);
        $I->fillField('[test=sku-input]', $sku);
        $I->fillField('[test=description-input]', $faker->paragraph(1,true));
        $I->fillField('[test=price-input]', 4.99);
        $I->fillField('[test=available-input]', 50);
        $I->fillField('[test=weight-input]', 1.34);
        $I->click('[test=submit-button]');


        $I->amOnPage('/product?sku=' . $sku);
        $I->see($productName);
        
    }
    public function testValidationIsWorking(AcceptanceTester $I)
    {
        
        $I->amOnPage('/products/new');
        $I->click('[test=submit-button]');

        $I->seeElement('[test=validation-errors-alert]');
    }
    
}