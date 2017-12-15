<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 12/10/17
 * Time: 11:15 PM
 */

class Article_model extends CI_Model
{

    public function insertArticle($data)
    {

        $timeinsertion = date('Y-m-d H:i:s');

        //if($data.articleImages !== null and $data.articleImages.length !== 0)
        $datainsert = array(

            'title' => "{$data['title']}",
            'body' => "{$data['body']}",
            'price' => "0",
            'link' => "{$data['yLink']}",
            'videoDescription' => "{$data['videoDescr']}",
            'timeinsert' => "$timeinsertion",
            'isdeleted' => "0"
        );
        $this->db->insert('articles', $datainsert);
        $this->db->select_max('id');
        //    $this->db->select_max('id');
        $query = $this->db->get('articles')->row();
        $maxid = $query->id;


        // $articleId = $query->result();
        if (array_key_exists('articleImages', $data) && count($data['articleImages']) !== 0) {


            //$path = str_replace("\\", "", "{$data["articleImage"]['url']}");//echo "<pre>";
            //print_r($path);
            //echo "</pre>";
            $batcharry = [];
            for ($i = 0; $i < count($data['articleImages']); $i++) {

                array_push($batcharry, array(

                    'article_id' => "$maxid",
                    'name' => "{$data['articleImages'][$i]['name']}",
                    'path' => "{$data['articleImages'][$i]['url']}",
                    'size' => "{$data['articleImages'][$i]['size']}",
                    'type' => "{$data['articleImages'][$i]['type']}",
                    'timeinsert' => "$timeinsertion"
                ));
            }
                $this->db->insert_batch('attached_images', $batcharry);


            }
            if (array_key_exists('articleDocs', $data) && count($data['articleDocs']) !== 0) {

                $batcharry = [];
                for ($i = 0; $i < count($data['articleDocs']); $i++) {

                    array_push($batcharry, array(

                        'article_id' => "$maxid",
                        'name' => "{$data['articleDocs'][$i]['name']}",
                        'path' => "{$data['articleDocs'][$i]['url']}",
                        'size' => "{$data['articleDocs'][$i]['size']}",
                        'type' => "{$data['articleDocs'][$i]['type']}",
                        'timeinsert' => "$timeinsertion"
                    ));
                }
                    $this->db->insert_batch('attached_docs', $batcharry);

            }
        }

    public function getArticles() {

        $query = $this->db->query('select a.id as id, a.title as title, a.body as body,
     i.path as image, d.path as doc from articles a
     LEFT join attached_images i on a.id = i.article_id
     LEFT JOIN  attached_docs d on a.id = d.article_id
     order by a.timeinsert desc');
        return $query->result();
    }
}