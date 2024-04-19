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
        Schema::create('jammu_srts', function (Blueprint $table) {
            $table->id();
            $table->string('timestamp',191)->nullable();
            $table->string('app_status',191)->nullable();
            $table->string('scheme',191)->nullable();
            $table->string('app_no',191)->nullable();
            $table->string('reg_no',191)->nullable();
            $table->string('installer_name',191)->nullable();
            $table->string('installer_category',191)->nullable();
            $table->string('pv_band',191)->nullable();
            $table->string('project_name',191)->nullable();
            $table->string('pv_capacity',191)->nullable();
            $table->string('discom_name',191)->nullable();
            $table->string('consumer_no',191)->nullable();
            $table->string('division',191)->nullable();
            $table->string('sub_divison',191)->nullable();
            $table->string('sanction',191)->nullable();
            $table->string('phase_inverter',191)->nullable();
            $table->string('category',191)->nullable();
            $table->string('provider',191)->nullable();
            $table->string('lat',191)->nullable();
            $table->string('long',191)->nullable();
            $table->string('consumer_email',191)->nullable();
            $table->string('consumer_mobile',191)->nullable();
            $table->string('installer_email',191)->nullable();
            $table->string('installer_mobile',191)->nullable();
            $table->string('name_prefix',191)->nullable();
            $table->string('first_name',191)->nullable();
            $table->string('middle_name',191)->nullable();
            $table->string('last_name',191)->nullable();
            $table->string('landline_no',191)->nullable();
            $table->string('street_house_no',191)->nullable();
            $table->string('taluka',191)->nullable();
            $table->string('district',191)->nullable();
            $table->text('city_village',191)->nullable();
            $table->string('state',191)->nullable();
            $table->string('pin',191)->nullable();
            $table->string('comm_address',191)->nullable();
            $table->text('passport_size_photo',191)->nullable();
            $table->string('premises_ownership',191)->nullable(); // 'owned' or 'rented'
            $table->string('electricity_bill',191)->nullable();
            $table->string('aadhaar_no',191)->nullable();
            $table->string('solar_pv_owned_by_consumer',191)->nullable();
            $table->string('subsidy',191)->nullable();
            $table->string('otp_verified_on',191)->nullable();
            $table->string('signed_doc_upload_date',191)->nullable();
            $table->string('last_comment',191)->nullable();
            $table->string('last_comment_date',191)->nullable();
            $table->string('last_comment_replied_date',191)->nullable();
            $table->string('doc_verified_date',191)->nullable();
            $table->text('field_report_status_received',191)->nullable();
            $table->string('quotation_no',191)->nullable();
            $table->string('discom_estimate_amount',191)->nullable();
            $table->string('due_date',191)->nullable();
            $table->string('pay_received',191)->nullable();
            $table->string('pay_made_on',191)->nullable();
            $table->string('self_certify',191)->nullable();
            $table->string('cei_app_id',191)->nullable();
            $table->string('cei_approval_date',191)->nullable();
            $table->string('work_order_no',191)->nullable();
            $table->string('work_order_date',191)->nullable();
            $table->string('work_start_date',191)->nullable();
            $table->string('work_end_date',191)->nullable();
            $table->string('bi_meter_make',191)->nullable();
            $table->string('bi_meter_no',191)->nullable();
            $table->string('solar_meter_make',191)->nullable();
            $table->string('solar_meter_no',191)->nullable();
            $table->string('install_solar_meter_date',191)->nullable();
            $table->string('agreement_signing_date',191)->nullable();
            $table->string('project_estimated_cost',191)->nullable();
            $table->string('pcr_number',191)->nullable();
            $table->string('pcr_submit_date',191)->nullable();
            $table->string('created_by',191)->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jammu_srts');
    }
};
