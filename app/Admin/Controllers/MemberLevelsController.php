<?php

namespace App\Admin\Controllers;

use App\Models\MemberLevel;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class MemberLevelsController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '会员等级管理';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new MemberLevel);

        $grid->column('id', __('Id'));
        $grid->column('level', __('Level'));
        $grid->column('title', __('Title'));
        $grid->column('logo', __('Logo'))->image();
        $grid->column('discount', __('Discount'));
        $grid->column('is_fee_freight', __('Is fee freight'))->using(YN2TEXT);

        grid_has_enabled($grid);

        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

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
        $show = new Show(MemberLevel::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('level', __('Level'));
        $show->field('title', __('Title'));
        $show->field('logo', __('Logo'))->image();
        $show->field('discount', __('Discount'));
        $show->field('is_fee_freight', __('Is fee freight'))->using(YN2TEXT);
        $show->field('has_enabled', __('Has enabled'))->using(HAS_ENABLED2TEXT);
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new MemberLevel);

        $form->text('title', __('Title'))->required();
        $form->number('level', __('Level'))->default(0)->required();
        $form->image('logo', __('Logo'))->uniqueName();
        $form->number('discount', __('Discount'))->default(100)->max(100)->min(1)->required();
        $form->switch('is_fee_freight', __('Is fee freight'))->default(0);
        $form->switch('has_enabled', __('Has enabled'))->default(1);

        return $form;
    }
}
