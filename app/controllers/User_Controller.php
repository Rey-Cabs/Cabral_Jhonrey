<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

/**
 * Controller: User_Controller
 * 
 * Automatically generated via CLI.
 */
class User_Controller extends Controller {
    public function __construct()
    {
        parent::__construct();
    }
    function welcome()
    {
        $this->call->view('Welcome');
    }
    
    //pakita
    function Show()
    {       
        $page = 1;
        if(isset($_GET['page']) && ! empty($_GET['page'])) {
            $page = $this->io->get('page');
        }

        $q = '';
        if(isset($_GET['q']) && ! empty($_GET['q'])) {
            $q = trim($this->io->get('q'));
        }

        $records_per_page = 5;

        $all = $this->User_Model->page($q, $records_per_page, $page);
        $data['all'] = $all['records'];
        $total_rows = $all['total_rows'];
        $this->pagination->set_options([
            'first_link'     => '⏮ First',
            'last_link'      => 'Last ⏭',
            'next_link'      => 'Next →',
            'prev_link'      => '← Prev',
            'page_delimiter' => '&page='
        ]);
        $this->pagination->set_theme('custom'); // or 'tailwind', or 'custom'
        $this->pagination->initialize($total_rows, $records_per_page, $page, 'user/show?q='.$q);
        $data['page'] = $this->pagination->paginate();
        $this->call->view('User_View', $data);
    }
    //pasok
    function create()
    {
        if($this->io->method() == 'post'){
            $Name = $this->io->post('Name');
            $Class = $this->io->post('Class');
            $Level = $this->io->post('Level');
            $data = array(
                'Name'=> $Name,
                'Class'=> $Class,
                'Level'=> $Level
            );
            if($this->User_Model->insert($data))
            {
                redirect('/user/show');
            }else{
                echo'Error';
            }
        }else{
        $this->call->view('create');}
    }
    //edit
    function update($id)
    {
        $data ['user'] = $this->User_Model->find($id);
        if($this->io->method() == 'post'){
            $Name = $this->io->post('Name');
            $Class = $this->io->post('Class');
            $Level = $this->io->post('Level');
            $data = array(
                'Name'=> $Name,
                'Class'=> $Class,
                'Level'=> $Level
            );
            if($this->User_Model->update($id,$data))
            {
                redirect('/user/show');
            }else{
                redirect('/user/update/'.$id);
            }
        }
        $this->call->view('update',$data);
    }
    //tanggal
    function delete($id)
    {
        if($this->User_Model->delete($id))
        {
            redirect('/user/restore');
        }else{
            echo'Error';
        }
    } 
    //semi tanggal
    function soft_delete($id)
    {
        if($this->User_Model->soft_delete($id))
        {
            redirect('/user/show');
        }else{
            echo'Error';
        }
    }
    //ibalik
    function restore()
{
    $page = 1;
    if (isset($_GET['page']) && !empty($_GET['page'])) {
        $page = $this->io->get('page');
    }

    $q = '';
    if (isset($_GET['q']) && !empty($_GET['q'])) {
        $q = trim($this->io->get('q'));
    }

    $records_per_page = 5;

    // Call a new model function for restore listing
    $all = $this->User_Model->restore_page($q, $records_per_page, $page);
    $data['users'] = $all['records'];
    $total_rows = $all['total_rows'];

    $this->pagination->set_options([
        'first_link'     => '⏮ First',
        'last_link'      => 'Last ⏭',
        'next_link'      => 'Next →',
        'prev_link'      => '← Prev',
        'page_delimiter' => '&page='
    ]);
    $this->pagination->set_theme('custom'); // or 'tailwind'
    $this->pagination->initialize($total_rows, $records_per_page, $page, 'user/restore?q='.$q);
    $data['page'] = $this->pagination->paginate();

    $this->call->view('restore', $data);
}

    function retrieve($id)
    {
        if($this->User_Model->restore($id))
        {
            redirect('/user/show');
        }else{
            echo'Error';
        }
    }
}