<?php
class Home extends Controller
{
    public function Index()
    {
        $this->view('Layouts/MasterLayout', [
            'page' => 'Home'
        ]);
    }
    public function Show($model)
    {
        $md = $this->model($model);
        echo $md->getInfo();
    }
}
