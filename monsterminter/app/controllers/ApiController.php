<?php

use Phalcon\Mvc\Controller;

class ApiController extends Controller
{
    /**
     * Welcome and this is the api 
     */
  
    public function nftAction()
    {
        // accept token _token:apitoken12345

        $nfts["btc"] = array("name"=>"Bitcoin", "label"=>"btc", "price"=>"6 USD");
        $nfts["dgc"] = array("name"=>"Dogge Coin", "label"=>"dgc", "price"=>"6 USD");
        $nfts["ape"] = array("name"=>"Ape Coin", "label"=>"ape", "price"=>"2 USD");
        $nfts["axs"] = array("name"=>"AXS Coin", "label"=>"axs", "price"=>"4 USD");
        $nfts["flw"] = array("name"=>"Flow Coin", "label"=>"flw", "price"=>"3 USD");
        $nfts["tht"] = array("name"=>"Theta Coin", "label"=>"tht", "price"=>"2.5 USD");
        
        $nftlist = json_encode($nfts);
         
        
    
        // $this->view->nfts = $nftlist;
       return  $nftlist;
    }
}
 
