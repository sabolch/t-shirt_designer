<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateClothesRequest;
use App\Http\Requests\UpdateClothesRequest;
use App\Repositories\ClothesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class ClothesController extends AppBaseController
{
    /** @var  ClothesRepository */
    private $clothesRepository;

    public function __construct(ClothesRepository $clothesRepo)
    {
        $this->clothesRepository = $clothesRepo;
        $this->middleware('auth');
    }

    /**
     * Display a listing of the Clothes.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->clothesRepository->pushCriteria(new RequestCriteria($request));
        $clothes = $this->clothesRepository->all();

        return view('clothes.index')
            ->with('clothes', $clothes);
    }

    /**
     * Show the form for creating a new Clothes.
     *
     * @return Response
     */
    public function create()
    {
        return view('clothes.create');
    }

    /**
     * Store a newly created Clothes in storage.
     *
     * @param CreateClothesRequest $request
     *
     * @return Response
     */
    public function store(CreateClothesRequest $request)
    {
        $input = $request->all();

        $clothes = $this->clothesRepository->create($input);

        $location = public_path() . '/tmp/' . $input["image"] . '_front.png';
        $location2 = public_path() . '/tmp/' . $input["image"] . '_back.png';
        rename($location, public_path() . '/img/t-shirts/' . $input["image"] . '_front.png');
        rename($location2, public_path() . '/img/t-shirts/' . $input["image"] . '_back.png');

        Flash::success('Clothes saved successfully.');

        return redirect(route('clothes.index'));
    }

    /**
     * Display the specified Clothes.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $clothes = $this->clothesRepository->findWithoutFail($id);

        if (empty($clothes)) {
            Flash::error('Clothes not found');

            return redirect(route('clothes.index'));
        }

        return view('clothes.show')->with('clothes', $clothes);
    }

    /**
     * Show the form for editing the specified Clothes.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $clothes = $this->clothesRepository->findWithoutFail($id);

        if (empty($clothes)) {
            Flash::error('Clothes not found');

            return redirect(route('clothes.index'));
        }

        return view('clothes.edit')->with('clothes', $clothes);
    }

    /**
     * Update the specified Clothes in storage.
     *
     * @param  int $id
     * @param UpdateClothesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateClothesRequest $request)
    {
        $clothes = $this->clothesRepository->findWithoutFail($id);

        if (empty($clothes)) {
            Flash::error('Clothes not found');

            return redirect(route('clothes.index'));
        }

        $clothes = $this->clothesRepository->update($request->all(), $id);

        Flash::success('Clothes updated successfully.');

        return redirect(route('clothes.index'));
    }

    /**
     * Remove the specified Clothes from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $clothes = $this->clothesRepository->findWithoutFail($id);

        if (empty($clothes)) {
            Flash::error('Clothes not found');

            return redirect(route('clothes.index'));
        }

        $this->clothesRepository->delete($id);

        Flash::success('Clothes deleted successfully.');

        return redirect(route('clothes.index'));
    }

    public function uploade(Request $request)
    {
        try {
            $location = public_path() . '/tmp/';

            if (!file_exists($location)) {
                mkdir($location, 0777, true);
            }

            $files = glob($location . '*');
            foreach ($files as $file) {
                if (is_file($file))
                    unlink($file);
            }

            $name = time();
            $request->myfile->move($location, $name . '_front.png');
            $request->myfile2->move($location, $name . '_back.png');
            $file = basename($location . $name);
            return "" . $file;
        } catch (Exception $e) {
            return $e;
        }

    }
}
