<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 12/10/17
 * Time: 11:15 PM
 */

class Article_model extends CI_Model
{

    public function insertArticle($youtubeLink, $videoDescription, $articlePrice, $articleTitle, $articleBody)
    {
        $data = array(

            'title' => $articleTitle,
            'body' => $articleBody,
            'price' => $articlePrice,
            'link' => $youtubeLink,
            'videoDescription' => $videoDescription
        );
        $this->db->insert('articles', $data);


    }
    public function getArticles() {

        $query = $this->db->get('articles');
        return $query->result();
    }
}