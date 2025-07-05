<?php

namespace App\Controllers;

<<<<<<< HEAD
use App\Models\ProductModel; 
use App\Models\TransactionModel;
use App\Models\TransactionDetailModel;  
=======
use App\Database\Migrations\Transaction;
use App\Models\ProductModel;
use App\Models\TransactionModel;
use App\Models\TransactionDetailModel;
>>>>>>> 1e71c53ecff91d8ab6e3bc5a53dce6916f7a2869

class Home extends BaseController
{
    protected $product;
    protected $transaction;
    protected $transaction_detail;

    public function __construct()
    {
<<<<<<< HEAD
        helper('form');   
        helper('number');   
        $this->product = new ProductModel();
        $this->transaction = new TransactionModel();
        $this->transaction_detail = new TransactionDetailModel();   
=======
        helper('form');
        helper('number');
        $this->product = new ProductModel();  
        $this->transaction = new TransactionModel();
        $this->transaction_detail = new TransactionDetailModel();
>>>>>>> 1e71c53ecff91d8ab6e3bc5a53dce6916f7a2869
    }

    public function index(): string
    {
        $product = $this->product->findAll();
        $data['product'] = $product;
        return view('v_home', $data);
    }

    public function profile()
<<<<<<< HEAD
    {
        $username = session()->get('username');
        $data['username'] = $username;

        $buy = $this->transaction->where('username', $username)->findAll();
        $data['buy'] = $buy;

        $product = [];
=======
{
    $username = session()->get('username');
    $data['username'] = $username;

    $buy = $this->transaction->where('username', $username)->findAll();
    $data['buy'] = $buy;

    $product = [];
>>>>>>> 1e71c53ecff91d8ab6e3bc5a53dce6916f7a2869

    if (!empty($buy)) {
        foreach ($buy as $item) {
            $detail = $this->transaction_detail->select('transaction_detail.*, product.nama, product.harga, product.foto')->join('product', 'transaction_detail.product_id=product.id')->where('transaction_id', $item['id'])->findAll();

            if (!empty($detail)) {
                $product[$item['id']] = $detail;
            }
        }
    }

    $data['product'] = $product;

    return view('v_profile', $data);
}
<<<<<<< HEAD
=======

>>>>>>> 1e71c53ecff91d8ab6e3bc5a53dce6916f7a2869
    public function faq()
    {
        return view('v_faq');
    }

    public function contact()
    {
        return view('v_contact');
    }
}
