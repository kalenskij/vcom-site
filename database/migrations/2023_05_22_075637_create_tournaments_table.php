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
        Schema::create('tournaments', function (Blueprint $table) {
            $table->id();
            $table->string('tournament_state');
            $table->string('tournament_name');
            $table->string('tournament_desc1');
            $table->string('tournament_desc2');
            $table->string('tournament_date');
            $table->string('tournament_rank1');
            $table->string('tournament_rank2');
            $table->float('tournament_pricepool');
            $table->string('tournament_img');
        });

        DB::table('tournaments')->insert([
            [
                'tournament_state' => 'past',
                'tournament_name' => 'VCOM :: FIRST',
                'tournament_desc1' => 'Перший турнір для нашого серверу. Обмеження по рангу відсутні, отже приєднатися можуть всі.',
                'tournament_desc2' => 'Запрошуємо на дебют VCOM’у!',
                'tournament_date' => 'Бер. 20 - Бер. 26 2023',
                'tournament_rank1' => 'ВСІ ',
                'tournament_rank2' => 'РАНГИ',
                'tournament_pricepool' => '10000.00',
                'tournament_img' => 'images/qqqqqqqqq.png',
            ],
            [
                'tournament_state' => 'past',
                'tournament_name' => 'VCOM :: SUMMER',
                'tournament_desc1' => 'Турнір для досконалих гравців під літню тематику.',
                'tournament_desc2' => 'Запрошуються команди з середнім рангом від розквіту до безсмертного.',
                'tournament_date' => 'Бер. 21 - Бер. 27 2023',
                'tournament_rank1' => 'ASC-',
                'tournament_rank2' => 'IMMO',
                'tournament_pricepool' => '15000.00',
                'tournament_img' => 'images/Layer_56.png',
            ],
            [
                'tournament_state' => 'past',
                'tournament_name' => 'VCOM :: LAST DASH',
                'tournament_desc1' => 'Наш перший внутрішноьспільнотний турнір!',
                'tournament_desc2' => 'Запрошуються всі команди.',
                'tournament_date' => 'Бер. 22 - Бер. 27 2023',
                'tournament_rank1' => 'ВСІ ',
                'tournament_rank2' => 'РАНГИ',
                'tournament_pricepool' => '20000.00',
                'tournament_img' => 'images/screens33-min.png',
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tournaments');
    }
};


