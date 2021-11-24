<?php

namespace App\Controllers;

use App\Products;

class ProductsController extends Controller 
{
    private $productsObj;

    public function __construct($app) 
    {
        parent::__construct($app);
        $this->productsObj = new Products($this->app->path('/database/products.json'));
    }

    public function index()
    {
        $products = $this->productsObj->getAll();

        return $this->app->view('products/index',['products' => $products]);
    }
    
    public function show() 
    {
        $sku = $this->app->param('sku');

        if(is_null($sku)) {
            $this->app->redirect('/products');
        }


        $product = $this->productsObj->getBySku($sku);


        
        // if(is_null($product)) {
        //     return $this->app->view('errors/404');
        // }
        if(is_null($product)) {
            return $this->app->view('products/missing');
        }

        $reviewSaved = $this->app->old('reviewSaved');

        
        // if(is_null($sku)) {
        //     return $this->app->view('products/missing');
        // }

        return $this->app->view('products/show', [
            'product' => $product,
            'reviewSaved' => $reviewSaved
        ]);
    }
    public function saveReview() 
    {
        $this->app->validate([
            'sku' => 'required', 
            'name' => 'required',
            'review' => 'required|minLength:200'
           
        ]);
        # If the above validation checks fail
        # The user is required back to where they came from (/product)
        # None of the code that follows will be executed
        
        return $this->app->view('example');
       $sku = dump($this->app->input('sku'));
       $name = dump($this->app->input('name'));
       $review = dump($this->app->input('review'));

       #Todo: Persist review to the database
       return $this->app->redirect('/product?sku=' . $sku, ['reviewSaved' => true ]);
    }
}