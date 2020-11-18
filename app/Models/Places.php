<?php
namespace App\Models;
use App\Models\Simple\CSVModel;

/*
 * Mock travel destination data.
 * Note that we don't have to extend CodeIgniter's model for now
 */

class Places extends CSVModel{
    protected $origin = WRITEPATH . 'data/placesData.csv';
    protected $keyField = 'id';
    protected $validationRules = [];

    //mock data : an array of records
//    protected $data = [
//        '1' => [
//            'id' => 1,
//            'name' => 'Zhihao Jian',
//            'Country' => 'China',
//            'description' => 'A special administrative region on the eastern side of the Pearl River estuary in southern China.',
//            'link' => 'https://baike.baidu.com/item/%E7%9A%87%E6%97%8F%E7%94%B5%E5%AD%90%E7%AB%9E%E6%8A%80%E4%BF%B1%E4%B9%90%E9%83%A8/20846255?fromtitle=RNG&fromid=20131555&fr=aladdin#2',
//            'image' => 'JZH.jpg',
//        ],
//        '2' => [
//            'id' => 2,
//            'name' => 'Yuanhao Li',
//            'Country' => 'China',
//            'description' => 'A special administrative region on the western side of the Pearl River estuary in southern China.',
//            'link' => 'https://baike.baidu.com/item/%E7%9A%87%E6%97%8F%E7%94%B5%E5%AD%90%E7%AB%9E%E6%8A%80%E4%BF%B1%E4%B9%90%E9%83%A8/20846255?fromtitle=RNG&fromid=20131555&fr=aladdin#2',
//            'image' => 'xiaohu.jpg',
//        ],
//        '3' => [
//            'id' => 3,
//            'name' => 'Senming Shi',
//            'Country' => 'China',
//            'description' => 'A country at the centre of the Southeast Asian Indochinese peninsula composed of 76 provinces.',
//            'link' => 'https://baike.baidu.com/item/%E7%9A%87%E6%97%8F%E7%94%B5%E5%AD%90%E7%AB%9E%E6%8A%80%E4%BF%B1%E4%B9%90%E9%83%A8/20846255?fromtitle=RNG&fromid=20131555&fr=aladdin#2',
//            'image' => 'ssm.jpg',
//        ],
//        '4' => [
//            'id' => 4,
//            'name' => 'Shiyu Liu',
//            'Country' => 'China',
//            'description' => 'An island country in East Asia.',
//            'link' => 'https://baike.baidu.com/item/%E7%9A%87%E6%97%8F%E7%94%B5%E5%AD%90%E7%AB%9E%E6%8A%80%E4%BF%B1%E4%B9%90%E9%83%A8/20846255?fromtitle=RNG&fromid=20131555&fr=aladdin#2',
//            'image' => 'MLXG.jpg',
//        ],
//        '5' => [
//            'id' => 5,
//            'name' => 'Benwei Lu',
//            'Country' => 'China',
//            'description' => 'The easternmost country on the Indochina Peninsula.',
//            'link' => 'https://baike.baidu.com/item/%E7%9A%87%E6%97%8F%E7%94%B5%E5%AD%90%E7%AB%9E%E6%8A%80%E4%BF%B1%E4%B9%90%E9%83%A8/20846255?fromtitle=RNG&fromid=20131555&fr=aladdin#2',
//            'image' => 'lbw.jpg',
//        ],
//    ];
//
//    public function findAll() {
//        return $this->data;
//    }
//
//    public function find($id = null) {
//        if (!empty($id) && isset($this->data[$id])) {
//            return $this->data[$id];
//        }
//        return null;
//    }

}
