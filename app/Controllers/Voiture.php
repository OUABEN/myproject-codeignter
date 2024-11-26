<?php

namespace App\Controllers;

use App\Models\VoitureModel;
use CodeIgniter\Controller;

class Voiture extends Controller
{
    protected $voitureModel;

    public function __construct()
    {
        $this->voitureModel = new VoitureModel();
    }

    // Display all voitures
    public function index()
    {
        $data['voitures'] = $this->voitureModel->findAll();
        return view('voiture/index', $data);
    }

    // Show the form to add a new voiture
    public function create()
    {
        return view('voiture/create');
    }

    // Add a new voiture
    public function store()
    {
        $this->voitureModel->insert([
            'id' => $this->request->getPost('id'),
            'marque' => $this->request->getPost('marque'),
            'model' => $this->request->getPost('model'),
            'couleur' => $this->request->getPost('couleur'),
            'prix' => $this->request->getPost('prix'),
            'status' => $this->request->getPost('status') === '1' ? true : false,
        ]);

        return redirect()->to('/voiture');
    }

    // Show a specific voiture
    public function show($id)
    {
        $data['voiture'] = $this->voitureModel->find($id);
        return view('voiture/show', $data);
    }






    // Delete a voiture
    public function delete($id)
    {
        $this->voitureModel->delete($id);
        return redirect()->to('/voiture');
    }



    public function table()
    {
        // Count available voitures (status = true)
        $availableCount = $this->voitureModel->where('status', true)->countAllResults();

        // Count not available voitures (status = false)
        $notAvailableCount = $this->voitureModel->where('status', false)->countAllResults();
        $total = $availableCount + $notAvailableCount;
        $prixtotal = $availableCount * 30000;
        // Pass the counts and voitures list to the view
        $data = [
            'prixtotal' => $prixtotal,
            'total' => $total,  // Corrected variable name
            'availableCount' => $availableCount,
            'notAvailableCount' => $notAvailableCount,
            'voitures' => $this->voitureModel->findAll()
        ];

        // Load the table.php view with the data
        return view('voiture/table', $data);
    }


}
