<?php
class Home extends Controller
{
    public function Index()
    {
        $this->view('Layouts/MasterLayout', [
            'page' => 'Home'
        ]);
    }
    public function Show()
    {
        $md = $this->model('HomeModel');
        echo $md->getInfo();
    }
}
