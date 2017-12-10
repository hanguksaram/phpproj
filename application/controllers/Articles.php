<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 12/10/17
 * Time: 11:09 PM
 */
defined('BASEPATH') OR exit('No direct script access allowed');
class Articles extends CI_Controller{

    public function index(){

        $data['main_view'] = "articles";
        $this->load->view('layout/main', $data);
        //echo 'test';
        //$this->load->view('');
    }
    public function  createArticle(){

    }
}