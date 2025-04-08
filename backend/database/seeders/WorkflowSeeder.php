<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Workflow;

class WorkflowSeeder extends Seeder
{
    public function run()
    {
        Workflow::create([
            'name' => 'Blog Publishing',
            'stages' => [
                [
                    'name' => 'Draft',
                    'transitions' => ['Review'],
                    'permissions' => ['author']
                ],
                [
                    'name' => 'Review',
                    'transitions' => ['Published', 'Revisions'],
                    'permissions' => ['editor']
                ]
            ]
        ]);
    }
}