<?php

namespace App\Controllers;

use App\Products;

class ProductsController extends Controller 
{
    // private $productsObj;

    // public function __construct($app) 
    // {
    //     parent::__construct($app);
    //     // $this->productsObj = new Products($this->app->path('/database/products.json'));
    // }

    public function index()
    {
        // $products = $this->productsObj->getAll();
        $products = $this->app->db()->all('products');

        return $this->app->view('products/index',['products' => $products]);
    }
    
    public function show() 
    {
        $sku = $this->app->param('sku');

        if(is_null($sku)) {
            $this->app->redirect('/products');
        }
        // $product = $this->productsObj->getBySku($sku);
        $productQuery = $this->app->db()->findByColumn('products', 'sku', '=', $sku);
        
        // if(is_null($product)) {
        //     return $this->app->view('errors/404');
        // }
        // if(is_null($product)) {
        //     return $this->app->view('products/missing');
        // }
        if(empty($productQuery)) {
            return $this->app->view('products/missing');
        } else {
            $product = $productQuery[0];
        }
        
        $reviewSaved = $this->app->old('reviewSaved');
        
        $reviews = $this->app->db()->findByColumn('reviews', 'product_id', '=', $product['id']);
        // if(is_null($sku)) {
        //     return $this->app->view('products/missing');
        // }

        return $this->app->view('products/show', [
            'product' => $product,
            'reviewSaved' => $reviewSaved,
            'reviews' => $reviews
        ]);
    }
    public function saveReview() 
    {
        $this->app->validate([
            'product_id' => 'required', 
            'sku' => 'required', 
            'name' => 'required',
            'review' => 'required|minLength:200'
           
        ]);
        # If the above validation checks fail
        # The user is required back to where they came from (/product)
        # None of the code that follows will be executed
        
        // return $this->app->view('example');
        $product_id = $this->app->input('product_id');
        $sku = $this->app->input('sku');
        $name = $this->app->input('name');
        $review = $this->app->input('review');

        

        #Todo: Persist review to the database

        $this->app->db()->insert('reviews',  [
            'product_id' => $product_id,
            'name' => $name,
            'review' => $review
        ]);



        // # Set up all the variables we need to make a connection
        // $host = $this->app->env('DB_HOST');
        // $database = $this->app->env('DB_NAME');
        // $username = $this->app->env('DB_USERNAME');
        // $password = $this->app->env('DB_PASSWORD');
    
        // # DSN (Data Source Name) string
        // # contains the information required to connect to the database
        // $dsn = "mysql:host=$host;dbname=$database;charset=utf8mb4";

        // # Driver-specific connection options
        // $options = [
        //     \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
        //     \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
        //     \PDO::ATTR_EMULATE_PREPARES => false,
        // ];

        // try {
        //     # Create a PDO instance representing a connection to a database
        //     $pdo = new \PDO($dsn, $username, $password, $options);
        // } catch (\PDOException $e) {
        //     throw new \PDOException($e->getMessage(), (int)$e->getCode());
        // }
    


        // $sqlTemplate = "INSERT INTO reviews (name, sku, review) 
        // VALUES (:name, :sku, :review)";
        
        // $values = [
        //     'name' => $name,
        //     'sku' => $sku,
        //     'review' => $review,
        // ];
    
        // $statement = $pdo->prepare($sqlTemplate);
        // $statement->execute($values);
    
        return $this->app->redirect('/product?sku=' . $sku, ['reviewSaved' => true ]);
    }
    public function new()
    {
        $productSaved = $this->app->old('productSaved');
        $sku = $this->app->old('sku');

        return $this->app->view('products/new', [
            'productSaved' => $productSaved,
            'sku' => $sku,
        ]);
    }

    public function save()
    {
        $this->app->validate([
            'name' => 'required',
            'sku' => 'required|alphaNumericDash',
            'description' => 'required',
            'price' => 'required|numeric',
            'available' => 'required|numeric',
            'weight' => 'required|numeric'
        ]);

        $this->app->db()->insert('products', $this->app->inputAll());

        $this->app->redirect('/products/new', [
            'productSaved' => true,
            'sku' => $this->app->input('sku')
        ]);
    }
}