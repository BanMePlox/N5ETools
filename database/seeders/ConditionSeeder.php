<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Condition;

class ConditionSeeder extends Seeder
{
    public function run()
    {
        Condition::create([
            'name' => 'Burned',
            'description' => <<<EOD
A Burned creature feels an agonizing searing pain begin to swell upon them, as well as flames catching onto them.

**Effects:**
- Takes 1d8 fire damage per rank at the start of each turn.
- -2 penalty to Concentration Checks per rank.
- Immune if immune to fire damage.
- Ends after 1 minute or with a DC 15 Dexterity (Survival) Action or water submersion.
EOD,
            'type' => 'Elemental',
            'max_rank' => 5
        ]);

        Condition::create([
            'name' => 'Chilled',
            'description' => <<<EOD
A Chilled creature becomes overwhelmed with cold, causing their body to shiver and become numb.

**Effects:**
- Takes 1d6 cold damage when moving (per rank).
- Speed reduced by 5ft per rank.
- -1 penalty to Dexterity checks/saves per rank.
- Resistant/immune if resistant/immune to cold.
- Ends after 1 minute or when the effect duration expires.
EOD,
            'type' => 'Elemental',
            'max_rank' => 5
        ]);

        Condition::create([
            'name' => 'Corroded',
            'description' => <<<EOD
A Corroded creature has been exposed to acidic compounds, causing flesh and equipment to wither.

**Effects:**
- -2 penalty to Damage Reduction per rank.
- -1 penalty to Constitution checks/saves per rank.
- Ends with a DC 15 Dexterity/Constitution check or water submersion.
EOD,
            'type' => 'Elemental',
            'max_rank' => 5
        ]);

        Condition::create([
            'name' => 'Shocked',
            'description' => <<<EOD
A Shocked creature's nervous system floods with electricity, causing spasms and brain fog.

**Effects:**
- Takes 1d6 lightning damage when using Reactions (per rank).
- DC 8 Flat check (+1 per extra rank) to avoid double jutsu cost.
- Resistant/immune if resistant/immune to lightning.
- Ends with a DC 15 Constitution (Survival) Action.
EOD,
            'type' => 'Elemental',
            'max_rank' => 5
        ]);

        Condition::create([
            'name' => 'Envenomed',
            'description' => <<<EOD
An Envenomed creature suffers from rapid vitality loss due to poison or toxins.

**Effects:**
- Takes 1d6 poison damage per rank at the start of each turn.
- -1 penalty to AC per rank.
- Cannot benefit from rests.
- Immune if immune to poison damage.
- Effects occur hourly outside combat.
EOD,
            'type' => 'Elemental',
            'max_rank' => 5
        ]);
    }
}
