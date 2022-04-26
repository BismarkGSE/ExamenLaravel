<?php

namespace App\Http\Controllers;

use App\Models\Casals;
use App\Models\Ciutats;
use Illuminate\Http\Request;

class CasalsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

      if ( $_POST ) {

        $validated = $request->validate([
          'nomCasal' => 'required',
          'data_inici' => 'required',
          'data_final' => 'required',
          'n_places' => 'required',
          'id_ciutat' => 'required',
        ]);

        $casals = new Casals();

          $casals->nomCasal = $request->post('nomCasal');
          $casals->data_inici = $request->post('data_inici');
          $casals->data_final = $request->post('data_final');
          $casals->n_places = $request->post('n_places');
          $casals->id_ciutat = $request->post('id_ciutat');
          $casals->save();

          return redirect()->route('casals.show')->with("success", "Agregado con exito !");

      } else {
        $datos= Ciutats::all();
        return view('pages.insert-casals', compact('datos'));
      }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Casals  $casals
     * @return \Illuminate\Http\Response
     */
    public function show(Casals $casals)
    {
      $datos = Casals::join('ciutats','casals.id_ciutat','=','ciutats.id')->select('casals.id','casals.nomCasal','casals.data_inici','casals.data_final','casals.n_places','ciutats.nom')->get();
      return view('main', compact('datos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Casals  $casals
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $casals = Casals::find($id);
      $ciutat = Ciutats::find($casals->id_ciutat);
      $datos= Ciutats::all();
      return view('pages.update-casals', compact('casals','ciutat','datos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Casals  $casals
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

      $validated = $request->validate([
        'nomCasal' => 'required',
        'data_inici' => 'required',
        'data_final' => 'required',
        'n_places' => 'required',
        'id_ciutat' => 'required',
      ]);

      $casals = Casals::find($id);

        $casals->nomCasal = $request->post('nomCasal');
        $casals->data_inici = $request->post('data_inici');
        $casals->data_final = $request->post('data_final');
        $casals->n_places = $request->post('n_places');
        $casals->id_ciutat = $request->post('id_ciutat');
        $casals->save();

        return redirect()->route('casals.show')->with("success", "Actualizado con exito !");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Categorias  $categorias
     * @return \Illuminate\Http\Response
     */
    public function destroyShow($id)
    {
      $casals = Casals::find($id);
      $ciutat = Ciutats::find($casals->id_ciutat);
      return view('pages.delete-casals', compact('casals','ciutat'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Casals  $casals
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $casals = Casals::find($id);
      $casals->delete();
      return redirect()->route('casals.show')->with('success','Eliminado con exito !');
    }
}
