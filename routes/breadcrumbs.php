<?php // routes/breadcrumbs.php

// Note: Laravel will automatically resolve `Breadcrumbs::` without
// this import. This is nice for IDE syntax and refactoring.
// use Diglactic\Breadcrumbs\Breadcrumbs;

// // This import is also not required, and you could replace `BreadcrumbTrail $trail`
// //  with `$trail`. This is nice for IDE type checking and completion.
// use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

// // News
// Breadcrumbs::for('news', function ($trail) {
//     $trail->push('News', url('/'));
// });

// Breadcrumbs::for('article', function ($trail, $content) {
//     $trail->parent('news');
//     $trail->push($content->id_category, url('/article/', $content->id));
// });

// // News > Categories
// Breadcrumbs::for('category', function ($trail, $item) {
//     $trail->parent('news');
//     $trail->push($item->id_category, url('/categories/', $item->id_category));
// });

// // Breadcrumbs::for('category', function ($trail) {
// //     $trail->push('Title Here', url('categories/1'));
// // });

// // Home > More
// Breadcrumbs::for('more', function ($trail) {
//     $trail->parent('news');
//     $trail->push('More', url('/'));
// });

// // Home > More > Panduan Komunitas Parlemen
// Breadcrumbs::for('pkp', function ($trail) {
//     $trail->parent('more');
//     $trail->push('Panduan Komunitas Parlemen', url('/pkp'));
// });

// // Home > More > Pedoman Media Siber
// Breadcrumbs::for('pms', function ($trail) {
//     $trail->parent('more');
//     $trail->push('Pedoman Media Siber', url('/pms'));
// });

// // Home > More > Ketentuan dan Kebijakan Iklan
// Breadcrumbs::for('kki', function ($trail) {
//     $trail->parent('more');
//     $trail->push('Ketentuan dan Kebijakan Iklan', url('/kki'));
// });

// // Home > More > Ketentuan dan Kebijakan Privasi
// Breadcrumbs::for('kkp', function ($trail) {
//     $trail->parent('more');
//     $trail->push('Ketentuan dan Kebijakan Privasi', url('/kkp'));
// });

// // Home > More > Bantuan
// Breadcrumbs::for('bantuan', function ($trail) {
//     $trail->parent('more');
//     $trail->push('Bantuan', url('/bantuan'));
// });