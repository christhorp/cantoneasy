<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		 $this->call('CharacterSeeder');
	}

}

class CharacterSeeder extends Seeder{
    
    public function run()
    {
        DB::table('characters')->delete();
        
        require_once('characters_data.php');
        
        foreach($chars as $char){
            Character::create(array('character' => $char['character'], 'definition' => $char['definition'], 'simple_definition' => $char['simple_definition']));
        }
        
    }
}
