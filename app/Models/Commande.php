<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'livreur_id',
        'montantTotal',
        'bonus',
        'status',
        'status_commande',
        'adresseLivraison',
        'livraisonPhoneNumber',
        'created_at',
        'updated_up',
    ];

    public function users()
    {
        return $this->belongsTo(User::class,'user_id');
    }

    public function livreurs()
    {
        //return $this->belongsTo(Livreur::class);
        return $this->belongsTo(Livreur::class, 'livreur_id');
    }

    public function article() {
        return $this->hasMany(Article::class);
    }

    public function lignecommande() {
        return $this->belongsTo(LigneCommande::class ,'commande_id');
    }

    public function paiement() {
        return $this->belongsTo(Paiement::class);
    }
}
