<?php
class matakuliah extends CI_Controller
{
       public function index()
        {
            $this->load->view('view-form-matakuliah');
        }
        public function cetak()
    {
        $this->form_validation->set_rules('kode','kode matakuliah','required|max_length[3]',[
                'required' => 'Kode Matakuliah Harus diisi',
                'max_length' => 'Kode max 3'
               
        ]);
       
        $this->form_validation->set_rules('namamtk', 'nama matakuliah', 'required|min_length[3]', 
        [
        'required' => 'Nama Matakuliah Harus disi',
        'min_length' => 'Nama Matakuliah terlalu pendek'
    ]);
    $this->form_validation->set_rules('nama','nama','required|alpha',[
        'required' => 'Nama Harus diisi',
        'alpha' => 'Nama harus berupa huruf'
    ]); 
    $this->form_validation->set_rules('kelas','kelas','required|numeric',[
        'required' => 'kelas Harus diisi',
        'numeric' => 'kelas harus berupa angka'
    ]); 
    if ($this->form_validation->run()!= true) {
        $this->load->view('view-form-matakuliah');
    } else {
          $data = [
             'kode' => $this->input->post('kode'),
              'namamtk' => $this->input->post('namamtk'),
              'kelas' => $this->input->post('kelas'),
              'nama' => $this->input->post('nama'),
        ];
        $this->load->view('view-data-matakuliah', $data);
   }
 }
}
       