<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Publication;
use Illuminate\Support\Facades\Validator;
use Tools\Img\ToServer;

class PublicationController extends Controller {

    /**
     * Lista de middlewares aplicados a los metodos
     */
    function __construct() {
        $this->middleware('active');
        $this->middleware('auth');
        $this->middleware('verified');
    }

    /**
     * Get a validator for an incoming create or update request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data, $creado = true) {
        if(array_key_exists('documento', $data) && !$data['documento']) unset($data['documento']);
        return Validator::make($data, [
            'titulo' => ['string','required', 'max:200'],
            'descripcion' => ['required', 'string'],
            'documento' => [($creado?'required':''),'file', 'max:20000', 'mimes:doc,docx,pdf,png,jpg,jpeg'],
        ]);
    }

    /**
     * Muestra una lista de los requisitos de las normas.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $publications = Publication::where(function($query) {
            $query->orWhere('visible', true)
                  ->orWhere('user_id', auth()->user()->id);
          })
        ->whereOr('user_id',auth()->user()->id)
        ->orderBy('id', 'ASC')->get();

        return view('publications.index',compact('publications'));
    }

    /**
     * Muestra la vita para crear un requisito.
     * Ya sea para uno seleccionado desde la norma con $norm_id
     * O por la pagina principal sin $norm_id
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('publications.create');
    }

    /**
     * Almacena el requisito en la base de datos.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        //Validación de los campos
        $this->validator($request->all())->validate();
        $data = ToServer::saveImage($request, 'documento', 'img/docs');
        $data ['user_id'] = auth()->user()->id;
        $data['visible'] = isset($data['visible']);
        $publication = Publication::create($data);
        if ($publication) {
            return redirect()
                ->route('publications.show',compact('publication'))
                ->with('success','Publicación agregada satisfactoriamente');
        }
        return back()
            ->WithiInput()
            ->with('errors','No se ha podido publicar el documento. Espacio insuficiente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        $publication = Publication::where(function($query) {
            $query->orWhere('visible', true)
                  ->orWhere('user_id', auth()->user()->id);
          })
          ->findOrFail($id);
        return view('publications.show', compact('publication'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $publication = Publication::where('user_id', auth()->user()->id)->findOrFail($id);
        return view('publications.edit', compact('publication'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        $this->validator($request->all(), false)->validate();
        //Busqueda de la publicacion
        $publication = Publication::where('user_id', auth()->user()->id)->findOrFail($id);
        //Optiiene los datos del formulario
        $data = $request->all();
        $data['visible'] = isset($data['visible']);
        $data['documento'] = $publication->documento;
        //Comprueba si se actualiza la evidencia
        if ($request->file('documento') != null) {
            $data = ToServer::saveImage($request, 'documento', 'img/docs');
            ToServer::deleteFile('', $publication->evidencia);
        }
        //Se asegura que no hayan cambiado el usuario
        $data ['user_id'] = auth()->user()->id;
        //Actualiza la publicacion
        $publication->update($data);

        //Retorno a la vista de la publicacion
        $publication = Publication::findOrFail($id);
        return redirect()->route('publications.show',[$publication->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $publication = Publication::where('user_id', auth()->user()->id)->findOrFail($id);
        ToServer::deleteFile('', $publication->documento);
        $publication->delete();
        return redirect()->route('publications.index');
    }
}
