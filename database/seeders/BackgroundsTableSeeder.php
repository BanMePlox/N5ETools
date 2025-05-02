<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Background;

class BackgroundsTableSeeder extends Seeder
{
    public function run()
    {
        Background::create([
            'name' => 'Outlander', // Nombre del background
            'skill_proficiencies' => 'Survival, Athletics',
            'tool_proficiencies' => 'One musical instrument',
            'equipment' => 'A staff, a hunting trap, and a trophy from an animal you killed',
            'equipment_pack' => 'Explorer’s Pack',
            'feature' => 'Wanderer',
            'selection' => 'Choose one: Nature or Survival',
        ]);

        Background::create([
            'name' => 'Scholar', // Nombre del background
            'skill_proficiencies' => 'History, Investigation',
            'tool_proficiencies' => 'Calligrapher\'s Supplies',
            'equipment' => 'A set of fine clothes, a letter of recommendation',
            'equipment_pack' => 'Scholar’s Pack',
            'feature' => 'Researcher',
            'selection' => 'Choose one: History or Investigation',
        ]);

        Background::create([
            'name' => 'Entertainer',
            'skill_proficiencies' => 'Acrobatics, Performance',
            'tool_proficiencies' => 'Disguise kit',
            'equipment' => 'A Love letter from someone you used to be close to, A Costume from an event prior, Wallet containing 100 Ryo.',
            'equipment_pack' => 'Infiltrator’s or Captain’s Pack (Choose one).',
            'feature' => 'BACK BY POPULAR DEMAND: You can always find a place to perform, usually in an inn or town square but possibly with a circus, at a theater, or even in a noble’s court. At such a place, you receive free lodging and food of a modest or comfortable standard (depending on the quality of the establishment), as long as you perform each night. In addition, your performance makes you something of a local figure. When strangers recognize you in a town where you have performed, they typically take a liking to you, while you easily blend in to the local population.',
            'selection' => '<ul>
                              <li>Increase any ability score by +1. (Recommended: Intelligence, Charisma)</li>
                              <li>Gain a feat from Chapter 13: Customization options. Regardless of the feat chosen, you do not gain an ability score improvement from the feat you select. (Recommended: General, Skill, Genjutsu)</li>
                            </ul>',
        ]);
    }

}
