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
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->BigInteger('tournament_id');
            $table->BigInteger('match_number');
            $table->String('team1_name');
            $table->String('team2_name');
        });

        DB::table('games')->insert([
            [
                'tournament_id' => '1',
                'match_number' => '1',
                'team1_name' => 'LGE',
                'team2_name' => 'Sila4i',
            ],
            [
                'tournament_id' => '1',
                'match_number' => '2',
                'team1_name' => 'NR',
                'team2_name' => 'TM',
            ],
            [
                'tournament_id' => '1',
                'match_number' => '3',
                'team1_name' => 'Akira',
                'team2_name' => 'Brokies',
            ],
            [
                'tournament_id' => '1',
                'match_number' => '4',
                'team1_name' => '130cm',
                'team2_name' => 'BTS',
            ],
            [
                'tournament_id' => '1',
                'match_number' => '5',
                'team1_name' => 'Sila4i',
                'team2_name' => 'TM',
            ],
            [
                'tournament_id' => '1',
                'match_number' => '6',
                'team1_name' => 'Brokies',
                'team2_name' => 'BTS',
            ],
            [
                'tournament_id' => '1',
                'match_number' => '7',
                'team1_name' => 'LGE',
                'team2_name' => 'NR',
            ],
            [
                'tournament_id' => '1',
                'match_number' => '8',
                'team1_name' => 'Akira',
                'team2_name' => '130cm',
            ],
            [
                'tournament_id' => '1',
                'match_number' => '9',
                'team1_name' => 'Sila4i',
                'team2_name' => 'NR',
            ],
            [
                'tournament_id' => '1',
                'match_number' => '10',
                'team1_name' => 'Brokies',
                'team2_name' => '130cm',
            ],
            [
                'tournament_id' => '1',
                'match_number' => '11',
                'team1_name' => 'LGE',
                'team2_name' => 'Akira',
            ],
            [
                'tournament_id' => '1',
                'match_number' => '12',
                'team1_name' => 'Sila4i',
                'team2_name' => 'Brokies',
            ],
            [
                'tournament_id' => '1',
                'match_number' => '13',
                'team1_name' => 'Sila4i',
                'team2_name' => 'Akira',
            ],
            [
                'tournament_id' => '1',
                'match_number' => '14',
                'team1_name' => 'LGE',
                'team2_name' => 'Sila4i',
            ],
            [
                'tournament_id' => '2',
                'match_number' => '1',
                'team1_name' => 'LGE',
                'team2_name' => 'Sila4i',
            ],
            [
                'tournament_id' => '2',
                'match_number' => '2',
                'team1_name' => 'NR',
                'team2_name' => 'TM',
            ],
            [
                'tournament_id' => '2',
                'match_number' => '3',
                'team1_name' => 'Akira',
                'team2_name' => 'Brokies',
            ],
            [
                'tournament_id' => '2',
                'match_number' => '4',
                'team1_name' => '130cm',
                'team2_name' => 'BTS',
            ],
            [
                'tournament_id' => '2',
                'match_number' => '5',
                'team1_name' => 'Sila4i',
                'team2_name' => 'TM',
            ],
            [
                'tournament_id' => '2',
                'match_number' => '6',
                'team1_name' => 'Brokies',
                'team2_name' => 'BTS',
            ],
            [
                'tournament_id' => '2',
                'match_number' => '7',
                'team1_name' => 'LGE',
                'team2_name' => 'NR',
            ],
            [
                'tournament_id' => '2',
                'match_number' => '8',
                'team1_name' => 'Akira',
                'team2_name' => '130cm',
            ],
            [
                'tournament_id' => '2',
                'match_number' => '9',
                'team1_name' => 'Sila4i',
                'team2_name' => 'NR',
            ],
            [
                'tournament_id' => '2',
                'match_number' => '10',
                'team1_name' => 'Brokies',
                'team2_name' => '130cm',
            ],
            [
                'tournament_id' => '2',
                'match_number' => '11',
                'team1_name' => 'LGE',
                'team2_name' => 'Akira',
            ],
            [
                'tournament_id' => '2',
                'match_number' => '12',
                'team1_name' => 'Sila4i',
                'team2_name' => 'Brokies',
            ],
            [
                'tournament_id' => '2',
                'match_number' => '13',
                'team1_name' => 'Sila4i',
                'team2_name' => 'Akira',
            ],
            [
                'tournament_id' => '2',
                'match_number' => '14',
                'team1_name' => 'LGE',
                'team2_name' => 'Sila4i',
            ],
            [
                'tournament_id' => '3',
                'match_number' => '1',
                'team1_name' => 'LGE',
                'team2_name' => 'Sila4i',
            ],
            [
                'tournament_id' => '3',
                'match_number' => '2',
                'team1_name' => 'NR',
                'team2_name' => 'TM',
            ],
            [
                'tournament_id' => '3',
                'match_number' => '3',
                'team1_name' => 'Akira',
                'team2_name' => 'Brokies',
            ],
            [
                'tournament_id' => '3',
                'match_number' => '4',
                'team1_name' => '130cm',
                'team2_name' => 'BTS',
            ],
            [
                'tournament_id' => '2',
                'match_number' => '5',
                'team1_name' => 'Sila4i',
                'team2_name' => 'TM',
            ],
            [
                'tournament_id' => '2',
                'match_number' => '6',
                'team1_name' => 'Brokies',
                'team2_name' => 'BTS',
            ],
            [
                'tournament_id' => '3',
                'match_number' => '7',
                'team1_name' => 'LGE',
                'team2_name' => 'NR',
            ],
            [
                'tournament_id' => '3',
                'match_number' => '8',
                'team1_name' => 'Akira',
                'team2_name' => '130cm',
            ],
            [
                'tournament_id' => '3',
                'match_number' => '9',
                'team1_name' => 'Sila4i',
                'team2_name' => 'NR',
            ],
            [
                'tournament_id' => '3',
                'match_number' => '10',
                'team1_name' => 'Brokies',
                'team2_name' => '130cm',
            ],
            [
                'tournament_id' => '3',
                'match_number' => '11',
                'team1_name' => 'LGE',
                'team2_name' => 'Akira',
            ],
            [
                'tournament_id' => '3',
                'match_number' => '12',
                'team1_name' => 'Sila4i',
                'team2_name' => 'Brokies',
            ],
            [
                'tournament_id' => '3',
                'match_number' => '13',
                'team1_name' => 'Sila4i',
                'team2_name' => 'Akira',
            ],
            [
                'tournament_id' => '3',
                'match_number' => '14',
                'team1_name' => 'LGE',
                'team2_name' => 'Sila4i',
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('matches');
    }
};
