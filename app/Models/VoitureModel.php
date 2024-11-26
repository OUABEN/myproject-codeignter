<?php

namespace App\Models;

use CodeIgniter\Model;

class VoitureModel extends Model
{
    protected $table = 'voiture';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id', 'marque', 'model', 'couleur', 'prix', 'status', 'created_at', 'updated_at'];
    protected $useTimestamps = true;  // enables created_at and updated_at
}
