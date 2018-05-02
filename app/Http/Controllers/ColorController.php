<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateColorRequest;
use App\Http\Requests\UpdateColorRequest;
use App\Repositories\ColorRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class ColorController extends AppBaseController
{
    /** @var  ColorRepository */
    private $colorRepository;

    public function __construct(ColorRepository $colorRepo)
    {
        $this->colorRepository = $colorRepo;
        $this->middleware('auth');
    }

    /**
     * Display a listing of the Color.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->colorRepository->pushCriteria(new RequestCriteria($request));
        $colors = $this->colorRepository->all();

        return view('colors.index')
            ->with('colors', $colors);
    }

    /**
     * Show the form for creating a new Color.
     *
     * @return Response
     */
    public function create()
    {
        return view('colors.create');
    }

    /**
     * Store a newly created Color in storage.
     *
     * @param CreateColorRequest $request
     *
     * @return Response
     */
    public function store(CreateColorRequest $request)
    {
        $input = $request->all();

        $color = $this->colorRepository->create($input);

        Flash::success('Color saved successfully.');

        return redirect(route('colors.index'));
    }

    /**
     * Display the specified Color.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $color = $this->colorRepository->findWithoutFail($id);

        if (empty($color)) {
            Flash::error('Color not found');

            return redirect(route('colors.index'));
        }

        return view('colors.show')->with('color', $color);
    }

    /**
     * Show the form for editing the specified Color.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $color = $this->colorRepository->findWithoutFail($id);

        if (empty($color)) {
            Flash::error('Color not found');

            return redirect(route('colors.index'));
        }

        return view('colors.edit')->with('color', $color);
    }

    /**
     * Update the specified Color in storage.
     *
     * @param  int              $id
     * @param UpdateColorRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateColorRequest $request)
    {
        $color = $this->colorRepository->findWithoutFail($id);

        if (empty($color)) {
            Flash::error('Color not found');

            return redirect(route('colors.index'));
        }

        $color = $this->colorRepository->update($request->all(), $id);

        Flash::success('Color updated successfully.');

        return redirect(route('colors.index'));
    }

    /**
     * Remove the specified Color from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $color = $this->colorRepository->findWithoutFail($id);

        if (empty($color)) {
            Flash::error('Color not found');

            return redirect(route('colors.index'));
        }

        $this->colorRepository->delete($id);

        Flash::success('Color deleted successfully.');

        return redirect(route('colors.index'));
    }
}
