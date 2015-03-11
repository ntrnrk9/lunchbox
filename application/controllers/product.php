<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Product extends CI_Controller {
    
        public function index($type='') {
        //
          
        $this->load->model('product_model');
        $data['product_list']=$this->product_model->findAll($type);
            
              
         $this->load->view('products',$data);
        }

        public function buy($id='')
        {
        $this->load->model('product_model');
             
         if($id)
        {
           $product=$this->product_model->find($id);
           $data_d = array(
                       'id'      =>$product->product_code ,
                       'qty'     => 1,
                       'price'   => $product->price,
                       'name'    => $product->product_name,
                       );
            $this->cart->insert($data_d); 
            redirect(product);
        }
        
            
        }
        public function update() {
            
            $i=1;
            foreach ($this->cart->contents()as $items)
            {
                $this->cart->update(array('rowid'=>$items['rowid'],'qty'=>$this->input->post('qty'.$i)));
                $i++;
                
            }
            redirect('product');
           //$this->load->view('cart'); 
        }
        public function checkout()
        {
                $this->load->view('cart');
        }

        public function delete($id)
        {
            $this->cart->update(array('rowid' => $id,'qty'=>0));
            redirect('product');
           //$this->load->view('cart');
        }

} 