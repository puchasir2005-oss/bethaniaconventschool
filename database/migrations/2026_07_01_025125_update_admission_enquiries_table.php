<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('admission_enquiries', function (Blueprint $table) {
            $table->dropColumn('parent_name');
            $table->string('father_name')->after('id');
            $table->string('mother_name')->after('father_name');
            $table->string('previous_school')->nullable()->after('admission_class');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('admission_enquiries', function (Blueprint $table) {
            $table->string('parent_name')->after('id');
            $table->dropColumn(['father_name', 'mother_name', 'previous_school']);
        });
    }
};
