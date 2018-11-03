<?php

namespace App\Admin\Controllers;

use App\Order;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;

class AdminOrderController extends Controller
{
    use HasResourceActions;

    /**
     * Index interface.
     *
     * @param Content $content
     * @return Content
     */
    public function index(Content $content)
    {
        return $content
            ->header('Index')
            ->description('description')
            ->body($this->grid());
    }

    /**
     * Show interface.
     *
     * @param mixed $id
     * @param Content $content
     * @return Content
     */
    public function show($id, Content $content)
    {
        return $content
            ->header('Detail')
            ->description('description')
            ->body($this->detail($id));
    }

    /**
     * Edit interface.
     *
     * @param mixed $id
     * @param Content $content
     * @return Content
     */
    public function edit($id, Content $content)
    {
        return $content
            ->header('Edit')
            ->description('description')
            ->body($this->form()->edit($id));
    }

    /**
     * Create interface.
     *
     * @param Content $content
     * @return Content
     */
    public function create(Content $content)
    {
        return $content
            ->header('Create')
            ->description('description')
            ->body($this->form());
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Order);

        $grid->id('Id');
        $grid->created_at('Created at');
        $grid->updated_at('Updated at');
        $grid->user_id('User id');
        $grid->cart('Cart');
        $grid->address('Address');
        $grid->name('Name');
        $grid->city('City');
        $grid->country('Country');
        $grid->zip_code('Zip code');
        $grid->tel('Tel');
        $grid->payment_id('Payment id');

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Order::findOrFail($id));

        $show->id('Id');
        $show->created_at('Created at');
        $show->updated_at('Updated at');
        $show->user_id('User id');
        $show->cart('Cart');
        $show->address('Address');
        $show->name('Name');
        $show->city('City');
        $show->country('Country');
        $show->zip_code('Zip code');
        $show->tel('Tel');
        $show->payment_id('Payment id');

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Order);

        $form->number('user_id', 'User id');
        $form->textarea('cart', 'Cart');
        $form->textarea('address', 'Address');
        $form->text('name', 'Name');
        $form->text('city', 'City');
        $form->text('country', 'Country');
        $form->text('zip_code', 'Zip code');
        $form->text('tel', 'Tel');
        $form->text('payment_id', 'Payment id');

        return $form;
    }
}
