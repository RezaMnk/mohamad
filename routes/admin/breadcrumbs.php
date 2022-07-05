<?php

use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use App\Models\Attribute;
use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;


Breadcrumbs::for('admin.index', function (BreadcrumbTrail $trail): void {
    $trail->push('پنل مدیریت', route('admin.index'));
});


/*
 * Users
 */
Breadcrumbs::for('admin.users.index', function (BreadcrumbTrail $trail): void {
    $trail->parent('admin.index');

    $trail->push('کاربران', route('admin.users.index'));
});

Breadcrumbs::for('admin.users.edit', function (BreadcrumbTrail $trail, User $user): void {
    $trail->parent('admin.users.index');

    $trail->push($user->name, route('admin.users.edit', $user));
});

Breadcrumbs::for('admin.users.create', function (BreadcrumbTrail $trail): void {
    $trail->parent('admin.users.index');

    $trail->push('ایجاد کاربر', route('admin.users.create'));
});

Breadcrumbs::for('admin.users.vip', function (BreadcrumbTrail $trail): void {
    $trail->parent('admin.users.index');

    $trail->push('کاربران ویژه', route('admin.users.vip'));
});


/*
 * Prodcuts
 */
Breadcrumbs::for('admin.products.index', function (BreadcrumbTrail $trail): void {
    $trail->parent('admin.index');

    $trail->push('محصولات', route('admin.products.index'));
});

Breadcrumbs::for('admin.products.edit', function (BreadcrumbTrail $trail, Product $product): void {
    $trail->parent('admin.products.index');

    $trail->push($product->name, route('admin.products.edit', $product));
});

Breadcrumbs::for('admin.products.create', function (BreadcrumbTrail $trail): void {
    $trail->parent('admin.products.index');

    $trail->push('ایجاد محصول', route('admin.products.create'));
});


/*
 * Categories
 */
Breadcrumbs::for('admin.categories.index', function (BreadcrumbTrail $trail): void {
    $trail->parent('admin.index');

    $trail->push('دسته بندی ها', route('admin.categories.index'));
});

Breadcrumbs::for('admin.categories.edit', function (BreadcrumbTrail $trail, Category $category): void {
    $trail->parent('admin.categories.index');

    $trail->push($category->name, route('admin.categories.edit', $category));
});


/*
 * Attributes
 */
Breadcrumbs::for('admin.attributes.index', function (BreadcrumbTrail $trail): void {
    $trail->parent('admin.index');

    $trail->push('ویژگی ها', route('admin.attributes.index'));
});

Breadcrumbs::for('admin.attributes.edit', function (BreadcrumbTrail $trail, Attribute $attribute): void {
    $trail->parent('admin.attributes.index');

    $trail->push($attribute->name, route('admin.attributes.edit', $attribute));
});


/*
 * Orders
 */
Breadcrumbs::for('admin.orders.index', function (BreadcrumbTrail $trail): void {
    $trail->parent('admin.index');

    $trail->push('سفارشات', route('admin.orders.index'));
});

Breadcrumbs::for('admin.orders.edit', function (BreadcrumbTrail $trail, Order $order): void {
    $trail->parent('admin.orders.index');

    $trail->push("سفارش $order->id", route('admin.orders.edit', $order));
});
