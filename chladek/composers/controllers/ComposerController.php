<?php

namespace chladek\composers\controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Validator;
use Chladek\Composers\Models\Composer;

class ComposerController extends Controller
{
    /**
     * @param Request $request
     * @return Response
     */
    public function createNewComposer(Request $request): Response
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:50|string',
            'genre' => 'required|max:191|string',
            'born_year' => 'required|integer',
            'death_year' => 'nullable|integer',
            'description' => 'required|max:65535'
        ]);
        if ($validator->fails() || !Composer::create($request->all())) {
            return response()->json(['success' => false], 200);
        }
        return response()->json(['success' => true], 201);
    }

    /**
     * @param Request $request
     * @return Response
     */
    public function removeComposer(Request $request) : Response
    {
        $id = $request->query->get('id') ?? false;
        if (!$id || !is_numeric($id)) {
            return response()->json(['message' => 'Id required !'], 200);
        }
        if (!Composer::destroy($id)) {
            return response()->json(['success' => false], 200);
        }
        return response()->json(null, 204);
    }

    /**
     * @param Request $request
     * @return Response
     */
    public function autocomplete(Request $request) : Response
    {
        $data = Composer::select('name', 'genre')
            ->where('name', 'LIKE', "%{$request->query->get('name')}%")
            ->get();
        return response()->json($data);
    }
}