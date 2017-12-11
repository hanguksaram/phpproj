<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 12/10/17
 * Time: 11:09 PM
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

        $youtubeLink = $this->input->post('youtubeLink');
        $videoDescription = $this->input->post('videoDescription');
        $articlePrice = $this->input->post('articlePrice');
        $articleTitle = $this->input->post('articleTitle');
        $articleBody = $this->input->post('articleBody');

        $this->article_model->insertArticle($youtubeLink, $videoDescription, $articlePrice, $articleTitle, $articleBody);
        $this->getArticles();


    }

    public function getArticles(){

        $data['result'] = $this->article_model->getArticles();
        $data['main_view'] = "getarticles";
        $this->load->view('layout/main', $data);

    }
}