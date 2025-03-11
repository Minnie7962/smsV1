<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class() extends Migration {
    public function up(): void
    {
        Schema::create('student_records', static function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->string('admission_number')->nullable()->unique();
            $table->date('admission_date');
            $table->foreignId('my_class_id')->nullable()->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('section_id')->nullable()->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('class_group_id')->nullable()->constrained()->onUpdate('cascade')->onDelete('cascade'); // NEW
            $table->foreignId('academic_year_id')->nullable()->constrained()->onUpdate('cascade')->onDelete('cascade'); // NEW
            $table->string('student_id_number')->nullable()->unique(); // NEW
            $table->boolean('is_graduated')->default(false);
            
            // Additional Contact Information (NEW)
            $table->string('contact_number')->nullable();
            $table->string('father_full_name')->nullable();
            $table->string('father_phone_number')->nullable();
            $table->string('father_address')->nullable();
            $table->string('mother_full_name')->nullable();
            $table->string('mother_phone_number')->nullable();
            $table->string('mother_address')->nullable();
            $table->string('emergency_contact_name')->nullable();
            $table->string('emergency_contact_relationship')->nullable();
            $table->string('emergency_contact_number')->nullable();
            $table->string('emergency_contact_address')->nullable();
        
            $table->timestamps();
        });        
    }

    public function down(): void
    {
        Schema::dropIfExists('student_records');
    }
};
