<?php
use Migrations\AbstractSeed;
use Cake\ORM\TableRegistry;
/**
 * Users seed.
 */
class UsersSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * https://book.cakephp.org/phinx/0/en/seeding.html
     *
     * @return void
     */
    public function run()
    {
        // variable to store the current time in seconds  
        $currentTimeinSeconds = time();  
        
        // converts the time in seconds to current date  
        $currentDate = date('Y/m/d', $currentTimeinSeconds); 
        $UsersTable = TableRegistry::get('users');
        $user = $UsersTable->newEntity();

        $user->username = 'Will';
        $user->password = 'admin';
        $user->first_name = 'admin';
        $user->last_name = 'admin';
        $user->role = 'admin';
        $user->active = true;
        $user->created = $currentDate;
        $user->modified= $currentDate;
        $UsersTable->save($user);


    }
}
