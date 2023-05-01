<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
//    public function test_login_form()
//    {
//        $response = $this->get('/login');
//
//        $response->assertStatus(200);
//    }
//
//    public function test_user_duplication()
//    {
//
//        $user1 = User::create([
//            'name' => 'John',
//            'email' => 'tahmid.tf1@gmail.com',
//            'password' => 'secret'
//        ]);
//
//        $user2 = User::create([
//            'name' => 'Tahmid',
//            'email' => 'tahmid.tf2@gmail.com',
//            'password' => 'secret'
//        ]);
//
//        $this->assertTrue($user1->name != $user2->name);
//    }



//    public function test_it_stores_new_user()
//    {
//        $data = [
//            'name' => 'John Doe',
//            'email' => 'johndoe@example.com',
//            'password' => 'password',
//            'password_confirmation' => 'password'
//        ];
//
//        $response = $this->post(route('register'), $data);
//
//
//        $response->assertRedirect('/home');
//    }

//    public function test_a()
//    {
//        $this->assertDatabaseHas('users',[
//            'name' => 'John Doe'
//        ]);
//    }

    public function test_if_seeder_works()
    {
      $this->seed();
    }

}
