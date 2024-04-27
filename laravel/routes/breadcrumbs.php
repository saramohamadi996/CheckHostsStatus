<?php

use DaveJamesMiller\Breadcrumbs\Facades\Breadcrumbs;

Breadcrumbs::for('dashboard', function ($trail) {
    $trail->push('Dashboard', route('dashboard'));
});

// Settings Index
Breadcrumbs::for('settings.index', function ($trail) {
    $trail->push('Settings', route('settings.index'));
});

// Settings Update
Breadcrumbs::for('settings.edit', function ($trail, $setting = null) {
    $trail->parent('settings.index');
    if ($setting) {
        $trail->push('Update Setting', route('settings.edit', $setting));
    } else {
        $trail->push('Update Setting', route('settings.index'));
    }
});


// Profiles
Breadcrumbs::for('profile.show', function ($trail, $profile) {
    $trail->push('Profile', route('profile.show', $profile));
});

Breadcrumbs::for('profile.edit', function ($trail, $profile) {
    $trail->parent('profile.show', $profile);
    $trail->push('Edit Profile', route('profile.edit', $profile));
});

// Users
Breadcrumbs::for('users.index', function ($trail) {
    $trail->push('Users List', route('users.index'));
});
Breadcrumbs::for('users.create', function ($trail) {
    $trail->parent('users.index');
    $trail->push('Create User', route('users.create'));
});

Breadcrumbs::for('users.show', function ($trail, $user) {
    $trail->parent('Users');
    $trail->push($user->name, route('users.show', $user));
});

Breadcrumbs::for('users.edit', function ($trail, $user) {
    $trail->parent('Users', $user);
    $trail->push('Edit User', route('users.edit', $user));
});

// Listenings
Breadcrumbs::for('listenings.index', function ($trail) {
    $trail->push('Listenings List', route('listenings.index'));
});
Breadcrumbs::for('listenings.create', function ($trail) {
    $trail->parent('listenings.index');
    $trail->push('Create Listening', route('listenings.create'));
});

Breadcrumbs::for('listenings.show', function ($trail, $listening) {
    $trail->parent('listenings.index', $listening);
    $trail->push('Show Listening', route('listenings.show', $listening));
});

Breadcrumbs::for('listenings.edit', function ($trail, $listening) {
    $trail->parent('listenings.index', $listening);
    $trail->push('Edit Listening', route('listenings.edit', $listening));
});

// Readings
Breadcrumbs::for('readings.index', function ($trail) {
    $trail->push('Readings List', route('readings.index'));
});
Breadcrumbs::for('readings.create', function ($trail) {
    $trail->parent('readings.index');
    $trail->push('Create Reading', route('readings.create'));
});

Breadcrumbs::for('readings.questions', function ($trail, $reading) {
    $trail->parent('readings.index', $reading);
    $trail->push('questions Reading', route('readings.questions', $reading));
});

Breadcrumbs::for('readings.show', function ($trail, $reading) {
    $trail->parent('readings.index', $reading);
    $trail->push('Show Reading', route('readings.show', $reading));
});

Breadcrumbs::for('readings.edit', function ($trail, $reading) {
    $trail->parent('readings.index', $reading);
    $trail->push('Edit Reading', route('readings.edit', $reading));
});

// question-types
Breadcrumbs::for('question-types.index', function ($trail) {
    $trail->push('Question Types List', route('question-types.index'));
});
Breadcrumbs::for('question-types.create', function ($trail) {
    $trail->parent('question-types.index');
    $trail->push('Create Question Type', route('question-types.create'));
});

Breadcrumbs::for('question-types.questions', function ($trail, $question_type) {
    $trail->parent('question-types.index', $question_type);
    $trail->push('questions Question Type', route('question-types.questions', $question_type));
});

Breadcrumbs::for('question-types.show', function ($trail, $question_type) {
    $trail->parent('question-types.index', $question_type);
    $trail->push('Show Question Type', route('question-types.show', $question_type));
});

Breadcrumbs::for('question-types.edit', function ($trail, $question_type) {
    $trail->parent('question-types.index', $question_type);
    $trail->push('Edit Question Type', route('question-types.edit', $question_type));
});

// Questions
Breadcrumbs::for('questions.index', function ($trail) {
    $trail->push('Questions List', route('questions.index'));
});
Breadcrumbs::for('questions.create', function ($trail) {
    $trail->parent('questions.index');
    $trail->push('Create Question', route('questions.create'));
});

Breadcrumbs::for('questions.show', function ($trail, $question) {
    $trail->parent('questions.index', $question);
    $trail->push('Show Question', route('questions.show', $question));
});

Breadcrumbs::for('questions.edit', function ($trail, $question) {
    $trail->parent('questions.index', $question);
    $trail->push('Edit Question', route('questions.edit', $question));
});

Breadcrumbs::for('questions.options.create', function ($trail, $reading) {
    $trail->parent('questions.index', $reading);
    $trail->push('questions Options Create', route('questions.options.create', $reading));
});


// Options
Breadcrumbs::for('options.index', function ($trail) {
    $trail->push('Options List', route('options.index'));
});
Breadcrumbs::for('options.create', function ($trail) {
    $trail->parent('options.index');
    $trail->push('Create Option', route('options.create'));
});

Breadcrumbs::for('options.show', function ($trail, $option) {
    $trail->parent('options.index', $option);
    $trail->push('Show Option', route('options.show', $option));
});

Breadcrumbs::for('options.edit', function ($trail, $option) {
    $trail->parent('options.index', $option);
    $trail->push('Edit Option', route('options.edit', $option));
});


// Articles
Breadcrumbs::for('articles.index', function ($trail) {
    $trail->push('Articles', route('articles.index'));
});

Breadcrumbs::for('articles.create', function ($trail) {
    $trail->parent('Articles');
    $trail->push('Create Article', route('articles.create'));
});

Breadcrumbs::for('articles.show', function ($trail, $article) {
    $trail->parent('Articles');
    $trail->push($article->title, route('articles.show', $article));
});

Breadcrumbs::for('articles.edit', function ($trail, $article) {
    $trail->parent('Articles', $article);
    $trail->push('Edit', route('articles.edit', $article));
});

// Categories
Breadcrumbs::for('categories.index', function ($trail) {
    $trail->push('Categories', route('categories.index'));
});

Breadcrumbs::for('categories.create', function ($trail) {
    $trail->parent('Categories');
    $trail->push('Create Category', route('categories.create'));
});

Breadcrumbs::for('categories.show', function ($trail, $category) {
    $trail->parent('Categories');
    $trail->push($category->name, route('categories.show', $category));
});

Breadcrumbs::for('categories.edit', function ($trail, $category) {
    $trail->parent('Categories', $category);
    $trail->push('Edit', route('categories.edit', $category));
});



