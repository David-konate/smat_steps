<?php

namespace Database\Factories;

use App\Models\Friend;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class FriendFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // Sélectionnez aléatoirement deux IDs d'utilisateurs différents
        $userIds = User::pluck('id')->toArray();
        $user1 = $this->faker->randomElement($userIds);
        $user2 = $this->faker->randomElement(array_diff($userIds, [$user1]));

        // Vérifiez si une amitié existe déjà avec ces deux utilisateurs
        $existingFriendship = Friend::where(function ($query) use ($user1, $user2) {
            $query->where('user_id', $user1)->where('friend_id', $user2);
        })->orWhere(function ($query) use ($user1, $user2) {
            $query->where('user_id', $user2)->where('friend_id', $user1);
        })->exists();

        // Si une amitié existe déjà, réessayez jusqu'à ce que vous trouviez une nouvelle amitié
        while ($existingFriendship) {
            $user1 = $this->faker->randomElement($userIds);
            $user2 = $this->faker->randomElement(array_diff($userIds, [$user1]));

            $existingFriendship = Friend::where(function ($query) use ($user1, $user2) {
                $query->where('user_id', $user1)->where('friend_id', $user2);
            })->orWhere(function ($query) use ($user1, $user2) {
                $query->where('user_id', $user2)->where('friend_id', $user1);
            })->exists();
        }

        // Retournez les IDs sélectionnés
        return [
            'user_id' => $user1,
            'friend_id' => $user2,
        ];
    }
}
