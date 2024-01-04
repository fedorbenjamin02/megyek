<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Megyek;
use Illuminate\Http\Response;
use Illuminate\Http\Request;


class MegyekController extends Controller
{
        
    public function index()
    {
        $data = Megyek::orderby('name')->get();
        $content = json_encode(['data' => $data, 'message' => 'Listed']);
        return response($content, Response::HTTP_OK);
           
    }

    public function create() {
        return view('megyek/create');
    }

    public function edit($id) {
        $entity = Megyek::find($id);

        return view('megyek/edit', ['entity' => $entity]);
    }

    public function update(Request $request, $id)
    {
        if ($id) {
            /** @var Megyek $entity */
            $entity = Megyek::find($id);
        }
        if (!$entity) {
            abort(404);
        }
        $entity = $this->setEntityData($entity, $request);
        $entity->update();

        return redirect(route('megyekk') . '#' . $entity->id);
    }

    public function delete(Request $request, $id)
    {
        /** @var Megyek $entity */
        $entity = Megyek::find($id);
        
        $entity?->delete();

        $content = json_encode(['data' => [], 'message' => 'Deleted']);
        return response($content, Response::HTTP_GONE);
    }

    public function save(Request $request)
    {
      $id = $request->get('id');
      if ($id) {
        $entity = Megyek::find($id);
        if (!$entity) {
            $content = json_encode(['data' => [], 'message' => 'Not found']);
            return response($content, Response::HTTP_NOT_FOUND);
        }

        $entity = $this->setEntityData($entity, $request);
        $entity->update();
        $content = json_encode(['data' =>$entity, 'message' => 'Updated']);
        return response($content);
      }
      $entity = new Megyek();
      $entity = $this->setEntityData($entity, $request);
      $entity -> save();
      $content = json_encode(['data' => $entity, 'message' => 'Created']);
      return response($content, Response::HTTP_CREATED);

    }

    private function setEntityData(Megyek $entity, Request $request): ?Megyek
    {
        $entity->name = $request->get('name');

        return $entity;
    }

    private function getQuery()
    {
        return Megyek::select('*');
    }

    public function search(Request $request) {
        $needle = $request->get('needle');
        $entities = $this->getQuery()
            ->orWhere('name', 'like', "%{$needle}%")
            ->where('is_active', true)
            ->orderBy('name')
            ->get();
        if (!$entities) {
            $content = json_encode(['data' => [], 'message' => 'Not found']);
            return response($content, Response::HTTP_NOT_FOUND);
        }

        $content = json_encode(['data' => $entities, 'message' => 'Data found']);
        return response($content, Response::HTTP_FOUND);
        
    }
    
}
?>

<script>
    
</script>
