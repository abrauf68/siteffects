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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('main_image')->nullable();
            $table->string('scroll_image')->nullable();
            $table->string('live_url')->nullable();
            $table->string('client')->nullable();
            $table->string('technologies')->nullable();
            $table->dateTime('completion_date')->nullable();
            $table->string('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->text('description')->nullable();
            $table->text('features')->nullable();
            $table->enum('category', [
                'website',
                'ecommerce',
                'web_app',
                'mobile_app',
                'desktop_app',

                'cms',
                'crm',
                'erp',
                'hrm',
                'lms',
                'pos',

                'saas',
                'cloud_system',
                'api_development',
                'microservices',

                'custom_software',
                'enterprise_solution',

                'booking_system',
                'inventory_system',
                'accounting_system',
                'billing_system',

                'marketing_website',
                'landing_page',
                'portfolio',

                'admin_panel',
                'dashboard',

                'iot_system',
                'blockchain_app',
                'ai_ml_system',

                'game',
                'other'
            ])->default('website');

            $table->enum('is_active', ['active', 'inactive'])->default('active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
