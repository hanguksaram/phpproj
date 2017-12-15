<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 12/10/17
 * Time: 11:09 PM.
 */
defined('BASEPATH') OR exit('No direct script access allowed');
class Articles extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('article_model');
    }

    public function index(){

        $data['main_view'] = "articles";

        $this->load->view('layout/main', $data);
        //echo 'test';
        //$this->load->view('');
    }
    public function createArticle(){


        $data = $this->input->post();

       //$path = str_replace('\\', '', "{$data["articleImages"][0]['url']}");
        //echo json_encode($data);// echo "<pre>";
      // print_r($path);
      // echo "</pre>";

     $this->article_model->insertArticle($data);
      //echo "<pre>";
      // print_r($some);
      // echo "</pre>";
        //echo json_encode($some->id);


        //$this->getArticles();


    }

    public function getArticles(){

        $data['result'] = $this->article_model->getArticles();
        $data['main_view'] = "getarticles";
        //print_r($data['result']);
        $this->load->view('layout/main', $data);

    }
}