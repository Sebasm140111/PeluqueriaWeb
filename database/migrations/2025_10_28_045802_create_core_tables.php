<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   public function up(){
  Schema::create('plq_barbers', function(Blueprint $t){
    $t->id(); $t->string('name'); $t->text('bio')->nullable();
    $t->string('photo_url')->nullable(); $t->boolean('active')->default(true);
    $t->timestamps();
  });
  Schema::create('plq_services', function(Blueprint $t){
    $t->id(); $t->string('name'); $t->text('description')->nullable();
    $t->unsignedSmallInteger('duration_min'); $t->string('price_label')->nullable();
    $t->string('photo_url')->nullable(); $t->boolean('active')->default(true);
    $t->timestamps();
  });
  Schema::create('plq_barber_service', function(Blueprint $t){
    $t->foreignId('barber_id')->constrained('plq_barbers')->cascadeOnDelete();
    $t->foreignId('service_id')->constrained('plq_services')->cascadeOnDelete();
    $t->primary(['barber_id','service_id']);
  });
  Schema::create('plq_appointments', function(Blueprint $t){
    $t->id();
    $t->foreignId('user_id')->constrained('users');
    $t->foreignId('barber_id')->constrained('plq_barbers');
    $t->foreignId('service_id')->constrained('plq_services');
    $t->dateTime('starts_at'); $t->dateTime('ends_at');
    $t->enum('status',["PENDING","CONFIRMED","CANCELLED","NO_SHOW"])->default('PENDING');
    $t->uuid('confirm_token')->nullable()->unique();
    $t->string('source_ip',45)->nullable(); $t->string('user_agent',255)->nullable();
    $t->timestamps();
    $t->unique(['barber_id','starts_at']);
    $t->index(['barber_id','starts_at']); $t->index(['user_id','starts_at']);
  });
  Schema::create('plq_barber_schedules', function(Blueprint $t){
    $t->id(); $t->foreignId('barber_id')->constrained('plq_barbers')->cascadeOnDelete();
    $t->unsignedTinyInteger('weekday'); // 0=Dom..6=Sáb
    $t->string('start_time'); $t->string('end_time'); $t->timestamps();
  });
  Schema::create('plq_blackouts', function(Blueprint $t){
    $t->id(); $t->foreignId('barber_id')->nullable()->constrained('plq_barbers')->nullOnDelete();
    $t->dateTime('start'); $t->dateTime('end'); $t->string('reason')->nullable(); $t->timestamps();
  });
}
public function down(){ Schema::dropIfExists('plq_blackouts'); Schema::dropIfExists('plq_barber_schedules'); Schema::dropIfExists('plq_appointments'); Schema::dropIfExists('plq_barber_service'); Schema::dropIfExists('plq_services'); Schema::dropIfExists('plq_barbers'); }
};
