<?php 
class Products extends Controller{
    public function Index(){
        $this->view('Layouts/MasterLayout',[
            'page' => 'Products'
        ]);
    }
}
