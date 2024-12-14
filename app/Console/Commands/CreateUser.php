<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class CreateUser extends Command
{
protected $signature = 'app:create-user {user-data}';

    protected $description = 'Create user with spesific role (ADMIN,WRITER,MEMBER,USER), format user-data = {name,email,password,role}';

    public function handle()
    {
        $args = $this->argument('user-data');
        $arr = explode(',', $args);
        info('create user from console = '.$args);

        $validator = Validator::make([
            'name' => $arr[0],
            'email' => $arr[1],
            'password' => $arr[2],
            'role' => $arr[3],
        ], [
            'name' => 'required|string|min:1|max:255',
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|max:255',
            'role' => 'required|in:writer,admin',
        ]);

        if ($validator->fails()) {
            $this->error($validator->errors()->first());

            return;
        }

        $validated = $validator->validated();
        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
        ]);

        $user->email_verified_at = now();
        $user->save();

        $this->info('User created successfully');
    }}
