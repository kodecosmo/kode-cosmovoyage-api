<?php

namespace Database\Seeders;

use App\Models\v1\Voyage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VoyageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Voyage : Taj Mahal India -> Moscow Red Square Russia
        $voyage = new Voyage;
        $voyage->from_gate_id = 1;
        $voyage->to_gate_id = 10;
        $voyage->time = 0.2;
        $voyage->save();

        // Voyage : Moscow Red Square Russia -> Taj Mahal India
        $voyage = new Voyage;
        $voyage->from_gate_id = 10;
        $voyage->to_gate_id = 1;
        $voyage->time = 0.2;
        $voyage->save();

        // Voyage : Washington DC America -> Dark Side ( Moon )
        $voyage = new Voyage;
        $voyage->from_gate_id = 17;
        $voyage->to_gate_id = 28;
        $voyage->time = 1;
        $voyage->save();

        // Voyage : Dark Side ( Moon ) -> Washington DC America
        $voyage = new Voyage;
        $voyage->from_gate_id = 28;
        $voyage->to_gate_id = 17;
        $voyage->time = 1;
        $voyage->save();

        // Voyage : Washington DC America -> Mawrth Vallis ( Mars )
        $voyage = new Voyage;
        $voyage->from_gate_id = 17;
        $voyage->to_gate_id = 65;
        $voyage->time = 5.7;
        $voyage->save();

        // Voyage : Mawrth Vallis ( Mars ) -> Washington DC America
        $voyage = new Voyage;
        $voyage->from_gate_id = 65;
        $voyage->to_gate_id = 17;
        $voyage->time = 5.7;
        $voyage->save();

        // Voyage : Iani Chaos ( Mars ) -> Eiffel Tower France
        $voyage = new Voyage;
        $voyage->from_gate_id = 68;
        $voyage->to_gate_id = 20;
        $voyage->time = 6;
        $voyage->save();

        // Voyage : Iani Chaos ( Mars ) -> Mawrth Vallis ( Mars )
        $voyage = new Voyage;
        $voyage->from_gate_id = 68;
        $voyage->to_gate_id = 65;
        $voyage->time = 0.3;
        $voyage->save();

        // Voyage : Mawrth Vallis ( Mars ) -> Dark Side ( Moon )
        $voyage = new Voyage;
        $voyage->from_gate_id = 65;
        $voyage->to_gate_id = 28;
        $voyage->time = 4.7;
        $voyage->save();

        // Voyage : Dark Side ( Moon ) -> Mawrth Vallis ( Mars )
        $voyage = new Voyage;
        $voyage->from_gate_id = 28;
        $voyage->to_gate_id = 65;
        $voyage->time = 4.7;
        $voyage->save();
    }
}
