<?php

namespace App\Controllers;

use App\Controllers\Interfaces\IBaseController;
use App\Models\AgreementDocumentsCsjo;
use App\Models\IdentificationDocument;
use App\Models\TypeInstitution;
use App\Repository\PartnerRepository;

class Partners extends BaseController implements IBaseController
{

    /**
     * @var PartnerRepository
     */
    private $parnertRepository;

    public function __construct()
    {
        $this->parnertRepository = new PartnerRepository();
    }

    public function index()
    {
        $tipos = new TypeInstitution();
        $identifications = new IdentificationDocument();
        $agreementDocumentsCsjos = new AgreementDocumentsCsjo();
        return view('partners/table',[
            'typeInstitutions'=>$tipos->findAll(),
            'identifications'=>$identifications->findAll(),
            'agreementDocumentsCsjos'=>$agreementDocumentsCsjos->findAll()
            ]);
    }
    public function create()
    {

    }
    public function new()
    {

    }
    public function edit($id)
    {

    }
    public function show($id = null)
    {
    }

    public function list()
    {
        if ($this->request->isAJAX()) {
            $limit = $this->request->getPost('length');
            $start = $this->request->getPost('start');
            $order = PartnerRepository::$columnsOrder[$this->request->getPost('order[0][column]')];
            $dir = $this->request->getPost('order[0][dir]');
            $search = $this->request->getPost('search[value]');
            $draw = $this->request->getPost('draw');
            $response = $this->parnertRepository->makeDataTable($order, $dir, $limit, $start, $search, $draw);
            
            return $this->response->setJSON($response);
        }

    }
    
    public function update($id)
    {

    }
    public function delete($id)
    {

    }

}