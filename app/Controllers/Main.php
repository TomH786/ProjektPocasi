<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\Bundesland;
use App\Models\Station;
use App\Models\Data;

class Main extends BaseController
{
    var $bundesland;
    var $station;
    var $data;

    public function __construct()
    {
        $this->bundesland = new Bundesland();
        $this->station = new Station();
        $this->data = new Data();
    }

    public function index()
    {
        $zeme = $this->bundesland->findAll();
        $data["bundesland"] = $zeme;
        return view("index", $data);
    }

    public function zeme($id)
    {
        $zeme = $this->bundesland->find($id);
        $stanice = $this->station->where("bundesland", $id)->findAll();
        $data["bundesland"] = $zeme;
        $data["station"] = $stanice;
        return view("zeme", $data);
    }

    public function data($id)
    {
        $zeme = $this->station->find($id);
        $mereni = $this->data->where("Stations_ID", $id)->findAll();
        $data["zeme"] = $zeme;
        $data["udaje"] = $mereni;
        echo view("data", $data);
    }

    public function obrazky($id)
    {
        $zeme = $this->bundesland->find($id);
        $data["bundesland"] = $zeme;
        echo view("obrazky", $data);
    }

    public function prehled()
    {
        $prehled = $this->bundesland->join("station", "bundesland.id = station.bundesland", "inner")->orderBy("place")->findAll();
        $data["prehled"] = $prehled;
        echo view("prehled", $data);
    }


}
