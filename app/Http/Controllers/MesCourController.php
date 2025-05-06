<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\MesCour;
use App\Models\Chapitre;
use App\Models\Cart;
use App\Models\Commande;
use App\Models\Formation;
use Illuminate\Http\Request;

class MesCourController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //  $formation=MesCour::where('user_id', Auth::id()) ->get();

    //     $formation = Formation::with('chapitres')
    // ->whereHas('mesCours', function ($query) {
    //     $query->where('user_id', Auth::id());
    // })
    // ->get();
    $mesCours=MesCour::where('user_id', Auth::id())->get();
    $mesCourIds = $mesCours->pluck('chapitre_id');
$formation = Chapitre::whereIn('id', $mesCourIds)->get();


        return view('mescours',compact('formation'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $formations_id = $request->input('formation_id');

        $user_id = Auth::id();
        $total=0;
        //dd($request->id_transaction);

        if (Auth::check() && $request->id_transaction ) {

            $commande = new Commande();
        $commande->user_id= Auth::id();
        $commande->numero='C-'.rand(1111,9999);

        //$total=0;
        //dd($cartitems);
        $cartitems_total=Cart::where('user_id', Auth::id())->get();
        foreach($cartitems_total as $prod)
        {
            $total +=$prod->quantite*$prod->montant;
        }
        $remise = 0;
        $totalApresRemise = $total;

        if($cartitems_total->count() >= 3) {
        $remise = $total * 0.05;
        $totalApresRemise = $total - $remise;
    }

        $commande->montantTotal=$totalApresRemise;
        $commande->reference=$request->id_transaction;


        $commande->save();
        // Envoyer les information dans la ligne de commande
        $cartitems=Cart::where('user_id', Auth::id())->get();
        //dd($commande);
        foreach($cartitems as $value)
        {
            //dd($value);
            MesCour::create([

                'commande_id'=>$commande->id,
                'chapitre_id'=>$value->chapitre_id,
                'formation_id'=>$value->formation_id,
                'user_id'=>auth()->user()->id,
                'quantite'=>$value->quantite,
                'montant'=>$value->montant,
            ]);

        }

        // Supprimer le panier
        $cartitems=Cart::where('user_id', Auth::id())->get();
        Cart::destroy($cartitems);

    }
    return redirect('/mes-cours');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MesCour  $mesCour
     * @return \Illuminate\Http\Response
     */
    public function show(MesCour $mesCour)
    {
        return view('', compact('mesCour'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MesCour  $mesCour
     * @return \Illuminate\Http\Response
     */
    public function edit(MesCour $mesCour)
    {
        return view('', compact('mesCour'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MesCour  $mesCour
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MesCour $mesCour)
    {
        $validatedData = $request->validate([
            'formation_id' => 'required|exists:formations,id',
            'user_id' => 'nullable|exists:users,id',
        ]);
        $mesCour->update($validatedData);
        return redirect('/mes-cours');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MesCour  $mesCour
     * @return \Illuminate\Http\Response
     */
    public function destroy(MesCour $mesCour)
    {
        $mesCour->delete();

        return redirect('/mes-cours');
    }
}
