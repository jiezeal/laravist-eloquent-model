#Eloquent 多态关联

php artisan make:model Lesson -m

2017_03_28_055417_create_lessons_table.php
```
public function up()
{
    Schema::create('lessons', function (Blueprint $table) {
        $table->increments('id');
        $table->string('title');
        $table->timestamps();
    });
}
```

ModelFactory.php
```
/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Lesson::class, function (Faker\Generator $faker) {
    return [
        'title' => $faker->sentence,
    ];
});
```

php artisan tinker
namespace App
factory(Lesson::class, 10)->create()

php artisan make:model Comment -m




$lesson = Lesson::find(1)
$lesson->comments->toArray()

$post = Post::find(2)
$post->comments->toArray()

$comment = Comment::find(1)
$comment->commentable
$comment = Comment::find(2)
$comment->commentable












