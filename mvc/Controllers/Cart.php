<?php 
class Cart extends Controller{
    public function Index(){
        $this->view('Layouts/MasterLayout',[
            'page' => 'Cart'
        ]);
    }
}
