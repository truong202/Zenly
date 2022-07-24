<?php 
class Checkout extends Controller{
    public function Index(){
        $this->view('Layouts/MasterLayout',[
            'page' => 'Checkout'
        ]);
    }
}
