<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePrintsRequest;
use App\Http\Requests\UpdatePrintsRequest;
use App\Repositories\PrintsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class PrintsController extends AppBaseController
{
    /** @var  PrintsRepository */
    private $printsRepository;

    public function __construct(PrintsRepository $printsRepo)
    {
        $this->printsRepository = $printsRepo;
        $this->middleware('auth');
    }

    /**
     * Display a listing of the Prints.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->printsRepository->pushCriteria(new RequestCriteria($request));
        $prints = $this->printsRepository->all();

        return view('prints.index')
            ->with('prints', $prints);
    }

    /**
     * Show the form for creating a new Prints.
     *
     * @return Response
     */
    public function create()
    {
        return view('prints.create');
    }

    /**
     * Store a newly created Prints in storage.
     *
     * @param CreatePrintsRequest $request
     *
     * @return Response
     */
    public function store(CreatePrintsRequest $request)
    {
        $input = $request->all();
        $prints = $this->printsRepository->create($input);

        $location = public_path() . '/tmp/' . $input["image"];
        rename($location, public_path() . '/img/templates/' . $input["image"]);

        Flash::success('Prints saved successfully.');

        return redirect(route('prints.index'));
    }

    /**
     * Display the specified Prints.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $prints = $this->printsRepository->findWithoutFail($id);

        if (empty($prints)) {
            Flash::error('Prints not found');

            return redirect(route('prints.index'));
        }

        return view('prints.show')->with('prints', $prints);
    }

    /**
     * Show the form for editing the specified Prints.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $prints = $this->printsRepository->findWithoutFail($id);

        if (empty($prints)) {
            Flash::error('Prints not found');

            return redirect(route('prints.index'));
        }

        return view('prints.edit')->with('prints', $prints);
    }

    /**
     * Update the specified Prints in storage.
     *
     * @param  int $id
     * @param UpdatePrintsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePrintsRequest $request)
    {
        $prints = $this->printsRepository->findWithoutFail($id);

        if (empty($prints)) {
            Flash::error('Prints not found');

            return redirect(route('prints.index'));
        }

        $prints = $this->printsRepository->update($request->all(), $id);

        Flash::success('Prints updated successfully.');

        return redirect(route('prints.index'));
    }

    /**
     * Remove the specified Prints from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $prints = $this->printsRepository->findWithoutFail($id);

        if (empty($prints)) {
            Flash::error('Prints not found');

            return redirect(route('prints.index'));
        }

        $this->printsRepository->delete($id);

        Flash::success('Prints deleted successfully.');

        return redirect(route('prints.index'));
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
            $name = time() . '.png';
            $request->myfile->move($location, $name);
            session(['filename' => $location . $name]);
            // rename($location . $name, public_path().'/images/'. $name);
            $file = basename($location . $name);
            return "" . $file;
            // return "TEsted";
        } catch (Exception $e) {
            return $e;
        }

    }
}
