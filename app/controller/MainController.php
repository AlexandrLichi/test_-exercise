<?php
use Imy\Core\Controller;
use Imy\Core\DBManager;
use Imy\Core\DBSelect;
use Imy\Core\Request;
use Imy\Core\Tools;

class MainController extends Controller
{
    function init()
    {
        $this->v['name'] = 'Тестовое задание Александр';
        $result =  DBSelect::factory('review')
       ->select(['id','name', 'message', 'date'])
       ->fetchAll();
        $this->v['reviews'] = $result;
    }


    function ajax_test() {

        $data = (new Request())->post();

        unset($data['action']);

        $data['date'] = date('Y-m-d H:i:s');

        DBManager::factory('review')
        ->setFromArray($data)
        ->insert();

        $this->v['date'] = date('d.m.Y');
    }

}
