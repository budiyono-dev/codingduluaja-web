<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\UserRole;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        UserRole::insert([
            ['code'=>'ADMIN', 'name'=>'admin'],
            ['code'=>'USER','name'=> 'user'],
            ['code'=>'WRITER', 'name'=>'writer'],

        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
